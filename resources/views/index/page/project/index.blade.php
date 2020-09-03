<div id="app">
     <div id="ismain-homes">
          <div class="bgheadproject hidden-xs" style="background: url('{{ asset('dist/img/banner-du-an.jpg') }}')">
               <div class="description">
                    <div class="container-fluid w90">
                         <h1 class="text-center">Dự án BĐS</h1>
                         <p class="text-center">Chúng tôi luôn cập nhật những dự án BDS mới nhất</p>
                         <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                              <li class="breadcrumb-item active">Dự án</li>
                         </ul>
                    </div>
               </div>
          </div>

          <p>
               <div class="container-fluid w90">
                    <div class="row">
                         <div class="homehouse padtop30 col-sm-9 col-md-9">
                              <div class="row">
                                   <div class="col-12">
                                        <h2>Dự Án</h2>
                                        <p>Danh sách dự án BDS nổi bật</p>
                                   </div>
                              </div>
                              <div class="row rowm10">
                                   @foreach($data['project_list'] as $project)
                                   <div class="col-sm-12 col-md-12 colm10 itemduan">
                                        <div class="hourseitem row" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;box-shadow: 0 4px 7px -4px #aaa;">
                                             <div class=" blii col-sm-6 col-md-6 colm10">
                                                  <div class="img">
                                                       @if (!empty($project->Image))
                                                       <img style="max-height: 180px;" src={{ asset(explode("|", $project->Image)[0]) }} alt="{{ $project->Title }}" class="thumb">
                                                       @else
                                                       <img style="max-height: 180px;" src={{ asset('dist/img/default_bds.jpg') }} alt="{{ $project->Title }}" class="thumb">
                                                       @endif
                                                       {{-- <img data-src="{{('/dist/img/upload/project/'.$project->Image)}}" src="{{('/dist/img/upload/project/'.$project->Image)}}" alt="" class="thumb"> --}}
                                                  </div>
                                                  <a href={{ ('/project'.$project->ProjectId) }} class="linkdetail"></a>

                                             </div>
                                             <div class="info col-sm-6 col-md-6">
                                                  <h2><a href="{{ route('projectDetail', $project->Slug) }}" style="text-transform: capitalize;">{{ $project->Title }}</a></h2>
                                                  <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $project->Location }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Quy mô: </span> {{ $project->NumberOfBlock }} block, {{ $project->NumberOfApartment }} căn hộ </p>
                                                  <p class="bold500"><span class="font-weight-bold">Năm xây dựng: </span> {{ $project->YearBuilt }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Giá từ: </span> {{ number_format($project->Price, 0, ".", ",") }} Tỷ - <span class="text-secondary text-small">- / m²</span></p>
                                                  <p class="bold500"><span class="font-weight-bold">Bán: </span> {{ $project->post_sale_count }} <span class="font-weight-bold"> - </span> <span class="font-weight-bold">Thuê: </span> {{ $project->post_rent_count }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Tiến độ: </span> -</p>
                                             </div>
                                        </div>
                                        <div class="row pb-3">
                                             <div class="chothue col-md-6">
                                                  <div class="row pt-2" style="border-bottom: #ddd solid 1px;">
                                                       <h5 class="mx-auto">Cho thuê</h5>
                                                  </div>
                                                  @if (count($project->post_rent_list) > 0)
                                                  @foreach ($project->post_rent_list as $project_rent_item)
                                                  <div class="col-sm-12 col-md-12 colm10">
                                                       <div class="hourseitem pt-0" style="background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);">
                                                            <div class="blii" style="height: 200px;">
                                                                 <div class="img" style="height: 100%;">
                                                                      <img src="{{ asset(explode("|", $project_rent_item->Image)[0]) }}" alt="{{ $project_rent_item->Title }}" class="thumb">
                                                                 </div>
                                                                 <a href="{{ route('postDetail', $project_rent_item->Slug) }}" class="linkdetail"></a>
                                                                 <div class="status">
                                                                      <span class="label-success status-label">Cho Thuê</span>
                                                                 </div>
                                                            </div>
                                                            <div class="info" style="background: transparent;">
                                                                 <h3>
                                                                      <a style="overflow-wrap: anywhere;" href="{{ route('postDetail', $project_rent_item->Slug) }}">{{ $project_rent_item->Title}}</a>
                                                                 </h3>
                                                                 <p class="city">
                                                                      <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                                      {{ $project_rent_item->StreetName }}, {{ $project_rent_item->AreaName }}, {{ $project_rent_item->DistrictName }}, {{ $project_rent_item->CityName }}
                                                                 </p>
                                                                 <p class="bold500">Giá: {{ number_format($project_rent_item->Price, 0, ".", ",") }} Tỷ</p>
                                                                 <p class="threemt bold500">
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                                           <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                                           <i class="vti">{{ $project_rent_item->Bedroom ?? '-' }}</i>
                                                                      </span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                                           <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                                           <i class="vti">{{ $project_rent_item->Bathroom ?? "-"}}</i>
                                                                      </span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                                           <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                                           <i class="vti">- m²</i>
                                                                      </span></p>
                                                            </div>
                                                       </div>
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
                                                  @if (count($project->post_sale_list) > 0)
                                                  @foreach ($project->post_sale_list as $project_sale_item)
                                                  <div class="col-sm-12 col-md-12 colm10">
                                                       <div class="hourseitem pt-0" style="background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);">
                                                            <div class="blii" style="height: 200px;">
                                                                 <div class="img" style="height: 100%;">
                                                                      <img src="{{ asset(explode("|", $project_sale_item->Image)[0]) }}" alt="{{ $project_sale_item->Title }}" class="thumb">
                                                                 </div>
                                                                 <a href="{{ route('postDetail', $project_sale_item->Slug) }}" class="linkdetail"></a>
                                                                 <div class="status">
                                                                      <span class="label-success status-label">Bán</span>
                                                                 </div>
                                                            </div>
                                                            <div class="info" style="background: transparent;">
                                                                 <h3>
                                                                      <a style="overflow-wrap: anywhere;" href="{{ route('postDetail', $project_sale_item->Slug) }}">{{ $project_sale_item->Title}}</a>
                                                                 </h3>
                                                                 <p class="city">
                                                                      <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                                      {{ $project_sale_item->StreetName }}, {{ $project_sale_item->AreaName }}, {{ $project_sale_item->DistrictName }}, {{ $project_sale_item->CityName }}
                                                                 </p>
                                                                 <p class="bold500">Giá: {{ number_format($project_sale_item->Price, 0, ".", ",") }} Tỷ</p>
                                                                 <p class="threemt bold500">
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                                           <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                                           <i class="vti">{{ $project_sale_item->Bedroom ?? '-' }}</i>
                                                                      </span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                                           <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                                           <i class="vti">{{ $project_sale_item->Bathroom ?? "-"}}</i>
                                                                      </span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                                           <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                                           <i class="vti">- m²</i>
                                                                      </span>
                                                                 </p>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  @endforeach
                                                  @else
                                                  <div class="col-sm-12 col-md-12 colm10">
                                                       <h6 class="text-center py-4 text-secondary">Dự án chưa có BĐS bán</h6>
                                                  </div>
                                                  @endif
                                             </div>
                                             @if (count($project->post_sale_list) > 0)
                                             <div class="col-md-6 mt-3"><a href="{{ route('postProject', ['thue', $project->Slug]) }}" class="btn btn-light w-100">Xem Tất Cả</a></div>
                                             @endif
                                             @if (count($project->post_sale_list) > 0)
                                             <div class="col-md-6 mt-3"><a href="{{ route('postProject', ['ban', $project->Slug]) }}" class="btn btn-light w-100">Xem Tất Cả</a></div>
                                             @endif
                                        </div>
                                   </div>
                                   @endforeach
                              </div>
                         </div>

                         <!--<property-component type="rent" url="https://flex-home.botble.com/ajax/properties"></property-component>-->
                         <div class="padtop30 col-sm-3 col-md-3">
                              <div class="search-box">
                                   <h3>TÌM NHANH</h3>
                                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ban" role="tab" aria-controls="home" aria-selected="true">Bán</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#thue" role="tab" aria-controls="profile" aria-selected="false">Thuê</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" id="contact-tab" data-toggle="tab" href="#duan" role="tab" aria-controls="contact" aria-selected="false">Dự án</a>
                                        </li>
                                   </ul>
                                   <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="ban" role="tabpanel" aria-labelledby="home-tab">
                                             NHÀ ĐẤT BÁN
                                             <form action="#https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-category" class="control-label">Danh mục</label>
                                                       <select name="category_id" id="select-category" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Căn hộ</option>
                                                            <option value="2">Đất nền</option>
                                                            <option value="3">Nhà riêng</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Phường 1</option>
                                                            <option value="2">Phường 2</option>
                                                            <option value="3">Phường 3</option>
                                                            <option value="4">Phường 4</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <label for="min_floor" class="control-label">Giá từ</label>
                                                                 <input type="number" name="min_floor" id="min_floor" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <label for="max_floor" class="control-label">đến</label>
                                                                 <input type="number" name="max_floor" id="max_floor" value="" class="form-control">
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <label for="min_flat" class="control-label">Diện tích từ</label>
                                                                 <input type="number" name="min_flat" id="min_flat" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <label for="max_flat" class="control-label">đến</label>
                                                                 <input type="number" name="max_flat" id="max_flat" value="" class="form-control"></div>
                                                       </div>
                                                  </div>

                                                  <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                                                  </div>
                                             </form>

                                        </div>
                                        <div class="tab-pane fade" id="thue" role="tabpanel" aria-labelledby="profile-tab">
                                             CHO THUÊ
                                             <form action="#https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-category" class="control-label">Danh mục</label>
                                                       <select name="category_id" id="select-category" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Căn hộ</option>
                                                            <option value="2">Đất nền</option>
                                                            <option value="3">Nhà riêng</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Phường 1</option>
                                                            <option value="2">Phường 2</option>
                                                            <option value="3">Phường 3</option>
                                                            <option value="4">Phường 4</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <label for="min_floor" class="control-label">Giá từ</label>
                                                                 <input type="number" name="min_floor" id="min_floor" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <label for="max_floor" class="control-label">đến</label>
                                                                 <input type="number" name="max_floor" id="max_floor" value="" class="form-control">
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <label for="min_flat" class="control-label">Diện tích từ</label>
                                                                 <input type="number" name="min_flat" id="min_flat" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <label for="max_flat" class="control-label">đến</label>
                                                                 <input type="number" name="max_flat" id="max_flat" value="" class="form-control"></div>
                                                       </div>
                                                  </div>

                                                  <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                                                  </div>
                                             </form>
                                        </div>
                                        <div class="tab-pane fade" id="duan" role="tabpanel" aria-labelledby="contact-tab">
                                             DỰ ÁN
                                             <form action="#https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            {{-- <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option> --}}
                                                       </select>
                                                  </div>

                                                  <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>

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
                         </div>
                    </div>
               </div>
          </p>

          <p>
               <div class="container-fluid w90">

                    <div class="padtop70">
                         <div class="areahome">
                              <div class="row">
                                   <div class="col-12">
                                        <h2>Dự án theo khu vực</h2>
                                        <p>Các khu vực trong thành phố</p>
                                   </div>
                              </div>
                              <div style="position:relative;">
                                   <div class="owl-carousel" id="project-city-slides">
                                        @empty(!$data['district_list'])
                                        @foreach ($data['district_list'] as $district)
                                        <div class="item itemarea">
                                             <a href="{{ route('postDistrict', [$district->CitySlug, $district->Slug]) }}">
                                                  <img src="{{ asset('dist/img/los-angeles-winter-2016-410x270.jpg')}}" alt="{{ $district->Name }}">
                                                  <h4>{{ $district->Name }}</h4>
                                             </a>
                                        </div>
                                        @endforeach
                                        @endempty
                                   </div>
                                   <i class="am-next"><img src="https://flex-home.botble.com/themes/flex-home/images/aleft.png" alt="pre"></i>
                                   <i class="am-prev"><img src="https://flex-home.botble.com/themes/flex-home/images/aright.png" alt="next"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </p>
     </div>
</div>
