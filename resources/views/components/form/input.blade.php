@props([
    'label' => '',
    'name',
    'required' => false,
    'autoFocus' => false,
    'type' => 'text',
    'selectOptions' => [],
    'value' => null
])

<div class="form-group row justify-content-center align-items-center mb-0">
    @if ($type !== 'hidden')
        <label for="{{ $name }}" class="col-4 col-form-label border-left">{{ __($label) }}</label>
    @endif
    <div class="col-7">
        @if ($type === 'select')
            <div class="form-group m-0">
                <select
                    id="{{ $name }}"
                    name="{{ $name }}"
                    class="custom-select"
                    value="{{ old($name) }}"
                    @if ($required) required @endif
                    @if ($autoFocus) autofocus @endif
                >
                    <option  @if (old($name) === 'null') selected @endif value="null">
                        Chọn
                    </option>

                    @foreach ($selectOptions as $option)
                        <option
                            @if (old($name) === $option['value']) selected @endif
                            value="{{ $option['value'] }}"
                        >
                            {{ $option['label'] }}
                        </option>
                    @endforeach
                </select>
            </div>
        @else
            <input id="{{ $name }}"
                type="{{ $type }}"
                class="@if ($type === 'checkbox') w-auto h-auto @endif form-control @error("$name") is-invalid @enderror"
                name="{{ $name }}"
                value="{{ $value ?? old($name) }}"
                autocomplete="{{ $name }}"
                @if ($required) required @endif
                @if ($autoFocus) autofocus @endif
                @if ($type === 'checkbox' && old($name)) checked @endif
            />
        @endif
    </div>
</div>
<div class="form-group row justify-content-center align-items-center">
    <div class="col-4"></div>
    <div class="col-7">
        @error("$name")
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
