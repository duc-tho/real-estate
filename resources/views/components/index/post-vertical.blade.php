<div class="w-100" style="{{ $style ?? '' }}">
     <div class="hourseitem pt-0">
          <div class="blii" style="height: 200px;">
               <div class="img" style="height: 100%;">
                    <img src="{{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }}" alt="{{ $data->Title }}" class="thumb">
               </div>
               <a href="{{ $data->url }}" class="linkdetail"></a>
               <div class="status">
                    <span class="label-success status-label" style="text-transform: capitalize">{{ $data->category_type ?? '-' }}</span>
               </div>
          </div>
          <div class="info">
               <h3 data-toggle="tooltip" data-placement="top" data-original-title="{{ $data->Title }}">
                    <a style="overflow-wrap: anywhere;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2; min-height: 40px" href="{{ $data->url }}">{{ $data->Title}}</a>
               </h3>
               <p class="city">
                    <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                    {{ $data->Location }}
               </p>
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
               <hr>
               <p class="bold500 d-flex justify-content-between">
                    <span>Giá: {{ number_format($data->Price, 0, ".", ",") }} {{ $data->PriceUnit }}</span>
                    <span><i class="fas fa-eye" style="opacity: .7"></i> {{ $data->ViewCount }}</span>
               </p>
          </div>
     </div>
</div>
