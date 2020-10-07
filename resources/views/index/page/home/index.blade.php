<div class="home_banner" style="background-image: url({{ asset('dist/img/banner.jpg') }})">
     <div class="topsearch">
          <form action="{{ route('project', ['thanh-pho-ho-chi-minh']) }}" method="GET" id="frmhomesearch">
               <input id="baseUrl" type="hidden" data-base-url="{{ URL::to('/') }}">
               <div class="typesearch" id="hometypesearch">
                    <a id="project" href="javascript:void(0)" class="active" rel="project">Dự Án</a>
                    <a id="sale" href="javascript:void(0)" rel="sale">Bán</a>
                    <a id="rent" href="javascript:void(0)" rel="rent">Cho Thuê</a>
               </div>
               <div class="input-group input-group-lg">

                    <div class="form-group">
                         <select id="select-area" class="form-control">
                              @foreach ($city as $ci)
                              <option value="{{ $ci->Slug }}">{{$ci->Name}}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="input-group-prepend">
                         <span class="input-group-text"><img src="{{ asset('dist/img/search_icon.png')}}" alt="search"></span>
                    </div>
                    <input type="text" class="form-control" name="tu-khoa" placeholder="Nhập địa điểm muốn tìm kiếm" id="txtkey" autocomplete="off">
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
                                   @foreach ($data['post_highlight'] as $post_item)
                                   <div class="col-6 col-sm-4  col-md-3 colm10">
                                        <x-post-vertical :postData="$post_item" :postStyle="'background: #fff; box-shadow: 0 0 20px rgba(0,0,0,.25);'" />
                                   </div>
                                   @endforeach
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
                                   <div class="owl-carousel" id="district-slides">
                                        @empty(!$data['district_list'])
                                        @foreach ($data['district_list'] as $district)
                                        <x-district :districtData="$district" />
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
                                             <x-post-vertical :postData="$post_sale" />
                                        </div>
                                        @endforeach
                                        @endempty
                                   </div>
                                   <!--<property-component type="sale" url="http://thinhvuonggroup.com.vnajax/properties"></property-component>-->
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
                                        <x-post-vertical :postData="$post_rent" />
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
                                        <x-project-index :projectData="$project" />
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

<section class="sec-tb sec-h-6 group-ef">
     <div class="container">
          <div class="row">
               <!-- phong thủy -->
               <div class="col-4">
                    <div class="entry-head-2">
                         <h3 class="ht efch-2 ef-img-l">
                              <div class="ht2 efch-1 ef-img-l">Tin tức Phong thủy</div>
                         </h3>
                    </div>
                    <div class="list-news-1 ">
                         <div class="t-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12376" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="5 đặc điểm phong thủy không tốt cần tránh khi mua nhà" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12376" class="title" title="">
                                             <h3 class="heading-seo ht-color-1">5 đặc điểm phong thủy không tốt cần tránh khi mua nhà</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">08/06/2020</span> </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12303" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Trang trí nhà theo quy tắc phong thủy để thay đổi vận may" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12303" class="title" title="">
                                             <h3 class="heading-seo">Trang trí nhà theo quy tắc phong thủy để thay đổi vận may</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">05/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12256" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Mượn tuổi người khác để động thổ cần lưu ý gì?" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12256" class="title" title="">
                                             <h3 class="heading-seo">Mượn tuổi người khác để động thổ cần lưu ý gì?</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">04/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=11599" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="5 lưu ý về phong thủy giúp gia chủ tăng cường sức khỏe" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=11599" class="title" title="">
                                             <h3 class="heading-seo">5 lưu ý về phong thủy giúp gia chủ tăng cường sức khỏe</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">07/04/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <a class="btn btn170" href="/tin-tuc/kien-thuc/phong-thuy">Xem tất cả</a>
                    </div>
               </div> <!-- kiến trúc -->

               <div class="col-4">
                    <div class="entry-head-2">
                         <h3 class="ht efch-2 ef-img-l">
                              <div class="ht2 efch-1 ef-img-l">Tin tức Kiến trúc</div>

                         </h3>
                    </div>
                    <div class="list-news-1 ">
                         <div class="t-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12319" class="tRes_75 img"> <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Ngôi nhà phong cách nghỉ dưỡng ở TP.HCM" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12319" class="title" title="">
                                             <h3 class="heading-seo ht-color-1">Ngôi nhà phong cách nghỉ dưỡng ở TP.HCM</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">09/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12315" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Lựa chọn màu sắc trong thiết kế nội thất đừng mắc phải 10 sai lầm phổ biến dưới đây" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12315" class="title" title="">
                                             <h3 class="heading-seo">Lựa chọn màu sắc trong thiết kế nội thất đừng mắc phải 10 sai lầm phổ biến dưới đây</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">05/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12277" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Top 3 lưu ý khi thiết kế nhà đẹp diện tích nhỏ 30m2" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12277" class="title" title="">
                                             <h3 class="heading-seo">Top 3 lưu ý khi thiết kế nhà đẹp diện tích nhỏ 30m2</h3>
                                        </a>
                                        <div class="imeta-1"> <span class="date">04/06/2020</span>

                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="s-item">
                              <div class="item">
                                   <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12263" class="tRes_75 img">
                                        <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Sử dụng vật liệu thông minh: Giải pháp tiết kiệm năng lượng hiệu quả" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                   </a>
                                   <div class="divtext">
                                        <a href="#http://thinhvuonggroup.com.vn/tin-tuc/?p=12263" class="title" title="">
                                             <h3 class="heading-seo">Sử dụng vật liệu thông minh: Giải pháp tiết kiệm năng lượng hiệu quả</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">04/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <a class="btn btn170" href="/tin-tuc/kien-thuc/kien-truc">Xem tất cả</a>
                    </div>
               </div> <!-- nổi bật -->
               <div class="col-4">
                    <div class="entry-head-2">
                         <h3 class="ht efch-2 ef-img-l">
                              <div class="ht2 efch-1 ef-img-l">Tin tức BĐS</div>

                         </h3>
                    </div>
                    <div class="list-news-1 ">
                         <div class="t-item">
                              <div class="item">
                                   <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12319" class="tRes_75 img"> <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Ngôi nhà phong cách nghỉ dưỡng ở TP.HCM" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">

                                   </a>
                                   <div class="divtext ">
                                        <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12319" class="title" title="">
                                             <h3 class="heading-seo">Ngôi nhà phong cách nghỉ dưỡng ở TP.HCM</h3>
                                        </a>
                                        <div class="imeta-1">
                                             <span class="date">09/06/2020</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="s-item">
                                   <div class="item">
                                        <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12399" class="tRes_75 img">
                                             <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Bỏ túi 8 kinh nghiệm đầu tư căn hộ chung cư cho thuê sinh lời cao" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                        </a>
                                        <div class="divtext ">
                                             <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12399" class="title" title="">
                                                  <h3 class="heading-seo">Bỏ túi 8 kinh nghiệm đầu tư căn hộ chung cư cho thuê sinh lời cao</h3>
                                             </a>
                                             <div class="imeta-1">
                                                  <span class="date">09/06/2020</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12394" class="tRes_75 img">
                                             <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Cập nhật lãi suất cho vay mua nhà tháng 6/2020 mới nhất từ các ngân hàng" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                        </a>
                                        <div class="divtext ">
                                             <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12394" class="title" title="">
                                                  <h3 class="heading-seo">Cập nhật lãi suất cho vay mua nhà tháng 6/2020 mới nhất từ các ngân hàng</h3>
                                             </a>
                                             <div class="imeta-1">
                                                  <span class="date">09/06/2020</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="item">
                                        <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12268" class="tRes_75 img">
                                             <img class=" loaded loaded" data-lazy-type="image" data-lazy-src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg" alt="Công bố Top 10 Công ty uy tín ngành Bất động sản năm 2020" src="http://thinhvuonggroup.com.vn/dist/img/upload/project/Q3WkIDFgznoVmFQVHruTnytg6Q9H8hNtcaSvOeKF.jpeg">
                                        </a>
                                        <div class="divtext ">
                                             <a href="http://thinhvuonggroup.com.vn/tin-tuc/?p=12268" class="title" title="">
                                                  <h3 class="heading-seo">Công bố Top 10 Công ty uy tín ngành Bất động sản năm 2020</h3>
                                             </a>
                                             <div class="imeta-1">
                                                  <span class="date">09/06/2020</span>
                                             </div>
                                        </div>
                                   </div>
                                   <a class="btn btn170" href="/tin-tuc-bds/">Xem tất cả</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<section class=" sec-tb sec-h-7 bg-white group-ef loaded">
     <div class="container">
          <div class="entry-head text-center">
               <h2 class="ht efch-1 ef-tx-t">Vì sao chọn CHUYENBDS?</h2>
          </div>
          <div class="row">
               <div class="col-4">
                    <div class="item d-flex align-items-center flex-column">
                         <div class="img mb-4"><img class="loaded loaded" data-lazy-type="image" data-lazy-src="{{ asset('dist/img/icona1.png') }}" alt="ChuyenBDS" src="{{ asset('dist/img/icona1.png') }}"></div>
                         <h4 class="title text-center">Hàng triệu thông tin BĐS</h4>
                    </div>
               </div>
               <div class="col-4">
                    <div class="item d-flex align-items-center flex-column">
                         <div class="img mb-4"><img class="loaded loaded" data-lazy-type="image" data-lazy-src="{{ asset('dist/img/icona2.png') }}" alt="ChuyenBDS" src="{{ asset('dist/img/icona2.png') }}"></div>
                         <h4 class="title text-center">Mua bán đảm bảo với dịch vụ pháp lý miễn phí</h4>
                    </div>
               </div>
               <div class="col-4">
                    <div class="item d-flex align-items-center flex-column">
                         <div class="img mb-4"><img class="loaded loaded" data-lazy-type="image" data-lazy-src="{{ asset('dist/img/icona3.png') }}" alt="ChuyenBDS" src="{{ asset('dist/img/icona3.png') }}"></div>
                         <h4 class="title text-center">Giao dịch đảm bảo và tiện lợi tại các TC</h4>
                    </div>
               </div>
          </div>
     </div>
</section>


<script>
     let baseUrl = document.getElementById('baseUrl').attributes['data-base-url'].value;
     let projectSearch = document.getElementById('project');
     let saleSearch = document.getElementById('sale');
     let rentSearch = document.getElementById('rent');
     let searchKey = document.getElementById('txtkey');
     let selectSearchArea = document.getElementById('select-area');

     let formId = 'frmhomesearch';

     let searchInfo = {
          type: 'du-an',
          category: 'bat-dong-san',
          city: selectSearchArea.selectedOptions[0].value
     }

     projectSearch.addEventListener('click', () => {
          searchInfo.type = 'du-an',
          searchInfo.city = selectSearchArea.selectedOptions[0].value;
          setActionURLToForm(baseUrl, searchInfo, formId);
     });

     saleSearch.addEventListener('click', () => {
          searchInfo.type = 'ban',
          searchInfo.city = selectSearchArea.selectedOptions[0].value;
          setActionURLToForm(baseUrl, searchInfo, formId);
     });

     rentSearch.addEventListener('click', () => {
          searchInfo.type = 'thue',
          searchInfo.city = selectSearchArea.selectedOptions[0].value;
          setActionURLToForm(baseUrl, searchInfo, formId);
     });

     selectSearchArea.addEventListener('change', () => {
          searchInfo.city = selectSearchArea.selectedOptions[0].value;
          setActionURLToForm(baseUrl, searchInfo, formId);
     });

     function setActionURLToForm(baseUrl, searchInfo, formId) {
          let form = document.getElementById(formId);
          let url = '';

          if (searchInfo.type === 'du-an') {
               url = `${baseUrl}/${searchInfo.type}/${searchInfo.city}`;
          } else {
               url = `${baseUrl}/${Object.values(searchInfo).join('/')}`;
          }

          console.log(url);

          form.action = url;
     }

</script>
