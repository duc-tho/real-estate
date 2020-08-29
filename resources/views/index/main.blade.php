@include('index.components.header')

<div id="app">
     <body >
          {{-- <?php include("header1.php"); ?> --}}
          
          <div class="home_banner" style="background-image: url({{asset('/dist/img/banner.jpg')}})">
                      <div class="topsearch">
                                          <form action="https://bdsnew.eso.vn/projects" method="GET" id="frmhomesearch">
                              <div class="typesearch" id="hometypesearch">
                                  <a href="javascript:void(0)" class="active" rel="project" data-url="https://bdsnew.eso.vnprojects">Projects</a>
                                  <a href="javascript:void(0)" rel="sale" data-url="https://bdsnew.eso.vnproperties">Sale</a>
                                  <a href="javascript:void(0)" rel="rent" data-url="https://bdsnew.eso.vnproperties">Rent</a>
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
                                      <span class="input-group-text"><img src="{{asset('/dist/img/search_icon.png')}}" alt="search"></span>
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
                                  <p style="margin: 0; margin-bottom: 10px">We make the best choices with the hottest and most prestigious projects, please visit the details below to find out more</p>
                              </div>
                          </div>
                          <div class="row rowm10">
                                                      <div class="col-6 col-sm-4  col-md-3 colm10">
                                      <div class="item">
                                          <div class="blii">
                                              <div class="img"><img class="thumb" data-src="{{asset('dist/img/1-410x270.jpg')}}" src="{{asset('/dist/img/1-410x270.jpg')}}" alt="Walnut Park Apartments">
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
                                                      <div class="col-6 col-sm-4  col-md-3 colm10">
                                      <div class="item">
                                          <div class="blii">
                                              <div class="img"><img class="thumb" data-src="{{asset('/dist/img/21-410x270.jpg')}}" src="{{asset('/dist/img/21-410x270.jpg')}}" alt="Osaka Heights">
                                              </div>
                                              <a href="https://bdsnew.eso.vnprojects/osaka-heights" class="linkdetail"></a>
                                          </div>
          
                                          <div class="description">
                                              
                                              <a href="https://bdsnew.eso.vnprojects/osaka-heights"><h5>Osaka Heights</h5>
                                                  <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Kirulapone, Colombo 06, Colombo, Sri Lanka</p>
                                                                                      </a>
                                          </div>
                                      </div>
                                  </div>
                                                      <div class="col-6 col-sm-4  col-md-3 colm10">
                                      <div class="item">
                                          <div class="blii">
                                              <div class="img"><img class="thumb" data-src="{{asset('/dist/img/13-410x270.jpg')}}" src="{{asset('/dist/img/13-410x270.jpg')}}" alt="Mimaroba Paradise">
                                              </div>
                                              <a href="https://bdsnew.eso.vnprojects/mimaroba-paradise" class="linkdetail"></a>
                                          </div>
          
                                          <div class="description">
                                              
                                              <a href="https://bdsnew.eso.vnprojects/mimaroba-paradise"><h5>Mimaroba Paradise</h5>
                                                  <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
                                                                                      </a>
                                          </div>
                                      </div>
                                  </div>
                                                      <div class="col-6 col-sm-4  col-md-3 colm10">
                                      <div class="item">
                                          <div class="blii">
                                              <div class="img"><img class="thumb" data-src="{{asset('/dist/img/a5-1-410x270.jpg')}}" src="{{asset('/dist/img/a5-1-410x270.jpg')}}" alt="Aegean Villas">
                                              </div>
                                              <a href="https://bdsnew.eso.vnprojects/aegean-villas" class="linkdetail"></a>
                                          </div>
          
                                          <div class="description">
                                              
                                              <a href="https://bdsnew.eso.vnprojects/aegean-villas"><h5>Aegean Villas</h5>
                                                  <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Büyükçekmece, İstanbul, Turkey</p>
                                                                                      </a>
                                          </div>
                                      </div>
                                  </div>
                                              </div>
                      </div>
                  </div>
              </div>
          </p>
          
          <p><div class="container-fluid w90">
          
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
                                          <a href="https://bdsnew.eso.vnprojects/city/alhambra"><img src="{{asset('/dist/img/los-angeles-winter-2016-410x270.jpg')}}"
                                                                                                            alt="Alhambra"><h4>Alhambra</h4>
                                          </a>
                                      </div>
                                            <div class="item itemarea">
                                          <a href="https://bdsnew.eso.vnprojects/city/oakland"><img src="{{asset('/dist/img/oaklandnightskylineandlakemerritt-410x270.jpg')}}"
                                                                                                            alt="Oakland"><h4>Oakland</h4>
                                          </a>
                                      </div>
                                            <div class="item itemarea">
                                          <a href="https://bdsnew.eso.vnprojects/city/bakersfield"><img src="{{asset('/dist/img/2009-0726-ca-bakersfield-truxtontower-410x270.jpg')}}"
                                                                                                            alt="Bakersfield"><h4>Bakersfield</h4>
                                          </a>
                                      </div>
                                            <div class="item itemarea">
                                          <a href="https://bdsnew.eso.vnprojects/city/anaheim"><img src="{{asset('/dist/img/castillo-de-disneyland-410x270.jpg')}}"
                                                                                                            alt="Anaheim"><h4>Anaheim</h4>
                                          </a>
                                      </div>
                                            <div class="item itemarea">
                                          <a href="https://bdsnew.eso.vnprojects/city/san-francisco"><img src="{{asset('/dist/img/goldengatebridge-001-410x270.jpg')}}"
                                                                                                            alt="San Francisco"><h4>San Francisco</h4>
                                          </a>
                                      </div>
                                                      </div>
                              <i class="am-next"><img src="{{asset('/dist/img/aleft.png')}}" alt="pre"></i>
                              <i class="am-prev"><img src="{{asset('/dist/img/aright.png')}}" alt="next"></i>
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
                                  <!----> <!----> <div class="col-sm-4 col-md-3 colm10">
                                      <div class="hourseitem">
                                          <div class="blii">
                                              <div class="img">
                                                  <img data-src="{{asset('/dist/img/6-2-410x270.jpg')}}" src="{{asset('/dist/img/6-2-410x270.jpg')}}" alt="5 room luxury penthouse for sale in Kuala Lumpur" class="thumb">
                                              </div> 
                                        <a href="https://bdsnew.eso.vnproperties/villa-for-sale-in-lavanya-residences" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/villa-for-sale-in-lavanya-residences">5 room luxury penthouse for sale in Kuala Lumpur</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Kuala Lumpur, Malaysia</p> <p class="bold500">Price: $1.59 million  </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">5</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">7</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">377 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/5-2-410x270.jpg')}}" src="{{asset('/dist/img/5-2-410x270.jpg')}}" alt="Luxury Apartments in Singapore for Sale" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/the-avila-apartment" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/the-avila-apartment">Luxury Apartments in Singapore for Sale</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Balestier Road, Singapore</p> <p class="bold500">Price: $918,000 </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">78 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('dist/img/79-410x270.jpg')}}" src="{{asset('/dist/img/79-410x270.jpg')}}" alt="Private Estate Magnificent Views" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/private-estate-magnificent-views" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/private-estate-magnificent-views">Private Estate Magnificent Views</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  110 Springdale Heights, Hay Denmark, WA, Australia</p> <p class="bold500">Price: $694,000 </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('dist/img/area.svg')}}" alt="icon"></i> <i class="vti">2000 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/24-1-410x270.jpg')}}" src="{{asset('/dist/img/24-1-410x270.jpg')}}" alt="Osaka Heights Apartment" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/osaka-heights-apartment" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/osaka-heights-apartment">Osaka Heights Apartment</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  High Level Road, Colombo 06, Sri Lanka</p> <p class="bold500">Price: $150,000 </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">110 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/411-410x270.jpg')}}" src="{{asset('/dist/img/411-410x270.jpg')}}" alt="Villa for sale at Bermuda Dunes" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/42460-buccaneer-court" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/42460-buccaneer-court">Villa for sale at Bermuda Dunes</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Bermuda Dunes, Riverside County, CA 92203, USA</p> <p class="bold500">Price: $1.30 million  </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">4</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">480 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/31-410x270.jpg')}}" src="{{asset('/dist/img/31-410x270.jpg')}}" alt="Stunning French Inspired Manor" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/stunning-french-inspired-manor" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/stunning-french-inspired-manor">Stunning French Inspired Manor</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Solvang, Santa Barbara County, CA 93463, USA</p> <p class="bold500">Price: $1.70 million  </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">4</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">450 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/23-410x270.jpeg')}}" src="{{asset('/dist/img/23-410x270.jpeg')}}" alt="Property For sale , Johannesburg, South Africa" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/property-for-sale-johannesburg-south-africa" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/property-for-sale-johannesburg-south-africa">Property For sale , Johannesburg, South Africa</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Johannesburg, South Africa</p> <p class="bold500">Price: $800,000 </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">4</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">4</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">800 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/1-410x270.jpg')}}" src="{{asset('/dist/img/1-410x270.jpg')}}" alt="3 Beds Villa Calpe, Alicante" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/3-beds-villa-calpe-alicante" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Selling</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/3-beds-villa-calpe-alicante">3 Beds Villa Calpe, Alicante</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Alicante, Spain</p> <p class="bold500">Price: $700,000 </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                                            <img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">600 m2</i></span></p></div></div></div></div>
                    
                              
                              
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
                    <div class="row rowm10"><!----> <!----> <div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Berlin, Germany</p> <p class="bold500">Price: $1,217 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">33 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/b4-1-410x270.jpg')}}" src="{{asset('/dist/img/b4-1-410x270.jpg')}}" alt="Apartment Muiderstraatweg in Diemen" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/apartment-muiderstraatweg-in-diemen" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/apartment-muiderstraatweg-in-diemen">Apartment Muiderstraatweg in Diemen</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Diemen, Netherlands</p> <p class="bold500">Price: $2,123 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">90 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/a1-2-410x270.jpg')}}" src="{{asset('/dist/img/a1-2-410x270.jpg')}}" alt="2 Floor house in Compound Pejaten Barat Kemang" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/want-to-lease-a-house-in-compound-pejaten-barat-kemang" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/want-to-lease-a-house-in-compound-pejaten-barat-kemang">2 Floor house in Compound Pejaten Barat Kemang</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Kota Administrasi Jakarta Selatan, South Jakarta City, Jakarta Raya, Indonesia</p> <p class="bold500">Price: $1,400 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('dist/img/area.svg')}}" alt="icon"></i> <i class="vti">200 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/a1-1-410x270.jpg')}}" src="{{asset('/dist/img/a1-1-410x270.jpg')}}" alt="Elegant family home presents premium modern living" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/elegant-family-home-presents-premium-modern-living" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/elegant-family-home-presents-premium-modern-living">Elegant family home presents premium modern living</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  North Lakes QLD 4509, Australia</p> <p class="bold500">Price: $1,574 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">658 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/12-410x270.jpg')}}" src="{{asset('/dist/img/12-410x270.jpg')}}" alt="Brand New 1 Bedroom Apartment In First Class Location" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/break-lease-available" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/break-lease-available">Brand New 1 Bedroom Apartment In First Class Location</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Sandy Bay Road, Sandy Bay TAS, Australia</p> <p class="bold500">Price: $1,680 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">1</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">80 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/5-1-410x270.jpg')}}" src="{{asset('/dist/img/5-1-410x270.jpg')}}" alt="Thompsons Road House for rent" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/harry-baskervilles-hay-loft" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/harry-baskervilles-hay-loft">Thompsons Road House for rent</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Thompsons Road, Bulleen VIC, Australia</p> <p class="bold500">Price: $1,465 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">160 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/b5-410x270.jpg')}}" src="{{asset('/dist/img/b5-410x270.jpg')}}" alt="Family Victorian &quot;View&quot; Home" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/family-victorian-view-home" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3><a href="https://bdsnew.eso.vnproperties/family-victorian-view-home">Family Victorian "View" Home</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Safeway San Francisco CA, Market Street, San Francisco, CA 94114, USA</p> <p class="bold500">Price: $2,580 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">3</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">2</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">180 m2</i></span></p></div></div></div><div class="col-sm-4 col-md-3 colm10"><div class="hourseitem"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/a3-410x270.jpg')}}" src="{{asset('/dist/img/a3-410x270.jpg')}}" alt="5 beds luxury house" class="thumb"></div> <a href="https://bdsnew.eso.vnproperties/el-camino-del-mar" class="linkdetail"></a> <div class="status"><span class="label-success status-label">Renting</span></div></div> <div class="info"><h3>
                        <a href="https://bdsnew.eso.vnproperties/el-camino-del-mar">5 beds luxury house</a></h3> <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Seacliff San Francisco, Sea Cliff Avenue, San Francisco, CA 94121, USA</p> <p class="bold500">Price: $1,808 / month </p> <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i><img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> <i class="vti">5</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i><img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> <i class="vti">4</i></span> <span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i><img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> <i class="vti">270 m2</i></span></p></div></div></div></div>
                    
                  <!--<property-component type="rent" url="https://bdsnew.eso.vnajax/properties"></property-component>-->
                    
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
                                        <img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb">
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
                         
                         <div class="chothue">
                         <div class="hourseitem row">
                         <h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a> </h3> 
                         <div class="hinhpost col-sm-6 col-md-6">
                              <div class="img"><img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                              <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
                              <div class="status"><span class="label-success status-label">Renting</span></div>
                              </div> 
                              <div class="col-sm-6 col-md-6">
                              
                              <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Tây Bắc</p> 
                              <p class="bold500">Giá 3,3 tỷ >>> 60tr/m2</p> 
                              <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                              <img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> 
                              <i class="vti">63 m2</i></span></p>
                              <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                              <img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                              <img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              
                              </p>
                              <p><i class="far fa-heart"></i></p>
                              <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                              </div>
                         </div>
                    </div>
                    <div class="bdsban">
                         <div class="hourseitem row">
                         <h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3> 
                         <div class="hinhpost col-sm-6 col-md-6">
                              <div class="img"><img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                              <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
                              <div class="status"><span class="label-success status-label">Selling</span></div>
                              </div> 
                              <div class="col-sm-6 col-md-6">
                              
                              <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Nam</p> 
                              <p class="bold500">Giá 8 triệu /tháng >>> 500k/m2</p> 
                              <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                              <img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> 
                              <i class="vti">49 m2</i></span></p>
                              <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                              <img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                              <img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> 
                              <i class="vti">1</i></span> 
                              </p>
                              <p><i class="far fa-heart"></i></p>
                              <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                              </div>
                         </div>
                    </div>
                         </div>
                    </div>
                    
                    
                    <div class="col-sm-6 col-md-6 colm10 itemduan">
                         <div class="hourseitem row">
                              <div class="blii col-sm-6 col-md-6 colm10">
                                   <div class="img">
                                        <img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb">
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
                         
                         <div class="chothue">
                         <div class="hourseitem row">
                         <h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a> </h3> 
                         <div class="hinhpost col-sm-6 col-md-6">
                              <div class="img"><img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                              <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
                              <div class="status"><span class="label-success status-label">Renting</span></div>
                              </div> 
                              <div class="col-sm-6 col-md-6">
                              
                              <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Tây Bắc</p> 
                              <p class="bold500">Giá 3,3 tỷ >>> 60tr/m2</p> 
                              <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                              <img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> 
                              <i class="vti">63 m2</i></span></p>
                              <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                              <img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                              <img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              
                              </p>
                              <p><i class="far fa-heart"></i></p>
                              <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                              </div>
                         </div>
                    </div>
                    <div class="bdsban">
                         <div class="hourseitem row">
                         <h3><a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin">Nice Apartment for rent in Berlin</a></h3> 
                         <div class="hinhpost col-sm-6 col-md-6">
                              <div class="img"><img data-src="{{asset('/dist/img/t3-410x270.jpg')}}" src="{{asset('/dist/img/t3-410x270.jpg')}}" alt="Nice Apartment for rent in Berlin" class="thumb"></div>
                              <a href="https://bdsnew.eso.vnproperties/nice-apartment-for-rent-in-berlin" class="linkdetail"></a> 
                              <div class="status"><span class="label-success status-label">Selling</span></div>
                              </div> 
                              <div class="col-sm-6 col-md-6">
                              
                              <p class="city"><i class="fas fa-map-marker-alt" style="opacity: 0.7;"></i>  Nam</p> 
                              <p class="bold500">Giá 8 triệu /tháng >>> 500k/m2</p> 
                              <p><span data-toggle="tooltip" data-placement="top" data-original-title="Square"><i>
                              <img src="{{asset('/dist/img/area.svg')}}" alt="icon"></i> 
                              <i class="vti">49 m2</i></span></p>
                              <p class="threemt bold500"><span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i>
                              <img src="{{asset('/dist/img/bed.svg')}}" alt="icon"></i> 
                              <i class="vti">2</i></span> 
                              <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"><i>
                              <img src="{{asset('/dist/img/bath.svg')}}" alt="icon"></i> 
                              <i class="vti">1</i></span> 
                              </p>
                              <p><i class="far fa-heart"></i></p>
                              <a href="/du-an/hcm/quan-9/vinhomes-grand-park-id780/ban" class="viewall">Xem tất cả <i class="icon-arrow-2"></i></a>
                              </div>
                         </div>
                    </div>
                         </div>
                    </div>
                    
                              
                              </div>
                    
                  <!--<property-component type="rent" url="https://bdsnew.eso.vnajax/properties"></property-component>-->
                    
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
                                        
                                        <div class="blog-container"><div class="row"><!----> <div class="col-md-3 col-sm-6 container-grid"><div class="grid-in"><div class="grid-shadow"><div class="hourseitem" style="margin-top: 0px;"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/download-410x270.jpeg')}}" src="{{asset('/dist/img/download-410x270.jpeg')}}" alt="S. Korea’s Big Investors Flocking to Overseas Real Estate" class="thumb" style="border-radius: 0px;"></div> <a href="https://bdsnew.eso.vns-koreas-big-investors-flocking-to-overseas-real-estate" class="linkdetail"></a></div></div> <div class="grid-h"><div class="blog-title"><a href="https://bdsnew.eso.vns-koreas-big-investors-flocking-to-overseas-real-estate"><h2>S. Korea’s Big Investors Flocking to Overseas Real Estate</h2></a> <p class="post-meta">18 Nov, 2019 - <i class="fa fa-eye"></i> 1</p></div> <div class="blog-excerpt"><p>An increasing number of South Korean investors are getting interested in real estate in foreign countries, especially the United States and Japan where regulations are relatively lax and property values are stable.</p></div></div></div></div></div><div class="col-md-3 col-sm-6 container-grid"><div class="grid-in"><div class="grid-shadow"><div class="hourseitem" style="margin-top: 0px;"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/6-1-410x270.jpg')}}" src="{{asset('/dist/img/6-1-410x270.jpg')}}" alt="Singapore Overtakes Hong Kong In Terms Of Property Investment Prospects" class="thumb" style="border-radius: 0px;"></div> <a href="https://bdsnew.eso.vnsingapore-overtakes-hong-kong-in-terms-of-property-investment-prospects" class="linkdetail"></a></div></div> <div class="grid-h"><div class="blog-title"><a href="https://bdsnew.eso.vnsingapore-overtakes-hong-kong-in-terms-of-property-investment-prospects"><h2>Singapore Overtakes Hong Kong In Terms Of Property Investment Prospects</h2></a> <p class="post-meta">18 Nov, 2019 - <i class="fa fa-eye"></i> 1</p></div> <div class="blog-excerpt"><p>Singapore now claims the top spot for real estate investment prospects in terms of price increases in 2020. Hong Kong, rocked by months of violent political protests, has fallen from 14th place to the bottom...</p></div></div></div></div></div><div class="col-md-3 col-sm-6 container-grid"><div class="grid-in"><div class="grid-shadow"><div class="hourseitem" style="margin-top: 0px;"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/2-2-410x270.jpg')}}" src="{{asset('/dist/img/2-2-410x270.jpg')}}" alt="Private Home Sales Drop 27% In October" class="thumb" style="border-radius: 0px;"></div> <a href="https://bdsnew.eso.vnprivate-home-sales-drop-27-in-october" class="linkdetail"></a></div></div> <div class="grid-h"><div class="blog-title"><a href="https://bdsnew.eso.vnprivate-home-sales-drop-27-in-october"><h2>Private Home Sales Drop 27% In October</h2></a> <p class="post-meta">18 Nov, 2019 - <i class="fa fa-eye"></i> 2</p></div> <div class="blog-excerpt"><p>New private home sales in Singapore fell 27% in October from September, reported Channel News Asia, based on the data released by the Urban Redevelopment Authority (URA).
          According to URA data, developers only sold 928...</p></div></div></div></div></div><div class="col-md-3 col-sm-6 container-grid"><div class="grid-in"><div class="grid-shadow"><div class="hourseitem" style="margin-top: 0px;"><div class="blii"><div class="img"><img data-src="{{asset('/dist/img/1-2-410x270.jpg')}}" src="{{asset('/dist/img/1-2-410x270.jpg')}}" alt="BCG sets great store by real estate negotiations" class="thumb" style="border-radius: 0px;"></div> <a href="https://bdsnew.eso.vnbcg-sets-great-store-by-real-estate-negotiations" class="linkdetail"></a></div></div> <div class="grid-h"><div class="blog-title"><a href="https://bdsnew.eso.vnbcg-sets-great-store-by-real-estate-negotiations"><h2>BCG sets great store by real estate negotiations</h2></a> <p class="post-meta">18 Nov, 2019 - <i class="fa fa-eye"></i> 2</p></div> <div class="blog-excerpt"><p>BCG leaders shared with investors at a meeting this month that real estate and renewable energy will be the two main activities of the group. In the field of manufacturing, BCG only retains businesses that...</p></div></div></div></div></div></div></div>
                                        
                                  <!--<div class="blog-container">
                                      <news-component url="https://bdsnew.eso.vnajax/posts"></news-component>
                                  </div>-->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </p>
          
              </div>
          </div>
          
          
          {{-- <?php include("footer.php"); ?> --}}
          </body>
</div>

@include('index.components.footer')
