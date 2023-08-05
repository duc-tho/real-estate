@php
    $checkboxId = "re-checkbox-" . uniqid();
    $svgId = "$checkboxId-svg";
@endphp

@props([
    'label' => '',
    'id' => $checkboxId,
])

<div class="re-checkbox-wrapper">
    <input class="input" id="{{ $id }}" type="checkbox" />

    <label class="label" for="{{ $id }}">
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
