<?php

namespace App\DataBox;
use App\Utils\CommonUtil;
use ErrorException;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * This class use to store input, out data and validate rules
 */
abstract class DataBox
{
    const FILTER_SEARCH = 'q';
    const FILTER_GREATER_THAN = 'gt';
    const FILTER_GREATER_THAN_OR_EQUAL = 'gte';
    const FILTER_LESS_THAN = 'gt';
    const FILTER_LESS_THAN_OR_EQUAL = 'gte';
    const FILTER_BETWEEN = 'btw';
    const FILTER_BETWEEN_EQUAL = 'btwe';
    const FILTER_BETWEEN_EQUAL_MIN = 'btwei';
    const FILTER_BETWEEN_EQUAL_MAX = 'btwea';
    const FILTER_PAGE = 'p';
    const FILTER_PAGE_SIZE = 's';

    /**
     * Map attributes and rule
     * ! This is important constant and required
     *
     * It'll use to defined data validation rules
     * Use follow laravel validation rules guide
     * @var array
     * Ex: ['id' => 'requied']
     */
    const ATTRIBUTE_RULE_MAPPING = [
        // 'id' => 'requied'
    ];

    private $acceptFilterQueries = [
        self::FILTER_SEARCH,
        self::FILTER_GREATER_THAN,
        self::FILTER_GREATER_THAN_OR_EQUAL,
        self::FILTER_LESS_THAN,
        self::FILTER_LESS_THAN_OR_EQUAL,
        self::FILTER_BETWEEN,
        self::FILTER_BETWEEN_EQUAL,
        self::FILTER_BETWEEN_EQUAL_MIN,
        self::FILTER_BETWEEN_EQUAL_MAX,
        self::FILTER_PAGE,
        self::FILTER_PAGE_SIZE,
    ];

    private Collection $attributes;
    private Collection $rules;
    private Collection $input;
    private ?Collection $output;
    private Collection $filters;
    private bool $isValid = false;
    private bool $isValidated = false;
    private array $errors = [];

    public function __construct()
    {
        $this->initialized();
    }

    private function initialized(): void
    {
        if (!defined($this::class . "::ATTRIBUTE_RULE_MAPPING") || empty($this::ATTRIBUTE_RULE_MAPPING)) {
            throw new ErrorException('Constant "' . $this::class . '::ATTRIBUTE_RULE_MAPPING" is required.');
        }

        $this->attributes = collect(array_keys($this::ATTRIBUTE_RULE_MAPPING));
        $this->rules = collect($this::ATTRIBUTE_RULE_MAPPING);
        $this->input = $this->getDefaultAttributeValues()->collapse();
        $this->output = null;
        $this->filters = new Collection();
    }

    public function getAttributes(): Collection
    {
        return $this->attributes->unique()->all;
    }

    public function getRule(string $rule): ?string
    {
        if (!array_key_exists($rule, $this->attributes->all())) {
            return null;
        }

        return $this->attributes[$rule];
    }

    public function getRules(): Collection
    {
        return $this->attributes->values();
    }

    public function getDefaultAttributeValues(): Collection
    {
        $attributeValues = $this->attributes->map(fn(string $attribute) => [$attribute => null]);

        return $attributeValues;
    }

    public function getInput(): Collection
    {
        return $this->input;
    }

    public function setOutput(Collection $outputData): Collection
    {
        return $this->output = $outputData;
    }

    public function getOutput(): Collection
    {
        return $this->output;
    }

    public function getError(): array
    {
        return $this->errors;
    }

    public function validate(): void
    {
        $validator = Validator::make($this->input->toArray(), $this->rules->toArray());

        $this->isValidated = true;

        if (!$validator->fails()) {
            $this->isValid = true;
            return;
        }

        $this->isValid = false;
        $this->errors = $validator->errors()->toArray();
    }

    public function fill(array $data): self
    {
        $this->attributes->map(function(string $attribute) use ($data) {
            if (!array_key_exists($attribute, $data)) {
                return;
            }

            $this->input->put($attribute, $data[$attribute]);
        });

        return $this;
    }

    public function fromRequest(Request $request): self
    {
        $requestData = null;

        $methodsUseQueryStringAsInput = [
            Request::METHOD_GET,
            Request::METHOD_DELETE
        ];

        if (in_array($request->method(), $methodsUseQueryStringAsInput)) {
            $requestData = $request->query() ?? [];
        }

        if ($requestData === null) {
            $requestData = $request->post() ?? [];
        }

        $arrayAttributes = $this->attributes->toArray();

        $inputData = CommonUtil::filterArrayItemByKeys($requestData, $arrayAttributes);
        $inputFilters = CommonUtil::filterArrayItemByKeys($requestData, $this->acceptFilterQueries);

        $this->fill($inputData);
        $this->filter($inputFilters);

        return $this;
    }

    public function filter(array $filterData): self
    {
        array_map(
            function(string $filterQuery) use ($filterData) {
                if (!in_array($filterQuery, array_keys($filterData))) {
                    return;
                }

                $this->filters->put($filterQuery, $filterData[$filterQuery]);
            },
            $this->acceptFilterQueries
        );

        return $this;
    }
}
