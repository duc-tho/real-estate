<input type="hidden" base_url="{{ URL::to('/') }}">
<div class="search-box rounded p-0 pt-4" style="background: #e2e2e2; box-shadow: 0 3px 16px rgba(0,0,0,.14);">
     <h3 class="text-center">Tìm Nhanh</h3>
     <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
               <a class="nav-link px-4 active" id="home-tab" data-toggle="tab" href="#ban" role="tab" aria-controls="home" aria-selected="true">Bán</a>
          </li>
          <li class="nav-item">
               <a class="nav-link px-4" id="profile-tab" data-toggle="tab" href="#thue" role="tab" aria-controls="profile" aria-selected="false">Thuê</a>
          </li>
          <li class="nav-item">
               <a class="nav-link px-4" id="contact-tab" data-toggle="tab" href="#duan" role="tab" aria-controls="contact" aria-selected="false">Dự án</a>
          </li>
     </ul>
     <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade p-3 show active" id="ban" role="tabpanel" aria-labelledby="home-tab" style="background: #fff">
               <h6 class="text-center font-weight-bold">Bán</h6>
               <form id="form_1" action="#" method="get">
                    <div class="form-group">
                         <label for="select-category" class="control-label">Danh mục</label>
                         <select id="select-category_1" class="form-control">
                              <option value="">Chọn Danh mục</option>
                              @foreach ($categoryList as $categoryItem)
                              @if ($categoryItem->Name === 'Bán')
                              @foreach ($categoryItem->child as $categoryChildItem)
                              <option data-slug="{{$categoryChildItem->Slug }}" value="{{ $categoryChildItem->CategoryId }}">{{ $categoryChildItem->Name }}</option>
                              @endforeach
                              @endif
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                         <select id="city_id_1" class="form-control">
                              <option value="">Chọn Tỉnh / Thành Phố</option>
                              @foreach ($cityList as $cityItem)
                              <option data-slug="{{$cityItem->Slug }}" value="{{ $cityItem->CityId }}">{{ $cityItem->Name }}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Quận - Huyện</label>
                         <select id="district_id_1" class="form-control">
                              <option value="">Chọn Quận / Huyện</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                         <select id="area_id_1" class="form-control">
                              <option value="">Chọn Phường / Xã</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_price" class="control-label">Giá từ</label>
                                   <input type="number" min="1" name="min_price" id="min_price" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_price" class="control-label">đến</label>
                                   <input type="number" min="1" name="max_price" id="max_price" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_acreage" class="control-label">Diện tích từ</label>
                                   <input type="number" min="0" name="min_acreage" id="min_acreage" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_acreage" class="control-label">đến</label>
                                   <input type="number" min="0" name="max_acreage" id="max_acreage" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group text-center">
                         <button type="submit" class="btn btn-primary btn-full">Tìm kiếm</button>
                    </div>
               </form>

          </div>
          <div class="tab-pane fade p-3" id="thue" role="tabpanel" aria-labelledby="profile-tab" style="background: #fff">
               <h6 class="text-center font-weight-bold">Cho thuê</h6>
               <form id="form_2" action="#" method="get">
                    <div class="form-group">
                         <label for="select-category" class="control-label">Danh mục</label>
                         <select id="select-category_2" class="form-control">
                              <option value="">Chọn Danh mục</option>
                              @foreach ($categoryList as $categoryItem)
                              @if ($categoryItem->Name === 'Thuê')
                              @foreach ($categoryItem->child as $categoryChildItem)
                              <option data-slug="{{$categoryChildItem->Slug }}" value="{{ $categoryChildItem->CategoryId }}">{{ $categoryChildItem->Name }}</option>
                              @endforeach
                              @endif
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="city_id_2" class="control-label">Tỉnh - Thành phố</label>
                         <select id="city_id_2" class="form-control">
                              <option value="">Chọn Tỉnh / Thành Phố</option>
                              @foreach ($cityList as $cityItem)
                              <option data-slug="{{$cityItem->Slug }}" value="{{ $cityItem->CityId }}">{{ $cityItem->Name }}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="district_id_2" class="control-label">Quận - Huyện</label>
                         <select id="district_id_2" class="form-control">
                              <option value="">Chọn Quận / Huyện</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="area_id_2" class="control-label">Phường - Xã</label>
                         <select id="area_id_2" class="form-control">
                              <option value="">Chọn Phường / Xã</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_price" class="control-label">Giá từ</label>
                                   <input type="number" min="1" name="min_price" id="min_price" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_price" class="control-label">đến</label>
                                   <input type="number" min="1" name="max_price" id="max_price" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_acreage" class="control-label">Diện tích từ</label>
                                   <input type="number" name="min_acreage" id="min_acreage" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_acreage" class="control-label">đến</label>
                                   <input type="number" name="max_acreage" id="max_acreage" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group text-center">
                         <button type="submit" class="btn btn-primary btn-full">Tìm kiếm</button>
                    </div>
               </form>
          </div>
          <div class="tab-pane fade p-3 w-100" id="duan" role="tabpanel" aria-labelledby="contact-tab" style="background: #fff">
               <h6 class="text-center font-weight-bold">Dự Án</h6>
               <form id="form_3" action="#" method="get">
                    <div class="form-group">
                         <label for="city_id_3" class="control-label">Tỉnh - Thành phố</label>
                         <select id="city_id_3" class="form-control">
                              <option value="">Chọn Tỉnh / Thành Phố</option>
                              @foreach ($cityList as $cityItem)
                              <option data-slug="{{$cityItem->Slug }}" value="{{ $cityItem->CityId }}">{{ $cityItem->Name }}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="district_id_3" class="control-label">Quận - huyện</label>
                         <select id="district_id_3" class="form-control">
                              <option value="">Chọn Quận / Huyện</option>
                         </select>
                    </div>
                    <div class="form-group text-center">
                         <button type="submit" class="btn btn-primary btn-full">Tìm kiếm</button>
                    </div>
               </form>
          </div>
     </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
<script src="{{ asset('dist/js/admin/selectAreaAPI.js') }}"></script>
<script src="{{ asset('dist/js/helper/slug.js') }}"></script>

<script>
     let url = document.querySelector('input[base_url]').attributes['base_url'].value;

     let form_1 = document.getElementById('form_1');
     let category_1 = document.getElementById('select-category_1');
     let city_1 = document.getElementById('city_id_1');
     let district_1 = document.getElementById('district_id_1');
     let area_1 = document.getElementById('area_id_1');

     let form_2 = document.getElementById('form_2');
     let category_2 = document.getElementById('select-category_2');
     let city_2 = document.getElementById('city_id_2');
     let district_2 = document.getElementById('district_id_2');
     let area_2 = document.getElementById('area_id_2');

     let form_3 = document.getElementById('form_3');
     let city_3 = document.getElementById('city_id_3');
     let district_3 = document.getElementById('district_id_3');

     let action = {
          action_1: {
               type: 'ban',
               category: 'bat-dong-san',
               city: 'thanh-pho-ho-chi-minh',
               district: '',
               area: ''
          },
          action_2: {
               type: 'thue',
               category: 'bat-dong-san',
               city: 'thanh-pho-ho-chi-minh',
               district: '',
               area: ''
          },
          action_3: {
               type: 'du-an',
               category: '',
               city: 'thanh-pho-ho-chi-minh',
               district: ''
          }
     }

     setActionToForm('form_1', action.action_1, url);
     setActionToForm('form_2', action.action_2, url);
     setActionToForm('form_3', action.action_3, url);

     ////////////////////////////////////// ban

     category_1.addEventListener('change', () => {
          if (!category_1.value) action.action_1.category = 'bat-dong-san';
          else action.action_1.category = category_1.options[category_1.selectedIndex].attributes['data-slug'].value;

          setActionToForm('form_1', action.action_1, url);
     });

     city_1.addEventListener('change', () => {
          district_1.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          area_1.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          if (!city_1.value) action.action_1.city = 'thanh-pho-ho-chi-minh';
          else {
               getDistrictByCity(city_1.value, url,).then(html => district_1.innerHTML = html);

               action.action_1.city = city_1.options[city_1.selectedIndex].attributes['data-slug'].value;
               action.action_1.district = '';
               action.action_1.area = '';
          }

          setActionToForm('form_1', action.action_1, url);
     });

     district_1.addEventListener('change', () => {
          area_1.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          if (!district_1.value) action.action_1.district = '';
          else {
               getAreaByDistrict(district_1.value, url).then(html => area_1.innerHTML = html);

               action.action_1.district = district_1.options[district_1.selectedIndex].attributes['data-slug'].value;
               action.action_1.area = '';
          }

          setActionToForm('form_1', action.action_1, url);
     });

     area_1.addEventListener('change', () => {
          if (!area_1.value) action.action_1.area = '';
          else action.action_1.area = area_1.options[area_1.selectedIndex].attributes['data-slug'].value;

          setActionToForm('form_1', action.action_1, url);
     });

     ////////////////////////////////////// thue

     category_2.addEventListener('change', () => {
          if (!category_2.value) action.action_2.category = 'bat-dong-san';
          else action.action_2.category = category_2.options[category_2.selectedIndex].attributes['data-slug'].value;

          setActionToForm('form_2', action.action_2, url);
     });

     city_2.addEventListener('change', () => {
          district_2.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          area_2.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          if (!city_2.value) action.action_2.city = 'thanh-pho-ho-chi-minh';
          else {
               getDistrictByCity(city_2.value, url,).then(html => district_2.innerHTML = html);

               action.action_2.city = city_2.options[city_2.selectedIndex].attributes['data-slug'].value;
               action.action_2.district = '';
               action.action_2.area = '';
          }

          setActionToForm('form_2', action.action_2, url);
     });

     district_2.addEventListener('change', () => {
          area_2.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          if (!district_2.value) action.action_2.district = '';
          else {
               getAreaByDistrict(district_2.value, url).then(html => area_2.innerHTML = html);

               action.action_2.district = district_2.options[district_2.selectedIndex].attributes['data-slug'].value;
               action.action_2.area = '';
          }

          setActionToForm('form_2', action.action_2, url);
     });

     area_2.addEventListener('change', () => {
          if (!area_2.value) action.action_2.area = '';
          else action.action_2.area = area_2.options[area_2.selectedIndex].attributes['data-slug'].value;

          setActionToForm('form_2', action.action_2, url);
     });

     ////////////////////////////////////// du-an

     city_3.addEventListener('change', () => {
          district_3.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          if (!city_3.value) action.action_3.city = 'thanh-pho-ho-chi-minh';
          else {
               getDistrictByCity(city_3.value, url,).then(html => district_3.innerHTML = html);

               action.action_3.city = city_3.options[city_3.selectedIndex].attributes['data-slug'].value;
               action.action_3.district = '';
          }

          setActionToForm('form_3', action.action_3, url);
     });

     district_3.addEventListener('change', () => {
          if (!district_3.value) action.action_3.district = '';
          else action.action_3.district = district_3.options[district_3.selectedIndex].attributes['data-slug'].value;

          setActionToForm('form_3', action.action_3, url);
     });

     function setActionToForm(idSelector, action, base_url) {
          let form = document.getElementById(idSelector);

          form.action = `${base_url}/${Object.values(action).filter(i => i).join('/')}`;
     }

</script>
