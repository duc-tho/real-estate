<div id="app">
     <div id="ismain-homes">
          <div class="bgheadproject hidden-xs">
               <div class="description">
                    <div class="container-fluid w90">
                         <h1 class="text-center" style="color: black">Dự án BĐS</h1>
                         <p class="text-center" style="color: black">Chúng tôi luôn cập nhật những dự án BDS mới nhất</p>
                         <ul class="breadcrumb">
                              <li class="breadcrumb-item" ><a href="/" style="color: black">Trang chủ</a></li>
                              <li class="breadcrumb-item active" style="color: black">Dự án</li>
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
                                        <h2>DỰ ÁN</h2>
                                        <p>Danh sách dự án BDS nổi bật</p>
                                   </div>
                              </div>
                              <div class="row rowm10">
                                   <!---->
                                   <!---->
                                   @foreach($data['project_list'] as $project)
                                        <div class="col-sm-6 col-md-6 colm10 itemduan">
                                             <div class="hourseitem row">
                                                  <div class="blii col-sm-6 col-md-6 colm10">
                                                       <div class="img">
                                                            <img data-src="{{('/dist/img/upload/project/'.$project->Image)}}" src="{{('/dist/img/upload/project/'.$project->Image)}}" alt="" class="thumb">
                                                       </div>
                                                  <a href={{ ('/project'.$project->ProjectId) }} class="linkdetail"></a>

                                                  </div>
                                                  <div class="info col-sm-6 col-md-6">
                                                  <h2><a href="{{asset('project/'.$project->ProjectId.'/'.$project->slug.'.html') }}">{{ $project->Title }}</a></h2>
                                                   {{-- href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" --}}
                                                   {{-- {{URL::to('/project') }} --}}
                                                       <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>{{ $project->Location }}</p>
                                                       <p class="bold500">Quy mô: {{ $project->NumberOfBlock }} block, {{ $project->NumberOfApartment}} căn hộ </p>
                                                       <p class="threemt bold500">Năm xây dựng: {{ $project->YearBuilt }}</p>
                                                       <p class="threemt bold500">Giá từ: {{ $project->Price }} triệu/m2</p>
                                                       <p class="threemt bold500">Bán: 8 - Thuê: 13</p>
                                                       <p class="threemt bold500">Tiến độ: Đã hoàn thành</p>
                                                  </div>

                                                  <div class="chothue">
                                                       <div class="hourseitem row">
                                                            <h3><a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a> </h3>
                                                            <div class="hinhpost col-sm-6 col-md-6">
                                                                 <div class="img"><img data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                                                                 <a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a>
                                                                 <div class="status"><span class="label-success status-label">Renting</span></div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6">

                                                                 <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> Tây Bắc</p>
                                                                 <p class="bold500">Giá 3,3 tỷ >>> 60tr/m2</p>
                                                                 <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/area.svg" alt="icon"></i>
                                                                           <i class="vti">63 m2</i></span></p>
                                                                 <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/bed.svg" alt="icon"></i>
                                                                           <i class="vti">2</i></span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/bath.svg" alt="icon"></i>
                                                                           <i class="vti">2</i></span>

                                                                 </p>
                                                                 <p><i class="far fa-heart"></i></p>
                                                                 <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="bdsban">
                                                       <div class="hourseitem row">
                                                            <h3><a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3>
                                                            <div class="hinhpost col-sm-6 col-md-6">
                                                                 <div class="img"><img data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                                                                 <a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a>
                                                                 <div class="status"><span class="label-success status-label">Selling</span></div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6">

                                                                 <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> Nam</p>
                                                                 <p class="bold500">Giá 8 triệu /tháng >>> 500k/m2</p>
                                                                 <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/area.svg" alt="icon"></i>
                                                                           <i class="vti">49 m2</i></span></p>
                                                                 <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/bed.svg" alt="icon"></i>
                                                                           <i class="vti">2</i></span>
                                                                      <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                                                                                <img src="https://flex-home.botble.com/themes/flex-home/images/bath.svg" alt="icon"></i>
                                                                           <i class="vti">1</i></span>
                                                                 </p>
                                                                 <p><i class="far fa-heart"></i></p>
                                                                 <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>    
                                   @endforeach

                              </div>

                              <!--<property-component type="rent" url="https://flex-home.botble.com/ajax/properties"></property-component>-->

                         </div>
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
                                             <form action="https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-category" class="control-label">Danh mục</label>
                                                       <select name="category_id" id="select-category" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Căn hộ</option>
                                                            <option value="2">Đất nền</option>
                                                            <option value="3">Nhà riêng</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Phường 1</option>
                                                            <option value="2">Phường 2</option>
                                                            <option value="3">Phường 3</option>
                                                            <option value="4">Phường 4</option>
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
                                             <form action="https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-category" class="control-label">Danh mục</label>
                                                       <select name="category_id" id="select-category" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Căn hộ</option>
                                                            <option value="2">Đất nền</option>
                                                            <option value="3">Nhà riêng</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Phường 1</option>
                                                            <option value="2">Phường 2</option>
                                                            <option value="3">Phường 3</option>
                                                            <option value="4">Phường 4</option>
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
                                             <form action="https://flex-home.botble.com/projects" method="get">

                                                  <div class="form-group">
                                                       <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">TP.HCM</option>
                                                            <option value="2">Bình Dương</option>
                                                            <option value="3">Đồng Nai</option>
                                                            <option value="4">Bà Rịa - Vũng Tàu</option>
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                                                       <select name="blocks" id="select-blocks" class="form-control">
                                                            <option value="">-- Select --</option>
                                                            <option value="1">Quận 1</option>
                                                            <option value="2">Quận 2</option>
                                                            <option value="3">Quận 3</option>
                                                            <option value="4">Quận 4</option>
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
                                        <li><a href="https://flex-home.botble.com/building-materials" class="text-dark">Quận 1</a></li>
                                        <li><a href="https://flex-home.botble.com/house-design" class="text-dark">Quận 2</a></li>
                                        <li><a href="https://flex-home.botble.com/house-architecture" class="text-dark">House architecture</a></li>
                                        <li><a href="https://flex-home.botble.com/category-news" class="text-dark">News</a></li>
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
                                        <p>Các khu vực của HCM</p>
                                   </div>
                              </div>
                              <div style="position:relative;">
                                   <div class="owl-carousel" id="project-city-slides">
                                        <div class="item itemarea">
                                             <a href="https://flex-home.botble.com/projects/city/alhambra"><img src="https://flex-home.botble.com/storage/cities/los-angeles-winter-2016-410x270.jpg" alt="Alhambra">
                                                  <h4>Alhambra</h4>
                                             </a>
                                        </div>
                                        <div class="item itemarea">
                                             <a href="https://flex-home.botble.com/projects/city/oakland"><img src="https://flex-home.botble.com/storage/cities/oaklandnightskylineandlakemerritt-410x270.jpg" alt="Oakland">
                                                  <h4>Oakland</h4>
                                             </a>
                                        </div>
                                        <div class="item itemarea">
                                             <a href="https://flex-home.botble.com/projects/city/bakersfield"><img src="https://flex-home.botble.com/storage/cities/2009-0726-ca-bakersfield-truxtontower-410x270.jpg" alt="Bakersfield">
                                                  <h4>Bakersfield</h4>
                                             </a>
                                        </div>
                                        <div class="item itemarea">
                                             <a href="https://flex-home.botble.com/projects/city/anaheim"><img src="https://flex-home.botble.com/storage/cities/castillo-de-disneyland-410x270.jpg" alt="Anaheim">
                                                  <h4>Anaheim</h4>
                                             </a>
                                        </div>
                                        <div class="item itemarea">
                                             <a href="https://flex-home.botble.com/projects/city/san-francisco"><img src="https://flex-home.botble.com/storage/cities/goldengatebridge-001-410x270.jpg" alt="San Francisco">
                                                  <h4>San Francisco</h4>
                                             </a>
                                        </div>
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
