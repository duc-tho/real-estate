<div id="app" class="container">
     <div class="row">
          <div class="col-md-8">
               <main class="detailproject" style="background: #FFF;">
                    <div class="boxsliderdetail">
                         <div class="slidetop">
                              <div class="owl-carousel" id="listcarousel">
                                   @foreach(json_decode($data['project_detail']->Image ?? '[ {imgList: []} ]', true)[0]['imgList'] as $key => $image)
                                   @if (!empty($image))
                                   <div class="item"><img src="{{ asset($image) }}" class="showfullimg" rel="{{ $key }}" alt=""></div>
                                   @endif
                                   @endforeach
                              </div>
                         </div>
                         <div class="slidebot">
                              <div style="max-width: 800px; margin: 0 auto;">
                                   <div class="owl-carousel" id="listcarouselthumb" style="height: 100px;">
                                        @foreach(json_decode($data['project_detail']->Image ?? '[ {imgList: []} ]', true)[0]['imgList'] as $key => $image)
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
                                   <h1 class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0; text-transform: capitalize;">{{ $data['project_detail']->Title }}</h1>
                                   <p class="addresshouse"><i class="fas fa-map-marker-alt"></i> {{ $data['project_detail']->Location }}, {{ $data['project_detail']->Street->Name }}, {{ $data['project_detail']->Area->Name }}, {{ $data['project_detail']->District->Name }}, {{ $data['project_detail']->City->Name }}</p>
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
                                                  <div><span>Tên dự án:</span> <b style="text-transform: capitalize;">{{ $data['project_detail']->Title }}</b></div>
                                                  <div><span>Vị trí:</span> <b>{{ $data['project_detail']->Location }}, {{ $data['project_detail']->Street->Name }}, {{ $data['project_detail']->Area->Name }}, {{ $data['project_detail']->District->Name }}, {{ $data['project_detail']->City->Name }}</b></div>
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
                                        <p>{!! $data['project_detail']->InfrastructureLocation !!}.</p>

                                        <br>

                                        <div class="head">Thiết kế mặt bằng</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <p>{!! $data['project_detail']->GroundDesign !!}</p>
                                             </div>
                                        </div>

                                        <div class="head">Chủ đầu tư</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <p>{!! $data['project_detail']->Investor !!}</p>
                                             </div>
                                        </div>

                                        <div class="head">Tiện ích</div>
                                        <span class="line_title"></span>
                                        <div class="row">
                                             <div class="col-sm-12 lineheight220">
                                                  <ul style="column-count: 3" id="listUtility">
                                                  </ul>
                                             </div>
                                        </div>

                                        <br>

                                        <div class="hinhduan mb-4">
                                             <div class="head">Hình Ảnh</div>
                                             <div class="listhinhanh">
                                                  <div id="myBtnContainer">
                                                       @foreach(json_decode($data['project_detail']->Image ?? '[]') as $key => $group)
                                                       <button class="btn btn-light {{ $key === 0 ? 'active' : '' }}" onclick="filterSelection('{{ $group->id }}')">{{ $group->name }}</button>
                                                       @endforeach
                                                  </div>

                                                  <div class="card-columns mt-2" style="column-count: 4;">
                                                       @foreach(json_decode($data['project_detail']->Image ?? '[]')[0]->imgList as $image)
                                                       <div class="card d-none
                                                                 @foreach(array_slice(json_decode($data['project_detail']->Image), 1) as $group)
                                                                      @foreach($group->imgList as $image_name)
                                                                           @if($image === $image_name)
                                                                           {{ $group->id }}
                                                                           @endif
                                                                      @endforeach
                                                                 @endforeach
                                                            ">
                                                            <img src="{{ asset($image) }}" alt="Ảnh" style="width:100%">
                                                       </div>
                                                       @endforeach
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="mapouter">
                                             <div class="gmap_canvas">
                                                  <iframe id="gmap_canvas" width="100%" height="500" src="https://maps.google.com/maps?q={{ $data['project_detail']->Location }}, {{ $data['project_detail']->Street->Name }}, {{ $data['project_detail']->Area->Name }}, {{ $data['project_detail']->District->Name }}, {{ $data['project_detail']->City->Name }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                              </div>

                              <h5 class="headifhouse">Khuyến Mãi</h5>
                              <div>{!! $data['project_detail']->Promotion !!}</div>
                              <br>
                              <div class="listban">
                                   <h5 class="headifhouse">Căn hộ đang bán</h5>
                                   @if (count($data['project_detail']->post_sale_list) > 0)
                                   @foreach ($data['project_detail']->post_sale_list as $post_sale_item)
                                   <x-index.post-horizontal :postData="$post_sale_item" />
                                   @endforeach
                                   <a class="btn-light btn w-100 mt-2 font-weight-bold" href="{{ route('project', [$data['project_detail']->City->Slug, $data['project_detail']->District->Slug, $data['project_detail']->Slug, 'ban']) }}" style="color: #1d5f6f">Xem tất cả</a>
                                   @else
                                   <div class="col-sm-12 col-md-12 colm10">
                                        <h6 class="text-center py-2 text-secondary">Chưa có căn hộ nào khác đang bán!</h6>
                                   </div>
                                   @endif
                              </div>

                              <div class="listban">
                                   <h5 class="headifhouse">Căn hộ cho thuê</h5>
                                   @if (count($data['project_detail']->post_rent_list) > 0)
                                   @foreach ($data['project_detail']->post_rent_list as $post_rent_item)
                                   <x-index.post-horizontal :postData="$post_rent_item" />
                                   @endforeach
                                   <a class="btn-light btn w-100 mt-2 font-weight-bold" href="{{ route('project', [$data['project_detail']->City->Slug, $data['project_detail']->District->Slug, $data['project_detail']->Slug, 'thue']) }}" style="color: #1d5f6f">Xem tất cả</a>
                                   @else
                                   <div class="col-sm-12 col-md-12 colm10">
                                        <h6 class="text-center py-2 text-secondary">Chưa có căn hộ nào khác đang cho thuê!</h6>
                                   </div>
                                   @endif
                              </div>
                         </section>
                    </div>
               </main>
          </div>


          <div class="col-md-4">
               <x-index.search-box />
               {{-- <x-index.box-right :categoryId="6" /> --}}
          </div>
     </div>
</div>
<script>
     showUtilityItem('{!! $data['project_detail']->Utility !!}');

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
