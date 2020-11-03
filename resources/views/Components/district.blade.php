<div class="item itemarea px-1">
     <a href="{{ $data->url }}">
          {{-- <img src="{{ asset('dist/img/los-angeles-winter-2016-410x270.jpg')}}" alt="Alhambra"> --}}
          <img src="{{ asset($data->Image)}}" alt="{{ $data->Name }}">
          <h4>{{ $data->Name }}</h4>
     </a>
</div>
