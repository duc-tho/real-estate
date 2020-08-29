<div class="home_banner" style="background-image: url({{ asset('asset/img/banner.jpg') }})">
     <div class="topsearch">
        <form action="https://bdsnew.eso.vn/projects" method="GET" id="frmhomesearch">
             <div class="typesearch" id="hometypesearch">
                 <a href="javascript:void(0)" class="active" rel="project" data-url="https://bdsnew.eso.vnprojects">Projects</a>
                 <a href="javascript:void(0)" rel="sale" data-url="https://bdsnew.eso.vnprojects">Sale</a>
                 <a href="javascript:void(0)" rel="rent" data-url="https://bdsnew.eso.vnprojects">Rent</a>
             </div>
             <div class="input-group input-group-lg">
                  
                <div class="form-group">
                    <select name="blocks" id="select-blocks" class="form-control">
                        <option value="">-- Tỉnh, Thành Phố --</option> 
                        <option value="1">TP.HCM</option> 
                        <option value="2">Bình Dương</option> 
                        <option value="3">Đồng Nai</option>
                        <option value="4">Bà Rịa - Vũng Tàu</option>
                    </select>
                </div>
                  
                 <div class="input-group-prepend">
                     <span class="input-group-text"><img src="{{ asset('asset/img/search_icon.png')}}" alt="search"></span>
                 </div>
                 <input type="hidden" name="type" value="project" id="txttypesearch">
                 <input type="text" class="form-control" name="k"
                        placeholder="Enter keyword..." id="txtkey" autocomplete="off">
                 <div class="input-group-append">
                     <button class="btn btn-orange" type="submit">Search</button>
                 </div>
             </div>
             <div class="listsuggest stylebar">

             </div>
         </form>
     </div>
 </div>
<div id="app">
<div id="ismain-homes">
 <p><div class="box_shadow" style="margin-top: 0;">
 <div class="container-fluid w90">
     <div class="projecthome">
         <div class="row">
            <div class="col-12">
                <h2>Featured projects</h2>
                    <p style="margin: 0; margin-bottom: 10px">
                        We make the best choices with the hottest and most prestigious projects, please visit the details below to find out more
                    </p>
            </div>
         </div>
         <div class="row rowm10">
            <div class="col-6 col-sm-4  col-md-3 colm10">
                     <div class="item">
                         <div class="blii">
                             <div class="img"><img class="thumb" data-src="asset/img/1-410x270.jpg" src="{{ asset('asset/img/1-410x270.jpg') }}" alt="Walnut Park Apartments">
                             </div>
                                <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment" class="linkdetail"></a>
                         </div>

                        <div class="description">
                             
                            <a href="https://bdsnew.eso.vnprojects/walnut-park-apartment"><h5>Walnut Park Apartments</h5>
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
                 <h2>Projects by locations</h2>
                 <p>Each place is a good choice, it will help you make the right decision, do not miss the opportunity to discover our wonderful properties.</p>
             </div>
         </div>
         <div style="position:relative;">
             <div class="owl-carousel" id="project-city-slides">
                <div class="item itemarea">
                        <a href="https://bdsnew.eso.vnprojects/city/alhambra">
                            <img src="{{ asset('asset/img/los-angeles-winter-2016-410x270.jpg')}}" alt="Alhambra">
                            <h4>Alhambra</h4>
                        </a>
                </div>
            </div>
        </div>
 </div>
</div>
</p>

<p><div class="padtop70">
<div class="box_shadow">

 <div class="container-fluid w90">
     <div class="homehouse">
         <div class="row">
             <div class="col-12">
                 <h2>Properties For Sale</h2>
                 <p>Below is a list of properties that are currently up for sale</p>
             </div>
         </div>
             <div class="row rowm10">
                <div class="col-sm-4 col-md-3 colm10">
                    <div class="hourseitem"><div class="blii">
                        <div class="img">
                            <img data-src="img/6-2-410x270.jpg" src="{{ asset('asset/img/6-2-410x270.jpg') }}" alt="5 room luxury penthouse for sale in Kuala Lumpur" class="thumb">
                        </div> 
                            <a href="https://bdsnew.eso.vnproperties/villa-for-sale-in-lavanya-residences" class="linkdetail"></a> 
                        <div class="status">
                            <span class="label-success status-label">Selling</span>
                        </div>
                    </div> 
                    <div class="info">
                        <h3><a href="https://bdsnew.eso.vnproperties/villa-for-sale-in-lavanya-residences">5 room luxury penthouse for sale in Kuala Lumpur</a></h3> 
                        <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>Kuala Lumpur, Malaysia</p>
                        <p class="bold500">Price: $1.59 million  </p>
                        <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms">
                        <i><img src="{{ asset('asset/img/bed.svg') }}" alt="icon"></i> <i class="vti">5</i></span> 
                        <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{ asset('asset/img/bath.svg') }}" alt="icon"></i>
                        <i class="vti">7</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square">
                        <i><img src="{{ ('asset/img/area.svg') }}" alt="icon">
                        </i> <i class="vti">377 m2</i>
                        </span></p>
                        </div></div></div>
                        </div>
   
             
             
         <!--<property-component type="sale" url="https://bdsnew.eso.vnajax/properties"></property-component>-->
     </div>
 </div>
</div>
</div>
</p>

<p><div class="container-fluid w90">
<div class="homehouse padtop30">
 <div class="row">
     <div class="col-12">
         <h2>Properties For Rent</h2>
         <p>Below is a detailed price list of each property for rent</p>
     </div>
 </div>
   <div class="row rowm10">
        <div class="col-sm-4 col-md-3 colm10">
            <div class="hourseitem"><div class="blii">
                <div class="img"><img data-src="img/t3-410x270.jpg" src="{{ asset('asset/img/t3-410x270.jpg') }}" alt="Nice Apartment for rent in Berlin" class="thumb"></div> 
                <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a>
                <div class="status"><span class="label-success status-label">Renting</span></div>
            </div> 
            <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3>
                <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Berlin, Germany</p> 
                <p class="bold500">Price: $1,217 / month </p>
                <p class="threemt bold500">
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms">
                        <i><img src="{{ asset('asset/img/bed.svg') }}" alt="icon"></i> <i class="vti">1</i>
                    </span> 
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms">
                        <i><img src="{{ asset('asset/img/bath.svg') }}" alt="icon"></i> <i class="vti">1</i>
                    </span>
                    <span data-toggle="tooltip" data-placement="top" data-original-title="Square">
                        <i><img src="{{ asset('asset/img/area.svg') }}" alt="icon"></i> <i class="vti">33 m2</i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</p>

<p><div class="container">
<div class="homehouse padtop30">
 <div class="row">
     <div class="col-12">
         <h2>DỰ ÁN</h2>
         <p>Danh sách dự án BDS nổi bật</p>
     </div>
 </div>
   <div class="row rowm10"><!----> <!----> 
   <div class="col-sm-6 col-md-6 colm10 itemduan">
        <div class="hourseitem row">
             <div class="blii col-sm-6 col-md-6 colm10">
                  <div class="img">
                       <img data-src="img/t3-410x270.jpg" src="{{ asset('asset/img/t3-410x270.jpg') }}" alt="Nice Apartment for rent in Berlin" class="thumb">
                  </div>
             <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
             
             </div> 
             <div class="info col-sm-6 col-md-6">
             <h2><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Vinhomes Grand Park</a></h2> 
             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Nguyễn Xiển, Phường Long Bình, Long Thạnh Mỹ, Quận 9, Hồ Chí Minh, Việt Nam</p> 
             <p class="bold500">Quy mô: 71 block, 10343 căn hộ </p> 
             <p class="threemt bold500">Năm xây dựng: 2018</p>
             <p class="threemt bold500">Giá từ: 39 triệu/m2</p>
             <p class="threemt bold500">Bán: 8 - Thuê: 13</p>
             <p class="threemt bold500">Tiến độ: Đã hoàn thành</p>
             </div>
        </div>
   </div>
   <div class="col-sm-6 col-md-6 colm10 itemduan">
        <div class="hourseitem row">
             <div class="blii col-sm-6 col-md-6 colm10">
                  <div class="img">
                       <img data-src="img/t3-410x270.jpg" src="{{ asset('asset/img/t3-410x270.jpg') }}" alt="Nice Apartment for rent in Berlin" class="thumb">
                  </div>
             <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
             
             </div> 
             <div class="info col-sm-6 col-md-6">
             <h2><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Vinhomes Grand Park</a></h2> 
             <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Nguyễn Xiển, Phường Long Bình, Long Thạnh Mỹ, Quận 9, Hồ Chí Minh, Việt Nam</p> 
             <p class="bold500">Quy mô: 71 block, 10343 căn hộ </p> 
             <p class="threemt bold500">Năm xây dựng: 2018</p>
             <p class="threemt bold500">Giá từ: 39 triệu/m2</p>
             <p class="threemt bold500">Bán: 8 - Thuê: 13</p>
             <p class="threemt bold500">Tiến độ: Đã hoàn thành</p>
             </div>
        </div>
   </div>
    </div>
   </div>
   
             
</div>
   
</div>
</div>
</p>


<p><div class="box_shadow" style="margin-bottom: 0;padding-bottom: 80px;">
 <div class="container-fluid w90">
     <div class="discover">
         <div class="row">
             <div class="col-12">
                 <h2>News</h2>
                 <p>Below is the latest real estate news we get regularly updated from reliable sources.</p>
                 <br>
                    <div class="blog-container">
                        <div class="row"> <div class="col-md-3 col-sm-6 container-grid">
                            <div class="grid-in"><div class="grid-shadow">
                                <div class="hourseitem" style="margin-top: 0px;">
                                    <div class="blii"><div class="img">
                                        <img data-src="img/download-410x270.jpeg" src="{{ asset('asset/img/download-410x270.jpeg') }}" alt="S. Korea’s Big Investors Flocking to Overseas Real Estate" class="thumb" style="border-radius: 0px;">
                                    </div>
                                        <a href="https://bdsnew.eso.vns-koreas-big-investors-flocking-to-overseas-real-estate" class="linkdetail"></a>
                                    </div>
                                </div> 
                                <div class="grid-h"><div class="blog-title">
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
</p>

</div>
</div>