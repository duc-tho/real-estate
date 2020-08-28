<form novalidate id="main" action="{{ Request::is('admin/post/add') ? route('adminPostPostAdd') : route('adminPostPutEdit', $data['post_info']->PostId) }}" method="post">
     <input type="hidden" base_url="{{ URL::to('/') }}">

     @csrf

     @if (Request::is('admin/post/add'))
     @method('POST')
     @else
     @method('PUT')
     @endif

     <div class="card">
          <div class="card-header">
               <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
               <a href="{{route('adminPost')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
          </div>
          <div class="card-body">
               <ul class="nav nav-tabs">
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#basicInfo">Thông tin cơ bản</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#detailInfo">Thông tin chi tiết</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#descriptionInfo">Mô tả</a>
                    </li>
               </ul>

               <div class="tab-content">
                    <div class="tab-pane active container" id="basicInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="Status" style="padding-top: 7px;">Trạng Thái</label>
                              <div class="w-100">
                                   <select class="form-control" name="Status" id="Status">
                                        <option value="1" {{ ($data['post_info']->Status ?? '') === '1' ? 'selected' : '' }}>Đang hoạt động</option>
                                        <option value="-1" {{ ($data['post_info']->Status ?? '') === '-1' ? 'selected' : '' }}>Không hoạt động</option>
                                        <option value="0" {{ ($data['post_info']->Status ?? '') === '0' ? 'selected' : '' }}>Chờ duyệt</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Type" style="padding-top: 7px;">Loại</label>
                              <div class="w-100">
                                   <select class="form-control" name="Type" id="Type">
                                        <option value="" aria-readonly="true">Chọn Loại Bất Động Sản</option>
                                        <option value="mua" {{ ($data['post_info']->Type ?? '') === 'mua' ? 'selected' : '' }}>Mua</option>
                                        <option value="thuê" {{ ($data['post_info']->Type ?? '') === 'thuê' ? 'selected' : '' }}>Thuê</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Title" style="padding-top: 7px;">Tiêu Đề</label>
                              <div class="w-100">
                                   <input id="Title" class="form-control" type="text" placeholder="Tiêu đề" name="Title" value="{{ $data['post_info']->Title ?? old('Title') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                              <div class="w-100">
                                   <input id="Slug" class="form-control" type="text" placeholder="Slug" name="Slug" value="{{ old('Slug') }}" readonly>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Price" style="padding-top: 7px;">Giá</label>
                              <div class="w-100">
                                   <input id="Price" class="form-control" type="number" placeholder="Giá" name="Price" value="{{ $data['post_info']->Price ?? old('Price') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="CategoryId" style="padding-top: 7px;">Danh Mục</label>
                              <div class="w-100">
                                   <select class="form-control" name="CategoryId" id="Category">
                                        <option value="">Chọn Danh Mục</option>
                                        @isset($data['category_list'])
                                        @foreach ($data['category_list'] as $item)
                                        <option value="{{ $item->CategoryId }}" {{ $item->CategoryId === ($data['post_info']->CategoryId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="ProjectId" style="padding-top: 7px;">Dự Án</label>
                              <div class="w-100">
                                   <select class="form-control" name="ProjectId" id="Project">
                                        <option value="">Không thuộc dự án nào</option>
                                        @isset($data['project_list'])
                                        @foreach ($data['project_list'] as $item)
                                        <option value="{{ $item->ProjectId }}" {{ $item->ProjectId === ($data['post_info']->ProjectId ?? '') ? 'selected' : '' }}>{{ $item->Title }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="City" style="padding-top: 7px;">Thành Phố</label>
                              <div class="w-100">
                                   <select class="form-control" name="CityId" id="City">
                                        <option value="" aria-readonly="true">Chọn Thành Phố</option>
                                        @isset($data['city_list'])
                                        @foreach ($data['city_list'] as $item)
                                        <option value="{{ $item->CityId }}" {{ $item->CityId === ($data['post_info']->CityId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="District" style="padding-top: 7px;">Quận / Huyện</label>
                              <div class="w-100">
                                   <select class="form-control" name="DistrictId" id="District">
                                        <option value="" aria-readonly="true">Chọn Quận / Huyện</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Area" style="padding-top: 7px;">Phường / Xã</label>
                              <div class="w-100">
                                   <select class="form-control" name="AreaId" id="Area">
                                        <option value="" aria-readonly="true">Chọn Phường / Xã</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Street" style="padding-top: 7px;">Đường</label>
                              <div class="w-100">
                                   <select class="form-control" name="StreetId" id="Street">
                                        <option value="" aria-readonly="true">Chọn Đường</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="detailInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="ApartmentNumber" style="padding-top: 7px;">Số Nhà</label>
                              <div class="w-100">
                                   <input id="ApartmentNumber" class="form-control" type="text" placeholder="Số Nhà" name="ApartmentNumber" value="{{ $data['post_info']->ApartmentNumber ?? old('ApartmentNumber') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Direction" style="padding-top: 7px;">Hướng</label>
                              <div class="w-100">
                                   <select class="form-control" name="Direction" id="Direction">
                                        <option value="" aria-readonly="true">Chọn Hướng</option>
                                        <option value="Đông">Đông</option>
                                        <option value="Tây">Tây</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Bắc">Bắc</option>
                                        <option value="Đông Nam">Đông Nam</option>
                                        <option value="Đông Bắc">Đông Bắc</option>
                                        <option value="Tây Nam">Tây Nam</option>
                                        <option value="Tây Bắc">Tây Bắc</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Bedroom" style="padding-top: 7px;">Số Phòng Ngủ</label>
                              <div class="w-100">
                                   <input id="Bedroom" min="0" class="form-control" type="number" placeholder="Số Phòng Ngủ" name="Bedroom" value="{{ $data['post_info']->Bedroom ?? old('Bedroom') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Bathroom" style="padding-top: 7px;">Số Phòng Tắm</label>
                              <div class="w-100">
                                   <input id="Bathroom" min="0" class="form-control" type="number" placeholder="Số Phòng Tắm" name="Bathroom" value="{{ $data['post_info']->Bathroom ?? old('Bathroom') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Floor" style="padding-top: 7px;">Số Tầng</label>
                              <div class="w-100">
                                   <input id="Floor" class="form-control" type="text" placeholder="1 tầng hầm 2 lầu ...." name="Floor" value="{{ $data['post_info']->Floor ?? old('Floor') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Length" style="padding-top: 7px;">Chiều Dài</label>
                              <div class="w-100">
                                   <input id="Length" min="0" class="form-control" type="number" placeholder="Chiều Dài" name="Length" value="{{ $data['post_info']->Length ?? old('Length') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Width" style="padding-top: 7px;">Chiều Rộng</label>
                              <div class="w-100">
                                   <input id="Width" min="0" class="form-control" type="number" placeholder="Chiều Rộng" name="Width" value="{{ $data['post_info']->Width ?? old('Width') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="descriptionInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="Description" style="padding-top: 7px;">Mô tả</label>
                              <div class="w-100">
                                   <input id="Description" class="form-control" type="text" placeholder="Mô tả" name="Description" value="{{ $data['post_info']->Description ?? old('Description') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</form>

<script>
     let url = document.querySelector('input[base_url]').attributes['base_url'].value;
     let title = document.getElementById('Title');
     let slug = document.getElementById('Slug');
     let city = document.getElementById('City');
     let district = document.getElementById('District');
     let area = document.getElementById('Area');
     let street = document.getElementById('Street');

     slug.value = convertToSlug(title.value);
     title.addEventListener('input', () => slug.value = convertToSlug(title.value));

     if (city.value) getDistrictByCity(city.value, url).then(html => district.innerHTML = html);
     if (district.value) getAreaByDistrict(district.value, url).then(html => area.innerHTML = html);
     if (area.value) getStreetByArea(area.value, url).then(html => street.innerHTML = html);

     city.addEventListener('change', () => {
          district.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          area.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          street.innerHTML = '<option value="" aria-readonly="true">Chọn Đường</option>';
          if (!city.value) return;
          getDistrictByCity(city.value, url).then(html => district.innerHTML = html);
     });

     district.addEventListener('change', () => {
          area.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          street.innerHTML = '<option value="" aria-readonly="true">Chọn Đường</option>';
          if (!district.value) return;
          getAreaByDistrict(district.value, url).then(html => area.innerHTML = html);
     });

     area.addEventListener('change', () => {
          street.innerHTML = '<option value="" aria-readonly="true">Chọn Đường</option>';
          if (!area.value) return;
          getStreetByArea(area.value, url).then(html => street.innerHTML = html);
     });

     var validateConstraints = {
          Title: {
               presence: {
                    allowEmpty: false,
                    message: "^Tiêu đề Bất động sản Không được để trống!"
               }
          },
          DistrictId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Quận / Huyện!"
               },
          },
          StreetId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Đường!"
               },
          },
          CityId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Thành phố!"
               },
          },
          AreaId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Phường / Xã!"
               },
          },
          Price: {
               presence: {
                    allowEmpty: false,
                    message: "^Giá không dược để trống!"
               },
               numericality: {
                    greaterThanOrEqualTo: 0,
                    message: "^Giá phải lớn hơn hoặc bằng 0!"
               }
          },
          Type: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn loại bất động sản!"
               },
          },
          Slug: {
               presence: {
                    allowEmpty: false,
                    message: "^Slug Không được để trống!"
               }
          },
          Status: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn trạng thái!"
               }
          },
          ApartmentNumber: {
               presence: {
                    allowEmpty: false,
                    message: "^Số nhà Không được để trống!"
               },
          },
          Floor: {
               presence: {
                    allowEmpty: false,
                    message: "^Số tầng Không được để trống!"
               },
          },
          Bedroom: {
               numericality: {
                    greaterThanOrEqualTo: 0,
                    message: "^Số phòng ngủ phải lớn hơn hoặc bằng 0!"
               }
          },
          Bathroom: {
               numericality: {
                    greaterThanOrEqualTo: 0,
                    message: "^Số phòng tắm phải lớn hơn hoặc bằng 0!"
               }
          },
          Length: {
               numericality: {
                    greaterThanOrEqualTo: 0,
                    message: "^Chiều dài phải lớn hơn hoặc bằng 0!"
               }
          },
          Width: {
               numericality: {
                    greaterThanOrEqualTo: 0,
                    message: "^Chiều rộng phải lớn hơn hoặc bằng 0!"
               }
          },
     };

     validateData('form#main', validateConstraints);
</script>
