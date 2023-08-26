@props([
    'label' => '',
    'name',
    'required' => false,
    'autoFocus' => false,
    'type' => 'text',
    'selectOptions' => [],
    'value' => null,
])

<div class="form-group row justify-content-center align-items-center mb-3">
    <div class="col-4">
        @if (!in_array($type, ['hidden', 'checkbox']))
            <label for="{{ $name }}" class="col-form-label border-left">{{ __($label) }}</label>
        @endif
    </div>
    <div class="col-7 @if ($type === 'checkbox') ps-1 @endif">
        @if ($type === 'select')
            <div class="form-group m-0">
                <select id="{{ $name }}" name="{{ $name }}" class="form-select" value="{{ old($name) }}"
                    @if ($required) required @endif
                    @if ($autoFocus) autofocus @endif>
                    <option @if (old($name) === 'null') selected @endif value="null">
                        Chọn
                    </option>

                    @foreach ($selectOptions as $option)
                        <option @if (old($name) === $option['value']) selected @endif value="{{ $option['value'] }}">
                            {{ $option['label'] }}
                        </option>
                    @endforeach
                </select>
            </div>
        @elseif ($type === 'checkbox')
            @php
                $checkboxId = 're-checkbox-' . uniqid();
                $svgId = "$checkboxId-svg";
            @endphp

            <div class="re-checkbox-wrapper">
                <input class="input" id="{{ $checkboxId }}" type="checkbox" />

                <label class="label" for="{{ $checkboxId }}">
                    <span>
                        <svg width="12px" height="10px">
                            <use xlink:href="#{{ $svgId }}"></use>
                        </svg>
                    </span>
                    <span>{{ $label }}</span>
                </label>

                <svg class="inline-svg">
                    <symbol id="{{ $svgId }}" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </symbol>
                </svg>
            </div>
        @elseif ($type === 'date')
            <input id="{{ $name }}" type="text"
                class="date-picker w-100 h-auto form-control @error("$name") is-invalid @enderror"
                name="{{ $name }}" value="{{ $value ?? old($name) }}" placeholder="dd/mm/yyyy"
                autocomplete="{{ $name }}" @if ($required) required @endif
                @if ($autoFocus) autofocus @endif />
        @else
            <input id="{{ $name }}" type="{{ $type }}"
                class="@if ($type === 'checkbox') w-auto h-auto @endif form-control @error("$name") is-invalid @enderror"
                name="{{ $name }}" value="{{ $value ?? old($name) }}" autocomplete="{{ $name }}"
                @if ($required) required @endif @if ($autoFocus) autofocus @endif
                @if ($type === 'checkbox' && old($name)) checked @endif />
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
