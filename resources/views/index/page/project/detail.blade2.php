<div id="app" class="container">
     <div class="row">
          <div class="col-md-8">
               <main class="detailproject" style="background: #FFF;">
                    <div class="boxsliderdetail">
                         <div class="slidetop">
                              <div class="owl-carousel" id="listcarousel">
                                   @foreach(explode('|', $data['project_detail']->Image) as $image)
                                   @if (!empty($image))
                                   <div class="item"><img src="{{ asset($image) }}" class="showfullimg" rel="1" alt=""></div>
                                   @endif
                                   @endforeach

                              </div>
                         </div>
                         <div class="slidebot">
                              <div style="max-width: 800px; margin: 0 auto;">
                                   <div class="owl-carousel" id="listcarouselthumb">
                                        @foreach(explode('|', $data['project_detail']->Image) as $image)
                                        @if (!empty($image))
                                        <div class="item cthumb" rel="6"><img src="{{ asset($image) }}" class="showfullimg" rel="6" alt="The Avila Apartments"></div>
                                        @endif
                                        @endforeach
                                   </div>
                                   <i class="fas fa-chevron-right ar-next"></i>
                                   <i class="fas fa-chevron-left ar-prev"></i>
                              </div>
                         </div>
                    </div>
                    {{-- <div id="gallery"
               data-images="[&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e1.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e2.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e3.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e4.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e5.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e7.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e8.jpg&quot;]">
          </div> --}}


                    <div class="container-fluid">
                         <div class="container-fluid w90 padtop30" style="padding: 15px 0;">
                              <div class="col-12">
                                   <h1 class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0;">{{ $data['project_detail']->Title }}</h1>
                                   <p class="addresshouse"><i class="fas fa-map-marker-alt"></i> {{ $data['project_detail']->Location }}</p>
                              </div>
                         </div>
                    </div>

                    <div class="container-fluid padtop30 single-post">
                         <section class="general">
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="head">Tổng quan</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-6 lineheight220">
                                                  <div><span>Tên dự án:</span> <b>{{ $data['project_detail']->Title }}</b></div>
                                                  <div><span>Vị trí:</span> <b>{{ $data['project_detail']->Location }}</b></div>
                                                  <div><span>Chủ Đầu Tư:</span> <b>{{ $data['project_detail']->Investor }}</b></div>
                                                  <div><span>Mật độ xây dựng:</span> <b>{{ $data['project_detail']->BuildingDensity }}%</b></div>
                                                  <div><span>Năm xây dựng:</span> <b>{{ $data['project_detail']->YearBuilt }}</b></div>
                                             </div>
                                             <div class="col-sm-6 lineheight220">
                                                  <div><span>Số block:</span> <b>{{ $data['project_detail']->NumberOfBlock }}</b></div>
                                                  <div><span>Số tầng:</span> <b>{{ $data['project_detail']->NumberOfFloor }}</b></div>
                                                  <div><span>Số căn hộ:</span> <b>{{ $data['project_detail']->NumberOfApartment }}</b></div>
                                                  <div><span>Diện tích căn hộ:</span> <b>{{ $data['project_detail']->AreaApartment }}</b></div>
                                                  <div><span>Tổng diện tích:</span> <b>{{ $data['project_detail']->TotalArea }}</b></div>
                                             </div>
                                        </div>

                                        <div class="head">Vị trí hạ tầng</div>
                                        <p>{!! $data['project_detail']->Description !!}.</p>

                                        {{-- <h4><b>Tại sao bạn cần sở hửu một ngôi nhà tại dự án này? </b></h4>

                                   <ul>
                                        <li>1.&nbsp;Trong dự án, có một khu vực rất đặc biệt mà bạn sẽ không bao giờ tìm thấy một khu vực tương tự.</li>
                                        <li>2.&nbsp;Nhiều dịch vụ tiện ích tại đây.</li>
                                        <li>3.&nbsp;Đầy đủ các của hàng tiện lợi.</li>
                                        <li>4. Đặc biệt một trung tâm mua sấm sầm uất</li>
                                        <li>5.Large landscaping areas, cafes, shopping opportunities.</li>
                                   </ul> --}}
                                        {{-- <div class="head">Dịch vụ</div>
                              <div class="row">
                                   <div class="col-sm-4">
                                        <p><i class="fas fa-check text-orange text0i"></i> Wifi</p>
                                   </div>
                                   <div class="col-sm-4">
                                        <p><i class="fas fa-check text-orange text0i"></i> Ban Công</p>
                                   </div>
                                   <div class="col-sm-4">
                                        <p><i class="fas fa-check text-orange text0i"></i> Đỗ xe</p>
                                   </div>
                                   <div class="col-sm-4">
                                        <p><i class="fas fa-check text-orange text0i"></i> Vườn</p>
                                   </div>
                                   <div class="col-sm-4">
                                        <p><i class="fas fa-check text-orange text0i"></i> Bảo vệ</p>
                                   </div>
                              </div> --}}
                                        <br>


                                        <div class="head">Thiết kế mặt bằng</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <p>Khung soạn thảo
                                                  </p>

                                             </div>
                                        </div>

                                        <div class="head">Chủ đầu tư</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <p>Khung soạn thảo
                                                  </p>

                                             </div>
                                        </div>

                                        <div class="head">Tiện tích</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <p>List tiện ích >> Điền từng dòng
                                                  </p>

                                             </div>
                                        </div>

                                        <br>

                                        <div class="hinhduan">
                                             <span>HÌNH ẢNH</span>
                                             <div class="listhinhanh">
                                                  <div id="myBtnContainer">
                                                       <button class="btn active" onclick="filterSelection('all')"> Tất cả</button>
                                                       <button class="btn" onclick="filterSelection('nature')"> Toà nhà</button>
                                                       <button class="btn" onclick="filterSelection('cars')"> Trong nhà nhà </button>
                                                       <button class="btn" onclick="filterSelection('people')"> Căn hộ mẫu</button>
                                                  </div>

                                                  <!-- Portfolio Gallery Grid -->
                                                  <div class="row">
                                                       <div class="column nature">
                                                            <div class="content">
                                                                 <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
                                                                 <h4>Mountains</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column nature">
                                                            <div class="content">
                                                                 <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
                                                                 <h4>Lights</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column nature">
                                                            <div class="content">
                                                                 <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                                                                 <h4>Forest</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>

                                                       <div class="column cars">
                                                            <div class="content">
                                                                 <img src="/w3images/cars1.jpg" alt="Car" style="width:100%">
                                                                 <h4>Retro</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column cars">
                                                            <div class="content">
                                                                 <img src="/w3images/cars2.jpg" alt="Car" style="width:100%">
                                                                 <h4>Fast</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column cars">
                                                            <div class="content">
                                                                 <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
                                                                 <h4>Classic</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>

                                                       <div class="column people">
                                                            <div class="content">
                                                                 <img src="/w3images/people1.jpg" alt="People" style="width:100%">
                                                                 <h4>Girl</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column people">
                                                            <div class="content">
                                                                 <img src="/w3images/people2.jpg" alt="People" style="width:100%">
                                                                 <h4>Man</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <div class="column people">
                                                            <div class="content">
                                                                 <img src="/w3images/people3.jpg" alt="People" style="width:100%">
                                                                 <h4>Woman</h4>
                                                                 <p>Lorem ipsum dolor..</p>
                                                            </div>
                                                       </div>
                                                       <!-- END GRID -->
                                                  </div>



                                             </div>
                                        </div>



                                        <div class="mapouter">
                                             <div class="gmap_canvas">
                                                  <iframe id="gmap_canvas" width="100%" height="500" src="https://maps.google.com/maps?q=Singapore+Island%2C+Singapore%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                             </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="socials">
                                             <span>Liên Hệ Để Biết Thêm Chi Tiết Về Dự Án:</span>
                                             <ul>
                                                  <li>
                                                       <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fflex-home.botble.com%2Fprojects%2Fpark&title=Within the historical peninsula, there is a very special area where you will never find a similar one. Unique sea view with a historical texture of Istanbul. In the bustling city life, in the middle of all transportation possibilities. Large landscaping areas, cafes, shopping opportunities." target="_blank"
                                                            title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                  </li>
                                                  <li>
                                                       <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fflex-home.botble.com%2Fprojects%2Fpark&summary=Within the historical peninsula, there is a very special area where you will never find a similar one. Unique sea view with a historical texture of Istanbul. In the bustling city life, in the middle of all transportation possibilities. Large landscaping areas, cafes, shopping opportunities.&source=Linkedin"
                                                            title="Share on Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                  </li>
                                                  <li>
                                                       <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fflex-home.botble.com%2Fprojects%2Fpark&text=Within the historical peninsula, there is a very special area where you will never find a similar one. Unique sea view with a historical texture of Istanbul. In the bustling city life, in the middle of all transportation possibilities. Large landscaping areas, cafes, shopping opportunities." target="_blank" title="Share on Twitter"><i
                                                                 class="fab fa-twitter"></i></a>
                                                  </li>
                                             </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                   </div>
                                   <!--<div class="col-md-4 padtop10">
                              <div class="boxright">
                                   <form action="https://flex-home.botble.com/send-consult" method="post" id="contact-form" class="generic-form">
                                        <input type="hidden" name="_token" value="yB6NPO0K0GkdnxVJVm1SsSO74pu8bwz2eEw8pQqP"> <input type="hidden" value="project" name="type">
                                        <input type="hidden" value="6" name="data_id">
                                        <div class="head">Contact</div>
                                        <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Name *" data-validation-engine="validate[required]" data-errormessage-value-missing="Please enter name!">
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="phone" class="form-control" placeholder="Phone *" data-validation-engine="validate[required]" data-errormessage-value-missing="Please enter phone number!">
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="email" class="form-control " placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Subject *" value="The Avila Apartments" readonly>
                                        </div>
                                        <div class="form-group">
                                             <textarea name="content" class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                             <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script>
                                             <div class="g-recaptcha" theme="light" id="buzzNoCaptchaId_042f3122864076d00e5d7cacaa89d150" data-sitekey="6LcjXnAUAAAAABn6hzo7WpoEKkg_we777yg-mK4-"></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-lg btn-orange btn-block">Send</button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="alert alert-success text-success text-left" style="display: none;">
                                             <span></span>
                                        </div>
                                        <div class="alert alert-danger text-danger text-left" style="display: none;">
                                             <span></span>
                                        </div>
                                   </form>
                                   <script>
                                        "use strict";
                                        (function($) {
                                             $(document).ready(function () {
                                                  $('#contact-form').validationEngine();
                                             });
                                        })(jQuery);
                                   </script>
                              </div>
                         </div>-->
                              </div>

                              <h5 class="headifhouse">Khuyến Mãi</h5>
                              <div>Nội dung ưu đãi</div>




                              <br>
                              <div class="listban">
                                   <h5 class="headifhouse">Căn hộ đang bán</h5>
                                   <div class="hourseitem row" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
                                        <div class=" blii col-sm-6 col-md-6 colm10">
                                             <div class="img"><img src="http://bdsnew.eso.vn/dist/img/upload/project/tK93CnpqxsPAkpKNbcHtAtnjMZbxPx0YYeofMpBI.jpeg" alt="Dự Án 1" class="thumb" style="max-height: 180px;"></div>
                                             <a href="/project2" class="linkdetail"></a>
                                        </div>
                                        <div class="info col-sm-6 col-md-6">
                                             <h3><a href="http://bdsnew.eso.vn/bat-dong-san/bat-dong-san-1" style="overflow-wrap: anywhere;">Bất động sản 1</a></h3>
                                             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                  Bình Quới, Phường 27, Quận Bình Thạnh, Thành Phố Hồ Chí Minh
                                             </p>
                                             <p class="bold500">Giá: 2 Tỷ</p>
                                             <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ"><i><img src="http://bdsnew.eso.vn/dist/img/bed.svg" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm"><i><img src="http://bdsnew.eso.vn/dist/img/bath.svg" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Rộng"><i><img src="http://bdsnew.eso.vn/dist/img/area.svg" alt="icon"></i> <i class="vti">68 m²</i></span></p>
                                        </div>
                                   </div>

                                   <div class="hourseitem row" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
                                        <div class=" blii col-sm-6 col-md-6 colm10">
                                             <div class="img"><img src="http://bdsnew.eso.vn/dist/img/upload/project/tK93CnpqxsPAkpKNbcHtAtnjMZbxPx0YYeofMpBI.jpeg" alt="Dự Án 1" class="thumb" style="max-height: 180px;"></div>
                                             <a href="/project2" class="linkdetail"></a>
                                        </div>
                                        <div class="info col-sm-6 col-md-6">
                                             <h3><a href="http://bdsnew.eso.vn/bat-dong-san/bat-dong-san-1" style="overflow-wrap: anywhere;">Bất động sản 1</a></h3>
                                             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                  Bình Quới, Phường 27, Quận Bình Thạnh, Thành Phố Hồ Chí Minh
                                             </p>
                                             <p class="bold500">Giá: 2 Tỷ</p>
                                             <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ"><i><img src="http://bdsnew.eso.vn/dist/img/bed.svg" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm"><i><img src="http://bdsnew.eso.vn/dist/img/bath.svg" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Rộng"><i><img src="http://bdsnew.eso.vn/dist/img/area.svg" alt="icon"></i> <i class="vti">68 m²</i></span></p>
                                        </div>
                                   </div>
                                   <a href="#">Xem tất cả</a>
                              </div>



                              <div class="listban">
                                   <h5 class="headifhouse">Căn hộ cho thuê</h5>
                                   <div class="hourseitem row" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
                                        <div class=" blii col-sm-6 col-md-6 colm10">
                                             <div class="img"><img src="http://bdsnew.eso.vn/dist/img/upload/project/tK93CnpqxsPAkpKNbcHtAtnjMZbxPx0YYeofMpBI.jpeg" alt="Dự Án 1" class="thumb" style="max-height: 180px;"></div>
                                             <a href="/project2" class="linkdetail"></a>
                                        </div>
                                        <div class="info col-sm-6 col-md-6">
                                             <h3><a href="http://bdsnew.eso.vn/bat-dong-san/bat-dong-san-1" style="overflow-wrap: anywhere;">Bất động sản 1</a></h3>
                                             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                  Bình Quới, Phường 27, Quận Bình Thạnh, Thành Phố Hồ Chí Minh
                                             </p>
                                             <p class="bold500">Giá: 2 Tỷ</p>
                                             <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ"><i><img src="http://bdsnew.eso.vn/dist/img/bed.svg" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm"><i><img src="http://bdsnew.eso.vn/dist/img/bath.svg" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Rộng"><i><img src="http://bdsnew.eso.vn/dist/img/area.svg" alt="icon"></i> <i class="vti">68 m²</i></span></p>
                                        </div>
                                   </div>

                                   <div class="hourseitem row" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
                                        <div class=" blii col-sm-6 col-md-6 colm10">
                                             <div class="img"><img src="http://bdsnew.eso.vn/dist/img/upload/project/tK93CnpqxsPAkpKNbcHtAtnjMZbxPx0YYeofMpBI.jpeg" alt="Dự Án 1" class="thumb" style="max-height: 180px;"></div>
                                             <a href="/project2" class="linkdetail"></a>
                                        </div>
                                        <div class="info col-sm-6 col-md-6">
                                             <h3><a href="http://bdsnew.eso.vn/bat-dong-san/bat-dong-san-1" style="overflow-wrap: anywhere;">Bất động sản 1</a></h3>
                                             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                                  Bình Quới, Phường 27, Quận Bình Thạnh, Thành Phố Hồ Chí Minh
                                             </p>
                                             <p class="bold500">Giá: 2 Tỷ</p>
                                             <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ"><i><img src="http://bdsnew.eso.vn/dist/img/bed.svg" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm"><i><img src="http://bdsnew.eso.vn/dist/img/bath.svg" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Rộng"><i><img src="http://bdsnew.eso.vn/dist/img/area.svg" alt="icon"></i> <i class="vti">68 m²</i></span></p>
                                        </div>
                                   </div>
                                   <a href="#">Xem tất cả</a>
                              </div>

                         </section>
                    </div>
               </main>
          </div>


          <div class="col-md-4">

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
<script>
     filterSelection("all") // Execute the function and show all columns
     function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("column");
          if (c == "all") c = "";
          // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
          for (i = 0; i < x.length; i++) {
               w3RemoveClass(x[i], "show");
               if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
     }

     // Show filtered elements
     function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
               if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
               }
          }
     }

     // Hide elements that are not selected
     function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
               while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
               }
          }
          element.className = arr1.join(" ");
     }

     // Add active class to the current button (highlight it)
     var btnContainer = document.getElementById("myBtnContainer");
     var btns = btnContainer.getElementsByClassName("btn");
     for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function () {
               var current = document.getElementsByClassName("active");
               current[0].className = current[0].className.replace(" active", "");
               this.className += " active";
          });
     }
</script>
