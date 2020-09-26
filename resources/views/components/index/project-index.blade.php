<div class="col-sm-6 col-md-6 colm10 itemduan">
     <div class="hourseitem row p-0">
          <div class="blii col-sm-6 col-md-6 colm10 pl-0">
               <div class="img h-100">
                    @if (!empty($data->Image))
                    <img style="max-height: 230px;" src={{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }} alt="{{ $data->Title }}" class="thumb">
                    @else
                    <img style="max-height: 230px;" src={{ asset('dist/img/default_bds.jpg') }} alt="{{ $data->Title }}" class="thumb">
                    @endif
               </div>
               <a href="{{-- route('projectDetail',$data->Slug) --}}" class="linkdetail"></a>

          </div>
          <div class="info col-sm-6 col-md-6 py-2">
               <h2><a href="{{-- route('projectDetail',$data->Slug) --}}" style="text-transform: capitalize;">{{ $data->Title }}</a></h2>
               <p class="city" style="overflow: hidden; height: 45px;">
                    <span style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2" title="{{ $data->Location }}">
                         <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $data->Location }}
                    </span>
               </p>
               <p class="bold500"><span class="font-weight-bold">Quy mô: </span> {{ $data->NumberOfBlock }} block, {{ $data->NumberOfApartment }} căn hộ </p>
               <p class="bold500"><span class="font-weight-bold">Năm xây dựng: </span> {{ $data->YearBuilt }}</p>
               <p class="bold500"><span class="font-weight-bold">Giá từ: </span> {{ number_format($data->Price, 0, ".", ",") }} Tỷ</p>
               <p class="bold500"><span class="font-weight-bold">Bán: </span> {{ $data->post_sale_count }} <span class="font-weight-bold"> - </span> <span class="font-weight-bold">Thuê: </span> {{ $data->post_rent_count }}</p>
               <p class="bold500"><span class="font-weight-bold">Tiến độ: </span> {{ ($data->Progress ?? '-') === 1 ? "Đang mở bán" : "Sắp mở bán" }}</p>
          </div>
          <hr class="w-100 mt-0">
          @if (!empty($data->post_rent))
          <div class="col-sm-12 col-md-12">
               <x-index.post-project :postData="$data->post_rent" />
          </div>
          @else
          <div class="col-sm-12 col-md-12">
               <div class="row p-2 border mb-3" style="height: 202px; position: relative;">
                    <span class="text-center w-100" style="transform: translateY(-50%); position: absolute; top: 50%;">Dự án chưa có bất động sản nào đang cho thuê!</span>
               </div>
          </div>
          @endif
          @if (!empty($data->post_sale))
          <div class="col-sm-12 col-md-12">
               <x-index.post-project :postData="$data->post_sale" />
          </div>
          @else
          <div class="col-sm-12 col-md-12">
               <div class="row p-2 border mb-3" style="height: 202px; position: relative;">
                    <span class="text-center w-100" style="transform: translateY(-50%); position: absolute; top: 50%;">Dự án chưa có bất động sản nào đang bán!</span>
               </div>
          </div>
          @endif
     </div>
</div>
