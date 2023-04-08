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
                                        <p>Danh sách bất động sản thuộc dự án</p>
                                   </div>
                              </div>
                              <div class="row rowm10">
                                   <div class="col-sm-12 col-md-12 colm10 itemduan">
                                        <x-project-post-list :projectData="$data['project_detail']" :type="$pageInfo['type']" />
                                   </div>
                              </div>
                         </div>

                         <!--<property-component type="rent" url="https://asd/ajax/properties"></property-component>-->
                         <div class="padtop30 col-sm-3 col-md-3">
                              <x-search-box />
                              {{-- <x-box-right :category_id="6" /> --}}
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
                                   <div class="owl-carousel" id="district-slides">
                                        @empty(!$data['district_list'])
                                        @foreach ($data['district_list'] as $district)
                                        <x-district :districtData="$district" :pageInfo="$pageInfo" />
                                        @endforeach
                                        @endempty
                                   </div>
                                   <i class="am-next"><img src="{{ asset('dist/img/aleft.png') }}" alt="pre"></i>
                                   <i class="am-prev"><img src="{{ asset('dist/img/aright.png') }}" alt="next"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </p>
     </div>
</div>
