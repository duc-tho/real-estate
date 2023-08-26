{{-- images: [ $url => $title, ... ] --}}
@props(['images' => []])

<div class="f-carousel">
    @foreach ($images as $title => $url)
    <a
        class="f-carousel__slide"
        href="{{ $url }}"
        data-fancybox="gallery" data-caption="{{ $title }}"
        data-thumb-src="{{ $url }}"
    >
        <img data-lazy-src="{{ $url }}" />
    </a>
    @endforeach
</div>
