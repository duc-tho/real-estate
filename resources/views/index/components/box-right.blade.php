<div class="boxright">
     <h5>Dự án các khu vực</h5>
     <ul class="listnews">
          @empty(!$data['district_list'])
          @foreach ($data['district_list'] as $district)
          <li><a href="{{ route('postDistrict', [$district->CitySlug, $district->Slug]) }}" class="text-dark">{{ $district->Name }}</a></li>
          @endforeach
          @endempty
     </ul>
</div>
