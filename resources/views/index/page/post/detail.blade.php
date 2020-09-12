<div id="app" class="container">
     <div class="row">
          <div class="col-md-8">
               <main class="detailproject" style="background: #FFF;">
                    <div class="boxsliderdetail">
                         <div class="slidetop">
                              <div class="owl-carousel" id="listcarousel">
                                   @foreach(json_decode($data['post_detail']->Image ?? '[ {imgList: []} ]', true)[0]['imgList'] as $key => $image)
                                   @if (!empty($image))
                                   <div class="item"><img src="{{ asset($image) }}" class="showfullimg" rel="{{ $key }}" alt=""></div>
                                   @endif
                                   @endforeach
                              </div>
                         </div>
                         <div class="slidebot">
                              <div style="max-width: 800px; margin: 0 auto;">
                                   <div class="owl-carousel" id="listcarouselthumb" style="height: 100px;">
                                        @foreach(json_decode($data['post_detail']->Image ?? '[ {imgList: []} ]', true)[0]['imgList'] as $key => $image)
                                        @if (!empty($image))
                                        <div class="item cthumb" rel="6"><img src="{{ asset($image) }}" class="showfullimg" rel="{{ $key }}" alt="The Avila Apartments"></div>
                                        @endif
                                        @endforeach
                                   </div>
                                   <i class="fas fa-chevron-right ar-next"></i>
                                   <i class="fas fa-chevron-left ar-prev"></i>
                              </div>
                         </div>
                    </div>

                    <div class="container-fluid">
                         <div class="container-fluid w90 padtop30" style="padding: 15px 0;">
                              <div class="col-12">
                                   <h1 class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0; text-transform: capitalize;">{{ $data['post_detail']->Title }}</h1>
                                   <p class="addresshouse"><i class="fas fa-map-marker-alt"></i>
                                        {{ !empty($data['post_detail']->Street->Name) ? $data['post_detail']->Street->Name.', ' : '' }}{{ !empty($data['post_detail']->Area->Name) ? $data['post_detail']->Area->Name.', ' : '' }}{{ !empty($data['post_detail']->District->Name) ? $data['post_detail']->District->Name.', ' : '' }}{{ $data['post_detail']->City->Name }}</p>
                                   <p>{{ $data['post_detail']->Price + 0 }} {{ $data['post_detail']->PriceUnit }} - {{ $data['post_detail']->Width * $data['post_detail']->Length }} m²<br />
                                        {{ floatVal(number_format(($data['post_detail']->Price / ($data['post_detail']->Width * $data['post_detail']->Length) * 1000), 1, ',', '')) }} {{($data['post_detail']->PriceUnit === 'Tỷ' ? "Triệu" : "Ngàn")}} / m²</p>
                              </div>
                         </div>
                    </div>

                    <div class="container-fluid padtop30 single-post">
                         <section class="general">
                              <div class="row">
                                   <div class="col-md-12">

                                        <div class="tongquan row">
                                             <div class="col-md-8">
                                                  <div class="head">Tổng quan</div>
                                                  <span class="line_title"></span>
                                                  <div class="row">
                                                       <div class="col-sm-6 lineheight220">
                                                            <div><span>Hướng:</span> <b style="text-transform: capitalize;">{{ $data['post_detail']->Direction ?? 'Không xác định' }}</b></div>
                                                            <div><span>Số tầng:</span> <b>{{ $data['post_detail']->Floor ?? '-' }}</b></div>

                                                       </div>
                                                       <div class="col-sm-6 lineheight220">
                                                            <div><span>Phòng ngủ:</span> <b>{{ $data['post_detail']->Bedroom ?? '-' }}</b></div>
                                                            <div><span>Phòng tắm:</span> <b>{{ $data['post_detail']->Bathroom ?? '-' }}</b></div>
                                                            <div><span>Giấy tờ:</span> <b>Sổ hồng riêng</b></div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="col-md-4 sidebar ">
                                                  <div class="widget widget-tuvan">
                                                       <h6 class="widget-title widget-title-3">Đăng ký tư vấn</h6>
                                                       <div class="widget-content">
                                                            <form class="form-tuvan form-info bv-form" novalidate="novalidate">
                                                                 <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>

                                                                 <label class="input-inset form-group has-feedback">
                                                                      <i class="icon-user2"></i>
                                                                      <input name="name" id="customer-name" type="text" class="input" placeholder="Nhập họ tên (*)" value="" data-bv-field="name">
                                                                      <i class="form-control-feedback bv-no-label" data-bv-icon-for="name" style="display: none;"></i>
                                                                      <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Họ và Tên</small>
                                                                 </label>

                                                                 <label class="input-inset form-group has-feedback">
                                                                      <i class="icon-mail-2"></i>
                                                                      <input name="email" id="customer-email" type="text" class="input" placeholder="Nhập email" value="" data-bv-field="email">
                                                                      <i class="form-control-feedback bv-no-label" data-bv-icon-for="email" style="display: none;"></i>
                                                                      <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập địa chỉ email hợp lệ</small>
                                                                 </label>

                                                                 <label class="input-inset form-group has-feedback"> <i class="icon-phone1"></i>
                                                                      <input name="phone" id="customer-phone" type="text" class="input" placeholder="Nhập số điện thoại (*)" value="" data-bv-field="phone"><i class="form-control-feedback bv-no-label" data-bv-icon-for="phone" style="display: none;"></i>
                                                                      <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập số điện thoại hợp lệ</small>
                                                                      <small class="help-block" data-bv-validator="stringLength" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập số điện thoại hợp lệ</small>
                                                                 </label>

                                                                 <label class="datetime-input-icon form-group has-feedback">
                                                                      <span>
                                                                           <span>
                                                                                <i class="input-inset icon-date"></i>
                                                                           </span>
                                                                      </span>
                                                                      <input title="Bạn vui lòng chọn trong 14 ngày gần nhất" name="date" id="request-date" class="input" placeholder="dd / mm / yyyy" data-bv-field="date">
                                                                      <i class="form-control-feedback bv-no-label" data-bv-icon-for="date" style="display: none;"></i>
                                                                      <small class="help-block" data-bv-validator="timeLate" data-bv-for="date" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập ngày giờ trong tương lai</small>
                                                                 </label>

                                                                 <button id="btnSendInfo" listingid="227189" class="btn btn-3 btn170 send-request-top">Đặt Lịch Xem</button>
                                                            </form>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="head">Thông tin chi tiết</div>
                                        <div>{{ $data['post_detail']->Description }}</div>

                                        <br>

                                        <div class="head">Tiện ích</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  List các tiện ích > các dòng
                                                  <ul style="column-count: 3" id="listUtility">
                                                  </ul>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="mapouter">
                                        <div class="gmap_canvas">
                                             <iframe id="gmap_canvas" width="100%" height="500" src="https://maps.google.com/maps?q={{ $data['post_detail']->Location }}, {{ $data['post_detail']->Street->Name }}, {{ $data['post_detail']->Area->Name }}, {{ $data['post_detail']->District->Name }}, {{ $data['post_detail']->City->Name }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                        </div>
                                   </div>

                                   <br>
                                   <br>

                                   <div class="socials">
                                        <span>Liên Hệ Để Biết Thêm Chi Tiết Về Dự Án:</span>
                                        <ul>
                                             <li>
                                                  <a href="https://www.facebook.com/" target="_blank" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li>
                                                  <a href="https://www.linkedin.com/" title="Share on Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                             </li>
                                             <li>
                                                  <a href="https://twitter.com/" target="_blank" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                             </li>
                                        </ul>
                                   </div>
                                   <div class="clearfix"></div>
                                   <br>
                              </div>
                              <br>
                              <br>
                         </section>
                    </div>


                    <br>
                    <div class="listban">
                         <h5 class="headifhouse">Căn hộ đang bán cùng dự án</h5>

                         <div class="hourseitem row" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; box-shadow: rgb(170, 170, 170) 0px 4px 7px -4px;">
                              <div class=" blii col-sm-6 col-md-6 colm10">
                                   <div class="img"><img src="{{-- asset(json_decode($post_sale_item->Image, true)[0]['imgList'][0] ?? 'dist/img/default_bds.jpg') --}}" alt="{{-- $post_sale_item->Title --}}" class="thumb" style="max-height: 180px;"></div>
                                   <a href="{{-- route('postDetail', $post_sale_item->Slug) --}}" class="linkdetail"></a>
                              </div>
                              <div class="info col-sm-6 col-md-6">
                                   <h3><a href="{{-- route('postDetail', $post_sale_item->Slug) --}}" style="overflow-wrap: anywhere;">Căn hộ 2 PN ABC</a></h3>
                                   <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>
                                        Bình Thjanh
                                   </p>
                                   <p class="bold500">Giá: 3 Tỷ</p>
                                   <p class="threemt bold500">
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Ngủ">
                                             <i><img src="http://bdsnew.eso.vn/dist/img/bed.svg" alt="icon"></i> <i class="vti">3</i>
                                        </span>
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Phòng Tắm">
                                             <i><img src="http://bdsnew.eso.vn/dist/img/bath.svg" alt="icon"></i> <i class="vti">2</i>
                                        </span>
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Rộng">
                                             <i><img src="http://bdsnew.eso.vn/dist/img/area.svg" alt="icon"></i> <i class="vti">55 m²</i>
                                        </span>
                                   </p>
                              </div>
                         </div>
                         <a href="#">Xem tất cả</a>
                    </div>
               </main>
          </div>
          <div class="col-md-4">
               {{-- @include('index.components.search-box')
     @include('index.components.box-right') --}}
          </div>
     </div>
</div>
<script>
     showUtilityItem('{!! $data['post_detail']->Utility !!}');

     function showUtilityItem(list) {
          if (list) {
               JSON.parse(list).forEach(item => {
                    let html = `<li><span>${item}</span></li>`;

                    $('#listUtility').append(html);
               })
          }
     }

     filterSelection("all") // Execute the function and show all columns
     function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("card");
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
     $('#myBtnContainer>button').each((key, item) => {
          $(item).on('click', () => {
               $('#myBtnContainer>button').each((k, i) => i.classList.remove('active'));

               item.classList.add('active');
          })
     })
</script>
