<div class="row p-2 border mb-3 w-100">
     <h3 class="m-0 mb-2 w-100" style="height: 45px; overflow: hidden;" data-toggle="tooltip" data-placement="top" data-original-title="{{ $data->Title }}"><a href="{{ $data->url }}" style="overflow-wrap: anywhere; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2">{{ $data->Title }}</a></h3>
     <div class="hinhpost col-sm-6 col-md-6">
          <div class="img">
               <img data-src="{{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }}" src="{{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }}" alt="{{ $data->Title }}" class="thumb" style="max-height: 125px; height: max-content;">
          </div>
          <a href="{{ $data->url }}" class="linkdetail"></a>
          <div class="status"><span class="label-success status-label">{{ $data->category_type->Name ?? '-' }}</span></div>
     </div>
     <div class="col-sm-6 col-md-6">
          <p class="city"><i class="fas fa-compass" style="opacity: 0.7;"></i> {{ $data->Direction ?? 'Không xác định' }}</p>
          <p class="bold500">Giá: {{ number_format($data->Price, 0, ".", ",") }} {{ $data->PriceUnit }}</p>
          <p class="threemt bold500">
               <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                    <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                    <i class="vti">{{ $data->Bedroom ?? '-' }}</i>
               </span>
               <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                    <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                    <i class="vti">{{ $data->Bathroom ?? "-"}}</i>
               </span>
               <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                    <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                    <i class="vti">{{ (round(($data->Width) * ($data->Length), 1)) }} m²</i>
               </span>
          </p>
          <p class="bold500">
               <span data-toggle="tooltip" data-placement="top" data-original-title="Lượt xem" style="margin-right: 10%;">
                    <i class="fas fa-eye" style="opacity: .6; margin-right: 3px;"></i>
                    <i class="vti" style="font-style: normal;">{{ $data->ViewCount ?? "-"}}</i>
               </span>
               <span data-toggle="tooltip" data-placement="top" data-original-title="Thích!">
                    <i class="far fa-heart" style="opacity: .6; margin-right: 3px;"></i>
               </span>
          </p>
          <a href="{{ route('project', [$data->City->Slug, $data->District->Slug, $data->Project->Slug, $data->category_type->Slug]) }}" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
     </div>
</div>
