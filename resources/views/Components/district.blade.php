<div class="district-image item itemarea px-1">
     <a href="{{ $data->url }}">
          <img class="district-image" src="{{ asset($data->Image ?? 'dist/img/los-angeles-winter-2016-410x270.jpg')}}" alt="{{ $data->Name }}">
          <h4>{{ $data->Name }}</h4>
     </a>
</div>
