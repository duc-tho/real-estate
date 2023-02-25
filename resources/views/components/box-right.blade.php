<div class="boxright">
     <h5>Dự án các khu vực</h5>
     <ul class="listnews">
          @empty(!$district_list)
          @foreach ($district_list as $district)
          <li><a href="{{ route('postDistrict', [$parent_category->Slug,  $category_slug, $district->CitySlug, $district->Slug]) }}" class="text-dark">{{ $district->Name }}</a></li>
          @endforeach
          @endempty
     </ul>
</div>
