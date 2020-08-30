<div id="app">
     <main class="detailproject" style="background: #FFF;">
          <div class="boxsliderdetail">
               <div class="slidetop">
                    <div class="owl-carousel" id="listcarousel">
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e1.jpg" class="showfullimg" rel="0" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e2.jpg" class="showfullimg" rel="1" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e3.jpg" class="showfullimg" rel="2" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e4.jpg" class="showfullimg" rel="3" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e5.jpg" class="showfullimg" rel="4" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e7.jpg" class="showfullimg" rel="5" alt="The Avila Apartments"></div>
                         <div class="item"><img src="https://flex-home.botble.com/storage/properties/e8.jpg" class="showfullimg" rel="6" alt="The Avila Apartments"></div>
                    </div>
               </div>
               <div class="slidebot">
                    <div style="max-width: 800px; margin: 0 auto;">
                         <div class="owl-carousel" id="listcarouselthumb">
                              <div class="item cthumb" rel="0"><img src="https://flex-home.botble.com/storage/properties/e1.jpg" class="showfullimg" rel="0" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="1"><img src="https://flex-home.botble.com/storage/properties/e2.jpg" class="showfullimg" rel="1" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="2"><img src="https://flex-home.botble.com/storage/properties/e3.jpg" class="showfullimg" rel="2" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="3"><img src="https://flex-home.botble.com/storage/properties/e4.jpg" class="showfullimg" rel="3" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="4"><img src="https://flex-home.botble.com/storage/properties/e5.jpg" class="showfullimg" rel="4" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="5"><img src="https://flex-home.botble.com/storage/properties/e7.jpg" class="showfullimg" rel="5" alt="The Avila Apartments"></div>
                              <div class="item cthumb" rel="6"><img src="https://flex-home.botble.com/storage/properties/e8.jpg" class="showfullimg" rel="6" alt="The Avila Apartments"></div>
                         </div>
                         <i class="fas fa-chevron-right ar-next"></i>
                         <i class="fas fa-chevron-left ar-prev"></i>
                    </div>
               </div>
          </div>
          <div id="gallery"
               data-images="[&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e1.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e2.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e3.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e4.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e5.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e7.jpg&quot;,&quot;https:\/\/flex-home.botble.com\/storage\/properties\/e8.jpg&quot;]">
          </div>

          @foreach($data['project_detail'] as $project)
          <div class="container-fluid bgmenupro">
               <div class="container-fluid w90 padtop30" style="padding: 15px 0;">
                    <div class="col-12">
                         <h1 class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0;">{{ $project->Title }}</h1>
                    <p class="addresshouse"><i class="fas fa-map-marker-alt"></i> {{ $project->Location }}</p>
                    </div>
               </div>
          </div>

          <div class="container-fluid w90 padtop30 single-post">
               <section class="general">
                    <div class="row">
                         <div class="col-md-8">
                              <div class="head">Tổng quan</div>
                              <span class="line_title"></span>
                              <div class="row">
                                   <div class="col-sm-6 lineheight220">
                                        <div><span>Trạng thái: </span>
                                             @if($project->Status == 1)
                                             <b>Còn</b>
                                             @else
                                             <b>Hết</b>
                                             @endif
                                         </div>
                                        <div><span>Category:</span> <b></b></div>
                                        <div><span>Chủ Đầu Tư:</span> <b>{{ $project->Investor }}</b></div>
                                   </div>
                                   <div class="col-sm-6 lineheight220">
                                   <div><span>Số Block:</span> <b>{{ $project->NumberOfBlock }}</b></div>
                                        <div><span>Số Tầng:</span> <b>{{ $project->NumberOfFloor }}</b></div>
                                        <div><span>Số Tòa:</span> <b>{{ $project->NumberOfApartment }}</b></div>
                                   </div>
                              </div>

                              <div class="head">Mô tả</div>
                              <p>{{ $project->Description }}.</p>

                              {{-- <h4><b>Tại sao bạn cần sở hửu một ngôi nhà tại dự án này? </b></h4>

                              <ul>
                                   <li>1.&nbsp;Trong dự án, có một khu vực rất đặc biệt mà bạn sẽ không bao giờ tìm thấy một khu vực tương tự.</li>
                                   <li>2.&nbsp;Nhiều dịch vụ tiện ích tại đây.</li>
                                   <li>3.&nbsp;Đầy đủ các của hàng tiện lợi.</li>
                                   <li>4. Đặc biệt một trung tâm mua sấm sầm uất</li>
                                   <li>5.Large landscaping areas, cafes, shopping opportunities.</li>
                              </ul> --}}
                              <div class="head">Dịch vụ</div>
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
                              </div>
                              <br>
                              <br>
                              <div class="mapouter">
                                   <div class="gmap_canvas">
                                        <iframe id="gmap_canvas" width="100%" height="500" src="https://maps.google.com/maps?q=Singapore+Island%2C+Singapore%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                   </div>
                              </div>
                              @endforeach
                              <br>
                              <br>
                              <div class="socials">
                                   <span>Liên Hệ Để Biết Thêm Chi Tiết Về Dự Án:</span>
                                   <ul>
                                        <li>
                                             <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fflex-home.botble.com%2Fprojects%2Fpark&title=Within the historical peninsula, there is a very special area where you will never find a similar one. Unique sea view with a historical texture of Istanbul. In the bustling city life, in the middle of all transportation possibilities. Large landscaping areas, cafes, shopping opportunities." target="_blank" title="Share on Facebook"><i
                                                       class="fab fa-facebook-f"></i></a>
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
                         <div class="col-md-4 padtop10">
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
                         </div>
                    </div>

                    <h5 class="headifhouse">Khuyến Mãi</h5>
                    <div class="col-sm-4 col-md-4">
                         <div class="hourseitem row">
                              <h3><a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3>
                              <div class="hinhpost col-sm-6 col-md-6">
                                   <div class="img"><img data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                                   <a href="https://flex-home.botble.com/properties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a>
                                   <div class="status"><span class="label-success status-label">Selling</span></div>
                              </div>
                              <div class="col-sm-6 col-md-6">

                                   <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i> Nam</p>
                                   <p class="bold500">Giá 8 triệu /tháng </p>
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
                                   <a href="{{ URL::to('/project') }}" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                              </div>
                         </div>
                    </div>

                    <br>
                    <h5 class="headifhouse">Properties For Rent</h5>
                    <property-component type="project-properties-for-rent" project_id="6" url="https://flex-home.botble.com/ajax/properties" :show_empty_string="true"></property-component>
               </section>

          </div>
     </main>
     <br>
     <br>

</div>
