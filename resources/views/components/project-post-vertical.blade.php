<div class="hourseitem row p-0" style="box-shadow: 0 3px 16px rgba(0,0,0,.14);">
     <div class="blii col-sm-6 col-md-6 colm10 pl-0">
          <div class="img h-100">
               @if (!empty($data->Image))
               <img style="max-height: 230px;" src={{ asset(json_decode($data->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }} alt="{{ $data->Title }}" class="thumb">
               @else
               <img style="max-height: 230px;" src={{ asset('dist/img/default_bds.jpg') }} alt="{{ $data->Title }}" class="thumb">
               @endif
          </div>
          <a href="{{ $data->url }}" class="linkdetail"></a>

     </div>
     <div class="info col-sm-6 col-md-6 py-2">
          <h2 style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" data-toggle="tooltip" data-placement="top" data-original-title="{{ $data->Title }}">
               <a href="{{ $data->url }}" style="text-transform: capitalize;">{{ $data->Title }}</a>
          </h2>
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
     <div class="row pb-3 w-100">
          <div class="chothue col-md-6">
               <div class="row pt-2" style="border-bottom: #ddd solid 1px;">
                    <h5 class="mx-auto">Cho thuê</h5>
               </div>
               @if (count($data->post_rent_list) > 0)
               @foreach ($data->post_rent_list as $data_rent_item)
               <div class="col-sm-12 col-md-12 colm10">
                    <x-post-vertical :postStyle="'background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);'" :postData="$data_rent_item" />
               </div>
               @endforeach
               @else
               <div class="col-sm-12 col-md-12 colm10">
                    <h6 class="text-center py-4 text-secondary">Dự án chưa có BĐS cho thuê</h6>
               </div>
               @endif
          </div>
          <div class="bdsban col-md-6">
               <div class="row pt-2" style="border-bottom: #ddd solid 1px;">
                    <h5 class="mx-auto">Bán</h5>
               </div>
               @if (count($data->post_sale_list) > 0)
               @foreach ($data->post_sale_list as $data_sale_item)
               <div class="col-sm-12 col-md-12 colm10">
                    <x-post-vertical :postStyle="'background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);'" :postData="$data_sale_item" />
               </div>
               @endforeach
               @else
               <div class="col-sm-12 col-md-12 colm10">
                    <h6 class="text-center py-4 text-secondary">Dự án chưa có BĐS bán</h6>
               </div>
               @endif
          </div>
          @if (count($data->post_rent_list) > 0)
          <div class="col-md-6 mt-3"><a href="{{ route('project', [$data->City->Slug, $data->District->Slug, $data->Slug, 'thue']) }}" class="btn btn-light w-100" style="color: #1d5f6f">Xem Tất Cả</a></div>
          @endif
          @if (count($data->post_sale_list) > 0)
          <div class="col-md-6 mt-3"><a href="{{ route('project', [$data->City->Slug, $data->District->Slug, $data->Slug, 'ban']) }}" class="btn btn-light w-100" style="color: #1d5f6f">Xem Tất Cả</a></div>
          @endif
     </div>
</div>
