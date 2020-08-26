<form novalidate id="main" action="{{ Request::is('admin/post/add') ? route('adminPostPostAdd') : route('adminPostPutEdit', $data['post_info']->PostId) }}" method="post">
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
                                        <option value="1" {{ $data['post_info']->Status ?? '' === '1' ? 'selected' : '' }}>Đang hoạt động</option>
                                        <option value="-1" {{ $data['post_info']->Status ?? '' === '-1' ? 'selected' : '' }}>Không hoạt động</option>
                                        <option value="0" {{ $data['post_info']->Status ?? '' === '0' ? 'selected' : '' }}>Chờ duyệt</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Type" style="padding-top: 7px;">Loại</label>
                              <div class="w-100">
                                   <select class="form-control" name="Type" id="Type">
                                        <option value="mua" {{ $data['post_info']->Type ?? '' === 'mua' ? 'selected' : '' }}>Mua</option>
                                        <option value="thuê" {{ $data['post_info']->Type ?? '' === 'thuê' ? 'selected' : '' }}>Thuê</option>
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
                              <label class="col-sm-2" for="Price" style="padding-top: 7px;">Giá</label>
                              <div class="w-100">
                                   <input id="Price" class="form-control" type="number" placeholder="Giá" name="Price" value="{{ $data['post_info']->Price ?? old('Price') }}">
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
                              <label class="col-sm-2" for="ProjectId" style="padding-top: 7px;">Dự Án</label>
                              <div class="w-100">
                                   <select class="form-control" name="ProjectId" id="ProjectId">
                                        <option value="0">Không thuộc dự án nào</option>
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
                              <label class="col-sm-2" for="CityId" style="padding-top: 7px;">Thành Phố</label>
                              <div class="w-100">
                                   <select class="form-control" name="CityId" id="CityId">
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
                              <label class="col-sm-2" for="DistrictId" style="padding-top: 7px;">Quận / Huyện</label>
                              <div class="w-100">
                                   <select class="form-control" name="DistrictId" id="DistrictId">
                                        <option value="" aria-readonly="true">Chọn Quận / Huyện</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="AreaId" style="padding-top: 7px;">Phường / Xã</label>
                              <div class="w-100">
                                   <select class="form-control" name="AreaId" id="AreaId">
                                        <option value="" aria-readonly="true">Chọn Phường / Xã</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="StreetId" style="padding-top: 7px;">Đường</label>
                              <div class="w-100">
                                   <select class="form-control" name="StreetId" id="StreetId">
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
                              <label class="col-sm-2" for="Bedroom" style="padding-top: 7px;">Số Phòng Ngủ</label>
                              <div class="w-100">
                                   <input id="Bedroom" class="form-control" type="number" placeholder="Số Phòng Ngủ" name="Bedroom" value="{{ $data['post_info']->Bedroom ?? old('Bedroom') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Bathroom" style="padding-top: 7px;">Số Phòng Tắm</label>
                              <div class="w-100">
                                   <input id="Bathroom" class="form-control" type="number" placeholder="Số Phòng Tắm" name="Bathroom" value="{{ $data['post_info']->Bathroom ?? old('Bathroom') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Floor" style="padding-top: 7px;">Số Tầng</label>
                              <div class="w-100">
                                   <input id="Floor" class="form-control" type="number" placeholder="Số Tầng" name="Floor" value="{{ $data['post_info']->Floor ?? old('Floor') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Length" style="padding-top: 7px;">Chiều Dài</label>
                              <div class="w-100">
                                   <input id="Length" class="form-control" type="number" placeholder="Chiều Dài" name="Length" value="{{ $data['post_info']->Length ?? old('Length') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Width" style="padding-top: 7px;">Chiều Rộng</label>
                              <div class="w-100">
                                   <input id="Width" class="form-control" type="number" placeholder="Chiều Rộng" name="Width" value="{{ $data['post_info']->Width ?? old('Width') }}">
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
     let title = document.getElementById('Title');
     let slug = document.getElementById('Slug');
     slug.value = convertToSlug(title.value);
     title.addEventListener('input', () => slug.value = convertToSlug(title.value));

     // var validateConstraints = {
     //      Name: {
     //           presence: {
     //                allowEmpty: false,
     //                message: "^Tên danh mục Không được để trống!"
     //           }
     //      },
     //      Slug: {
     //           presence: {
     //                allowEmpty: false,
     //                message: "^Slug Không được để trống!"
     //           }
     //      },
     // };

     // validateData('form#main', validateConstraints);
</script>
