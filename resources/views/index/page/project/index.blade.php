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
                                                       <img style="max-height: 180px;" src={{ asset(json_decode($project->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') }} alt="{{ $project->Title }}" class="thumb">
                                                       @else
                                                       <img style="max-height: 180px;" src={{ asset('dist/img/default_bds.jpg') }} alt="{{ $project->Title }}" class="thumb">
                                                       @endif
                                                  </div>
                                                  <a href={{ ('/project'.$project->ProjectId) }} class="linkdetail"></a>

                                             </div>
                                             <div class="info col-sm-6 col-md-6">
                                                  <h2><a href="{{ route('project', [$project->City->Slug, $project->District->Slug, $project->Slug]) }}" style="text-transform: capitalize;">{{ $project->Title }}</a></h2>
                                                  <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $project->Location }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Quy mô: </span> {{ $project->NumberOfBlock }} block, {{ $project->NumberOfApartment }} căn hộ </p>
                                                  <p class="bold500"><span class="font-weight-bold">Năm xây dựng: </span> {{ $project->YearBuilt }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Giá từ: </span> {{ number_format($project->Price, 0, ".", ",") }} Tỷ</p>
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
                                                       <x-index.post-vertical :postStyle="'background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);'" :postData="$project_rent_item" />
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
                                                       <x-index.post-vertical :postStyle="'background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);'" :postData="$project_sale_item" />
                                                  </div>
                                                  @endforeach
                                                  @else
                                                  <div class="col-sm-12 col-md-12 colm10">
                                                       <h6 class="text-center py-4 text-secondary">Dự án chưa có BĐS bán</h6>
                                                  </div>
                                                  @endif
                                             </div>
                                             @if (count($project->post_sale_list) > 0)
                                             <div class="col-md-6 mt-3"><a href="{{-- route('postProject',[$project->Slug]) --}}" class="btn btn-light w-100">Xem Tất Cả</a></div>
                                             @endif
                                             @if (count($project->post_sale_list) > 0)
                                             <div class="col-md-6 mt-3"><a href="{{-- route('postProject',[$project->Slug]) --}}" class="btn btn-light w-100">Xem Tất Cả</a></div>
                                             @endif
                                        </div>
                                   </div>
                                   @endforeach
                              </div>
                         </div>

                         <!--<property-component type="rent" url="https://flex-home.botble.com/ajax/properties"></property-component>-->
                         <div class="padtop30 col-sm-3 col-md-3">
                              <x-index.search-box />
                              {{-- <x-index.box-right :category_id="6" /> --}}
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
                                             <a href="{{ route('project',[$district->CitySlug, $district->Slug]) }}">
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
