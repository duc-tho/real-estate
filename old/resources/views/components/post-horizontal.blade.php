<div class="hourseitem row rounded border" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
     <div class=" blii col-sm-6 col-md-6 colm10">
          <div class="img"><img src="{{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }}" alt="{{ $data->Title }}" class="thumb" style="max-height: 180px;"></div>
          <a href="{{ $data->url }}" class="linkdetail"></a>
     </div>
     <div class="info col-sm-6 col-md-6 d-flex flex-column justify-content-between">
          <div>
               <h3><a href="{{ $data->url }}" style="overflow-wrap: anywhere;">{{ $data->Title }}</a></h3>
               <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                    {{ $data->Location }}
               </p>
               <p class="threemt bold500">
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                         <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i> <i class="vti">{{ $data->Bedroom ?? '-'}}</i>
                    </span>
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                         <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i> <i class="vti">{{ $data->Bathroom ?? '-'}}</i>
                    </span>
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                         <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i> <i class="vti">{{ $data->Width * $data->Length }} m²</i>
                    </span>
               </p>
          </div>
          <div>
               <hr>
               <p class="bold500 d-flex justify-content-between">
                    <span>Giá: {{ number_format($data->Price, 0, ".", ",") }} {{ $data->PriceUnit }}</span>
                    <span><i class="fas fa-eye" style="opacity: .7"></i> {{ $data->ViewCount }}</span>
               </p>
          </div>
     </div>
</div>
