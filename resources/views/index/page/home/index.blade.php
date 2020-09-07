<div class="home_banner" style="background-image: url({{ asset('dist/img/banner.jpg') }})">
     <div class="topsearch">
          <form action="{{ route('project') }}" method="GET" id="frmhomesearch">
               <div class="typesearch" id="hometypesearch">
                    <a href="javascript:void(0)" class="active" rel="project" data-url="{{ route('project') }}">Dự Án</a>
                    <a href="javascript:void(0)" rel="sale" data-url="{{ route('post') }}">Bán</a>
                    <a href="javascript:void(0)" rel="rent" data-url="{{ route('post') }}">Cho Thuê</a>
               </div>
               <div class="input-group input-group-lg">

                    <div class="form-group">
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Tỉnh, Thành Phố --</option>
                              @foreach ($city as $ci)
                              <option value="{{asset('city/'.$ci->CityId.'/'.$ci->Slug.'.html')}}">{{$ci->Name}}</option>
                              {{-- <a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" style=" color: white;">{{$cate->cate_name}}</a> --}}
                              @endforeach
                         </select>
                    </div>

                    <div class="input-group-prepend">
                         <span class="input-group-text"><img src="{{ asset('dist/img/search_icon.png')}}" alt="search"></span>
                    </div>
                    <input type="hidden" name="type" value="project" id="txttypesearch">
                    <input type="text" class="form-control" name="k" placeholder="Enter keyword..." id="txtkey" autocomplete="off">
                    <div class="input-group-append">
                         <button class="btn btn-orange" type="submit">Tìm Kiếm</button>
                    </div>
               </div>
               <div class="listsuggest stylebar"></div>
          </form>
     </div>
</div>
<div id="app">
     <div id="ismain-homes">
          <p>
               <div class="box_shadow" style="margin-top: 0;">
                    <div class="container-fluid w90">
                         <div class="projecthome">
                              <div class="row">
                                   <div class="col-12">
                                        <h2>Các Bất Động Sản Nổi Bật</h2>
                                        <p style="margin: 0; margin-bottom: 10px">
                                             Danh sách các bất động sản nổi bật
                                        </p>
                                   </div>
                              </div>
                              <div class="row rowm10">
                                   <div class="col-6 col-sm-4  col-md-3 colm10">
                                        <div class="item">
                                             <div class="blii">
                                                  <div class="img"><img class="thumb" data-src="{{ asset('dist/img/1-410x270.jpg') }}" src="{{ asset('dist/img/1-410x270.jpg') }}" alt="Walnut Park Apartments">
                                                  </div>
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment" class="linkdetail"></a>
                                             </div>

                                             <div class="description">
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment">
                                                       <h5>Walnut Park Apartments</h5>
                                                       <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Austin, Texas 78753, USA</p>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-6 col-sm-4  col-md-3 colm10">
                                        <div class="item">
                                             <div class="blii">
                                                  <div class="img"><img class="thumb" data-src="dist/img/1-410x270.jpg" src="{{ asset('dist/img/1-410x270.jpg') }}" alt="Walnut Park Apartments">
                                                  </div>
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment" class="linkdetail"></a>
                                             </div>

                                             <div class="description">
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment">
                                                       <h5>Walnut Park Apartments</h5>
                                                       <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Austin, Texas 78753, USA</p>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-6 col-sm-4  col-md-3 colm10">
                                        <div class="item">
                                             <div class="blii">
                                                  <div class="img"><img class="thumb" data-src="dist/img/1-410x270.jpg" src="{{ asset('dist/img/1-410x270.jpg') }}" alt="Walnut Park Apartments">
                                                  </div>
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment" class="linkdetail"></a>
                                             </div>

                                             <div class="description">
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment">
                                                       <h5>Walnut Park Apartments</h5>
                                                       <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Austin, Texas 78753, USA</p>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-6 col-sm-4  col-md-3 colm10">
                                        <div class="item">
                                             <div class="blii">
                                                  <div class="img"><img class="thumb" data-src="dist/img/1-410x270.jpg" src="{{ asset('dist/img/1-410x270.jpg') }}" alt="Walnut Park Apartments">
                                                  </div>
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment" class="linkdetail"></a>
                                             </div>

                                             <div class="description">
                                                  <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment">
                                                       <h5>Walnut Park Apartments</h5>
                                                       <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Austin, Texas 78753, USA</p>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
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
                                        <h2>Bất động sản theo khu vực</h2>
                                        <p>Danh sách bất động sản tại các Quận / Huyện!</p>
                                   </div>
                              </div>
                              <div style="position:relative;">
                                   <div class="owl-carousel" id="project-city-slides">
                                        @empty(!$data['district_list'])
                                        @foreach ($data['district_list'] as $district)
                                        <div class="item itemarea">
                                             <a href="{{ route('postDistrict', [$district->CitySlug, $district->Slug]) }}">
                                                  <img src="{{ asset('dist/img/los-angeles-winter-2016-410x270.jpg')}}" alt="Alhambra">
                                                  <h4>{{ $district->Name }}</h4>
                                             </a>
                                        </div>
                                        @endforeach
                                        @endempty
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </p>

          <p>
               <div class="padtop70">
                    <div class="box_shadow">
                         <div class="container-fluid w90">
                              <div class="homehouse">
                                   <div class="row">
                                        <div class="col-12">
                                             <h2>Bất Động Sản Bán</h2>
                                             <p>Danh sách các bất động sản bán</p>
                                        </div>
                                   </div>
                                   <div class="row rowm10">
                                        @empty(!$data['post_sale_list'])
                                        @foreach ($data['post_sale_list'] as $post_sale)
                                        <div class="col-sm-4 col-md-3 colm10">
                                             <div class="hourseitem pt-0">
                                                  <div class="blii" style="height: 200px;">
                                                       <div class="img" style="height: 100%;">
                                                            <img src="{{ asset(explode("|", $post_sale->Image)[0]) }}" alt="{{ $post_sale->Title }}" class="thumb">
                                                       </div>
                                                       <a href="{{ route('postDetail', $post_sale->Slug) }}" class="linkdetail"></a>
                                                       <div class="status">
                                                            <span class="label-success status-label">Bán</span>
                                                       </div>
                                                  </div>
                                                  <div class="info">
                                                       <h3>
                                                            <a style="overflow-wrap: anywhere;" href="{{ route('postDetail', $post_sale->Slug) }}">{{ $post_sale->Title}}</a>
                                                       </h3>
                                                       <p class="city">
                                                            <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                            {{ $post_sale->StreetName }}, {{ $post_sale->AreaName }}, {{ $post_sale->DistrictName }}, {{ $post_sale->CityName }}
                                                       </p>
                                                       <p class="bold500">Giá: {{ number_format($post_sale->Price, 0, ".", ",") }} Tỷ</p>
                                                       <p class="threemt bold500">
                                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                                 <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                                 <i class="vti">{{ $post_sale->Bedroom ?? '-' }}</i>
                                                            </span>
                                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                                 <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                                 <i class="vti">{{ $post_sale->Bathroom ?? "-"}}</i>
                                                            </span>
                                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                                 <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                                 <i class="vti">{{ (round(($post_sale->Width) * ($post_sale->Length), 1)) }} m²</i>
                                                            </span></p>
                                                  </div>
                                             </div>
                                        </div>
                                        @endforeach
                                        @endempty
                                   </div>
                                   <!--<property-component type="sale" url="https://bdsnew.eso.vnajax/properties"></property-component>-->
                              </div>
                         </div>
                    </div>
               </div>
          </p>

          <p>
               <div class="box_shadow" style="background: #fff;">
                    <div class="container-fluid w90">
                         <div class="homehouse padtop30">
                              <div class="row">
                                   <div class="col-12">
                                        <h2>Bất Động Sản Cho Thuê</h2>
                                        <p>Danh sách các bất động sản cho thuê</p>
                                   </div>
                              </div>
                              <div class="row rowm10">
                                   @empty(!$data['post_rent_list'])
                                   @foreach ($data['post_rent_list'] as $post_rent)
                                   <div class="col-sm-4 col-md-3 colm10">
                                        <div class="hourseitem pt-0">
                                             <div class="blii" style="height: 200px;">
                                                  <div class="img" style="height: 100%;">
                                                       <img src="{{ asset(explode("|", $post_rent->Image)[0]) }}" alt="{{ $post_rent->Title }}" class="thumb">
                                                  </div>
                                                  <a href={{ route('postDetail', $post_rent->Slug) }}" class="linkdetail"></a>
                                                  <div class="status">
                                                       <span class="label-success status-label">Cho Thuê</span>
                                                  </div>
                                             </div>
                                             <div class="info">
                                                  <h3>
                                                       <a style="overflow-wrap: anywhere;" href="{{ route('postDetail', $post_rent->Slug) }}">{{$post_rent->Title}}</a>
                                                  </h3>
                                                  <p class="city">
                                                       <i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                       {{ $post_rent->StreetName }}, {{ $post_rent->AreaName }}, {{ $post_rent->DistrictName }}, {{ $post_rent->CityName }}
                                                  </p>
                                                  <p class="bold500">Giá: {{ number_format($post_rent->Price, 0, ".", ",") }} Tỷ</p>
                                                  <p class="threemt bold500">
                                                       <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                            <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                            <i class="vti">{{ $post_rent->Bedroom ?? '-' }}</i>
                                                       </span>
                                                       <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                            <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                            <i class="vti">{{ $post_rent->Bathroom ?? "-"}}</i>
                                                       </span>
                                                       <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                            <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                            <i class="vti">{{ (round(($post_rent->Width) * ($post_rent->Length), 1)) }} m²</i>
                                                       </span></p>
                                             </div>
                                        </div>
                                   </div>
                                   @endforeach
                                   @endempty
                              </div>
                         </div>
                    </div>
               </div>
          </p>

          <p>
               <div class="box_shadow">
                    <div class="container-fluid w90">
                         <div class="homehouse padtop30">
                              <div class="row">
                                   <div class="col-12">
                                        <h2>Dự Án</h2>
                                        <p>Danh sách các dự án BDS</p>
                                   </div>
                              </div>
                              <div class="row row10">
                                   @empty(!$data['project_list'])
                                   @foreach($data['project_list'] as $project)
                                   <div class="col-sm-6 col-md-6 colm10 itemduan">
                                        <div class="hourseitem row p-0">
                                             <div class="blii col-sm-6 col-md-6 colm10 pl-0">
                                                  <div class="img h-100">
                                                       @if (!empty($project->Image))
                                                       <img style="max-height: 205px;" src={{ asset(explode("|", $project->Image)[0]) }} alt="{{ $project->Title }}" class="thumb">
                                                       @else
                                                       <img style="max-height: 205px;" src={{ asset('dist/img/default_bds.jpg') }} alt="{{ $project->Title }}" class="thumb">
                                                       @endif
                                                  </div>
                                                  <a href="{{ route('projectDetail', $project->Slug) }}" class="linkdetail"></a>

                                             </div>
                                             <div class="info col-sm-6 col-md-6 py-2">
                                                  <h2><a href="{{ route('projectDetail', $project->Slug) }}" style="text-transform: capitalize;">{{ $project->Title }}</a></h2>
                                                  <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $project->Location }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Quy mô: </span> {{ $project->NumberOfBlock }} block, {{ $project->NumberOfApartment }} căn hộ </p>
                                                  <p class="bold500"><span class="font-weight-bold">Năm xây dựng: </span> {{ $project->YearBuilt }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Giá từ: </span> {{ number_format($project->Price, 0, ".", ",") }} Tỷ</p>
                                                  <p class="bold500"><span class="font-weight-bold">Bán: </span> {{ $project->post_sale_count }} <span class="font-weight-bold"> - </span> <span class="font-weight-bold">Thuê: </span> {{ $project->post_rent_count }}</p>
                                                  <p class="bold500"><span class="font-weight-bold">Tiến độ: </span> -</p>
                                             </div>
                                             <hr class="w-100">
                                             @if (!empty($project->post_rent))
                                             <div class="col-sm-12 col-md-12">
                                                  <div class="row p-2 border mb-3">
                                                       <h3 class="m-0 mb-2 w-100"><a href="{{ route('postDetail', $project->post_rent->Slug) }}" style="overflow-wrap: anywhere;">{{ $project->post_rent->Title }}</a></h3>
                                                       <div class="hinhpost col-sm-6 col-md-6">
                                                            <div class="img">
                                                                 <img data-src="{{ asset(explode("|", $project->post_rent->Image)[0]) }}" src="{{ asset(explode("|", $project->post_rent->Image)[0]) }}" alt="{{ $project->post_rent->Title }}" class="thumb" style="max-height: 125px; height: max-content;">
                                                            </div>
                                                            <a href="{{ route('postDetail', $project->post_rent->Slug) }}" class="linkdetail"></a>
                                                            <div class="status"><span class="label-success status-label">Cho Thuê</span></div>
                                                       </div>
                                                       <div class="col-sm-6 col-md-6">
                                                            <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $project->post_rent->Direction }}</p>
                                                            <p class="bold500">Giá: {{ number_format($project->post_rent->Price, 0, ".", ",") }} Tỷ</p>
                                                            <p class="threemt bold500">
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                                      <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ $project->post_rent->Bedroom ?? '-' }}</i>
                                                                 </span>
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                                      <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ $project->post_rent->Bathroom ?? "-"}}</i>
                                                                 </span>
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                                      <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ (round(($project->post_rent->Width) * ($project->post_rent->Length), 1)) }} m²</i>
                                                                 </span>
                                                            </p>
                                                            <p><i class="far fa-heart"></i></p>
                                                            <a href="#" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                                                       </div>
                                                  </div>
                                             </div>
                                             @endif
                                             @if (!empty($project->post_sale))
                                             <div class="col-sm-12 col-md-12">
                                                  <div class="row p-2 border mb-3">
                                                       <h3 class="m-0 mb-2 w-100"><a href="{{ route('postDetail', $project->post_sale->Slug) }}" style="overflow-wrap: anywhere;">{{ $project->post_sale->Title }}</a></h3>
                                                       <div class="hinhpost col-sm-6 col-md-6">
                                                            <div class="img">
                                                                 <img data-src="{{ asset(explode("|", $project->post_sale->Image)[0]) }}" src="{{ asset(explode("|", $project->post_sale->Image)[0]) }}" alt="{{ $project->post_sale->Title }}" class="thumb" style="max-height: 125px; height: max-content;">
                                                            </div>
                                                            <a href="{{ route('postDetail', $project->post_sale->Slug) }}" class="linkdetail"></a>
                                                            <div class="status"><span class="label-success status-label">Bán</span></div>
                                                       </div>
                                                       <div class="col-sm-6 col-md-6">
                                                            <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> {{ $project->post_sale->Direction }}</p>
                                                            <p class="bold500">Giá: {{ number_format($project->post_sale->Price, 0, ".", ",") }} Tỷ</p>
                                                            <p class="threemt bold500">
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                                                      <i><img src="{{ asset('dist/img/bed.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ $project->post_sale->Bedroom ?? '-' }}</i>
                                                                 </span>
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                                                      <i><img src="{{ asset('dist/img/bath.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ $project->post_sale->Bathroom ?? "-"}}</i>
                                                                 </span>
                                                                 <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                                                      <i><img src="{{ asset('dist/img/area.svg') }}" alt="icon"></i>
                                                                      <i class="vti">{{ (round(($project->post_sale->Width) * ($project->post_sale->Length), 1)) }} m²</i>
                                                                 </span>
                                                            </p>
                                                            <p><i class="far fa-heart"></i></p>
                                                            <a href="#" class=" viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                                                       </div>
                                                  </div>
                                             </div>
                                             @endif
                                        </div>
                                   </div>
                                   @endforeach
                                   @endempty
                              </div>
                         </div>
                    </div>
               </div>
          </p>
     </div>
</div>


<p>
     <div class="container-fluid w90">
          <div class="homehouse padtop30">
               <div class="discover">
                    <div class="row">
                         <div class="col-12">
                              <h2>News</h2>
                              <p>Below is the latest real estate news we get regularly updated from reliable sources.</p>
                              <br>
                              <div class="blog-container">
                                   <div class="row">
                                        <div class="col-md-3 col-sm-6 container-grid">
                                             <div class="grid-in">
                                                  <div class="grid-shadow">
                                                       <div class="hourseitem" style="margin-top: 0px;">
                                                            <div class="blii">
                                                                 <div class="img">
                                                                      <img data-src="img/download-410x270.jpeg" src="{{ asset('dist/img/download-410x270.jpeg') }}" alt="S. Korea’s Big Investors Flocking to Overseas Real Estate" class="thumb" style="border-radius: 0px;">
                                                                 </div>
                                                                 <a href="https://bdsnew.eso.vns-koreas-big-investors-flocking-to-overseas-real-estate" class="linkdetail"></a>
                                                            </div>
                                                       </div>
                                                       <div class="grid-h">
                                                            <div class="blog-title">
                                                                 <a href="https://bdsnew.eso.vns-koreas-big-investors-flocking-to-overseas-real-estate">
                                                                      <h2>S. Korea’s Big Investors Flocking to Overseas Real Estate</h2>
                                                                 </a>
                                                                 <p class="post-meta">18 Nov, 2019 - <i class="fa fa-eye"></i> 1</p>
                                                            </div>
                                                            <div class="blog-excerpt">
                                                                 <p>An increasing number of South Korean investors are getting interested in real estate in foreign countries, especially the United States and Japan where regulations are relatively lax and property values are stable.</p>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</p>
