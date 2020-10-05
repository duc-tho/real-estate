<form enctype="multipart/form-data" id="main" action="{{ Request::is('admin/post/add') ? route('adminPostPostAdd') : route('adminPostPutEdit', $data['post_info']->PostId) }}" method="post">
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
               <a href="{{ route('adminPost') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
          </div>
          <div class="card-body">
               @empty(!session('errMsg'))
               <div class="alert alert-warning" role="alert">
                    {{ session('errMsg') }}
               </div>
               @endempty
               <ul class="nav nav-tabs">
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#basicInfo">Thông tin cơ bản</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#detailInfo">Thông tin chi tiết</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#descriptionInfo">Tiện Ích - Mô tả</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#imageInfo">Ảnh</a>
                    </li>
               </ul>

               <div class="tab-content">
                    <div class="tab-pane active container" id="basicInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="Status" style="padding-top: 7px;">Trạng Thái</label>
                              <div class="w-100">
                                   <select class="form-control" name="Status" id="Status">
                                        <option value="1" {{ ($data['post_info']->Status ?? '') === 1 ? 'selected' : '' }}>Đang
                                             hoạt động</option>
                                        <option value="-1" {{ ($data['post_info']->Status ?? '') === -1 ? 'selected' : '' }}>
                                             Không hoạt động</option>
                                        <option value="0" {{ ($data['post_info']->Status ?? '') === 0 ? 'selected' : '' }}>Chờ
                                             duyệt</option>
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Type" style="padding-top: 7px;">Loại</label>
                              <div class="w-100">
                                   <select class="form-control" name="Type" id="Type">
                                        <option value="" aria-readonly="true">Chọn Loại Bất Động Sản</option>
                                        <option value="bán" {{ ($data['post_info']->Type ?? '') === 'bán' ? 'selected' : '' }}>
                                             Bán</option>
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
                                   <input id="Slug" class="form-control" type="text" placeholder="Slug" name="Slug" value="{{ old('Slug') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Price" style="padding-top: 7px;">Giá</label>
                              <div class="w-100 input-group">
                                   <input id="Price" min="1" class="form-control" type="number" step="0.01" placeholder="Giá" name="Price" value="{{ $data['post_info']->Price ?? old('Price') }}">
                                   <div class="input-group-append">
                                        <select id="PriceUnit" name="PriceUnit" class="form-control input-group-text">
                                             <option value="Tỷ" {{ ($data['post_info']->PriceUnit ?? '') === 'Tỷ' ? 'selected' : '' }}>Tỷ</option>
                                             <option value="Triệu" {{ ($data['post_info']->PriceUnit ?? '') === 'Triệu' ? 'selected' : '' }}>Triệu</option>
                                        </select>
                                   </div>
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
                                        <option value="{{ $item->CategoryId }}" {{ $item->CategoryId === ($data['post_info']->CategoryId ?? '') ? 'selected' : '' }}>
                                             {{ $item->Name }}</option>
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
                                        <option value="{{ $item->ProjectId }}" {{ $item->ProjectId === ($data['post_info']->ProjectId ?? '') ? 'selected' : '' }}>
                                             {{ $item->Title }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>

                         <div id="locationChoose" class="{{ ($data['post_info']->ProjectId ?? '') !== '' ? 'd-none' : '' }}">
                              <div class="form-group">
                                   <label class="col-sm-2" for="City" style="padding-top: 7px;">Thành Phố</label>
                                   <div class="w-100">
                                        <select class="form-control" name="CityId" id="City">
                                             <option value="" aria-readonly="true">Chọn Thành Phố</option>
                                             @isset($data['city_list'])
                                             @foreach ($data['city_list'] as $item)
                                             <option value="{{ $item->CityId }}" {{ $item->CityId === ($data['post_info']->CityId ?? '') && ($data['post_info']->ProjectId ?? '') === '' ? 'selected' : '' }}>
                                                  {{ $item->Name }}</option>
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
                                             @if (($data['post_info']->ProjectId ?? '') === '')
                                             @isset($data['district_list'])
                                             @foreach ($data['district_list'] as $item)
                                             <option value="{{ $item->DistrictId }}" {{ $item->DistrictId === ($data['post_info']->DistrictId ?? '') ? 'selected' : '' }}>
                                                  {{ $item->Name }}</option>
                                             @endforeach
                                             @endisset
                                             @endif
                                        </select>
                                   </div>
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                              <div class="form-group">
                                   <label class="col-sm-2" for="Area" style="padding-top: 7px;">Phường / Xã</label>
                                   <div class="w-100">
                                        <select class="form-control" name="AreaId" id="Area">
                                             <option value="" aria-readonly="true">Chọn Phường / Xã</option>
                                             @if (($data['post_info']->ProjectId ?? '') === '')
                                             @isset($data['area_list'])
                                             @foreach ($data['area_list'] as $item)
                                             <option value="{{ $item->AreaId }}" {{ $item->AreaId === ($data['post_info']->AreaId ?? '') ? 'selected' : '' }}>
                                                  {{ $item->Name }}</option>
                                             @endforeach
                                             @endisset
                                             @endif
                                        </select>
                                   </div>
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                              <div class="form-group">
                                   <label class="col-sm-2" for="Street" style="padding-top: 7px;">Đường</label>
                                   <div class="w-100">
                                        <select class="form-control" name="StreetId" id="Street">
                                             <option value="" aria-readonly="true">Chọn Đường</option>
                                             @if (($data['post_info']->ProjectId ?? '') === '')
                                             @isset($data['street_list'])
                                             @foreach ($data['street_list'] as $item)
                                             <option value="{{ $item->StreetId }}" {{ $item->StreetId === ($data['post_info']->StreetId ?? '') ? 'selected' : '' }}>
                                                  {{ $item->Name }}</option>
                                             @endforeach
                                             @endisset
                                             @endif
                                        </select>
                                   </div>
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                    </div>

                    <div class="tab-pane container" id="detailInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="Apartmentnumber" step="0.01" style="padding-top: 7px;">Số
                                   Nhà</label>
                              <div class="w-100">
                                   <input id="Apartmentnumber" step="0.01" class="form-control" type="text" placeholder="Số Nhà" name="ApartmentNumber" step="0.01" value="{{ $data['post_info']->ApartmentNumber ?? old('ApartmentNumber') }}">
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
                                   <input id="Bedroom" min="0" class="form-control" type="number" step="0.01" placeholder="Số Phòng Ngủ" name="Bedroom" value="{{ $data['post_info']->Bedroom ?? old('Bedroom') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Bathroom" style="padding-top: 7px;">Số Phòng Tắm</label>
                              <div class="w-100">
                                   <input id="Bathroom" min="0" class="form-control" type="number" step="0.01" placeholder="Số Phòng Tắm" name="Bathroom" value="{{ $data['post_info']->Bathroom ?? old('Bathroom') }}">
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
                                   <input id="Length" min="0" class="form-control" type="number" step="0.01" placeholder="Chiều Dài" name="Length" value="{{ $data['post_info']->Length ?? old('Length') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Width" style="padding-top: 7px;">Chiều Rộng</label>
                              <div class="w-100">
                                   <input id="Width" min="0" class="form-control" type="number" step="0.01" placeholder="Chiều Rộng" name="Width" value="{{ $data['post_info']->Width ?? old('Width') }}">
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="descriptionInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="Utility" style="padding-top: 7px;">Tiện ích</label>
                              <input type="hidden" name="Utility" id="Utility" value="{{ $data['post_info']->Utility ?? old('Utility') }}">
                              <div class="row" id="UtilityList">
                                   <button type="button" class="btn ml-2 btn-info my-auto" id="UtilityAddBtn" style="height: max-content;"><i class="far fa-plus-square"></i></button>
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Description" style="padding-top: 7px;">Mô tả</label>
                              <div class="md-form">
                                   <textarea id="Description" name="Description" class="md-textarea form-control" rows="10">{{ $data['post_info']->Description ?? old('Description') }}</textarea>
                              </div>
                              <div class=" col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="imageInfo">
                         <div class="card text-center mt-4">
                              <div class="card-header bg-info">
                                   Chọn ảnh để tải lên!
                              </div>
                              <div class="card-body">
                                   <div class="input-group mb-3">
                                        <div class="custom-file">
                                             <input multiple type="file" name="Image[]" class="custom-file-input" id="inputImageFile">
                                             <label class="custom-file-label" for="inputImageFile" style="white-space: nowrap; overflow: hidden;">Bấm vào để chọn ảnh</label>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-md-12 d-flex flex-wrap" id="imageImputList"></div>
                                   </div>
                              </div>
                              <div class="card-footer text-muted" id="inputImageCount">
                                   Chưa chọn ảnh nào!
                              </div>
                         </div>
                         <div class="card text-center mt-4">
                              <div class="card-header bg-success">
                                   Danh sách ảnh của bất dộng sản này
                              </div>
                              <div class="card-body">
                                   <div class="row" id="imageList">
                                        @isset($data['post_info'])
                                        @foreach(json_decode($data['post_info']->Image ?? '[]', true)[0]['imgList'] ?? [] as $key => $image)
                                        @if (!empty($image))
                                        <figure class="col-md-3 border rounded">
                                             <div class="w-100" style="height: 300px; position: relative;">
                                                  <img alt="picture" src="{{ asset($image) }}" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; margin: auto; max-height: 100%; max-width: 100%" />
                                                  
                                                       <a onclick="return confirm('Bạn có chắc chắn muốn xóa ảnh này !')" href="{{asset('admin/post/edit/deleteimg/'.$item->PostId)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a> 
                                                  
                                                 
                                             </div>
                                        </figure>
                                        @endif
                                        @endforeach
                                        @endisset
                                   </div>
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
     let project = document.getElementById('Project');
     let locationChoose = document.getElementById('locationChoose');
     let city = document.getElementById('City');
     let district = document.getElementById('District');
     let area = document.getElementById('Area');
     let street = document.getElementById('Street');

     slug.value = convertToSlug(title.value);
     title.addEventListener('input', () => slug.value = convertToSlug(title.value));

     project.addEventListener('change', () => {
          street.innerHTML = '<option value="" aria-readonly="true">Chọn Đường</option>';
          area.innerHTML = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>';
          district.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          city.selectedIndex = 0;

          if (project.value) locationChoose.classList.add('d-none');
          else locationChoose.classList.remove('d-none');
     });

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

     /* --- CKEditor --- */

     CKEDITOR.config.filebrowserImageUploadUrl = "{!! route('uploadCKEditor').'?_token='.csrf_token() !!}";
     CKEDITOR.config.filebrowserUploadMethod = 'form';
     CKEDITOR.replace('Description', { height: '80vh' });

     let descriptionEditor = CKEDITOR.instances.Description;

     descriptionEditor.on('change', function () {
          $('#Description').text(this.getData());
     });

     /* --- Utility --- */

     $("#UtilityAddBtn").click(() => {
          let html = `<div class="col-md-3">
               <input data="UtilityItem" type="text" class="form-control my-2" oninput="UtilityItemChange()">
          </div>`;
          $(html).insertBefore('#UtilityAddBtn');
     });

     if ($('#Utility').val()) showUtilityItem($('#Utility').val());

     function showUtilityItem(list) {
          if (list) {
               JSON.parse(list).forEach(item => {
                    let html = `<div class="col-md-3">
                         <input data="UtilityItem" type="text" class="form-control my-2" oninput="UtilityItemChange()" value="${item}">
                    </div>`;
                    $(html).insertBefore('#UtilityAddBtn');
               })
          }
     }

     function UtilityItemChange() {
          let listItem = [];

          document.querySelectorAll('input[data="UtilityItem"]').forEach(item => {
               if (item.value) listItem.push(item.value);
          });

          $('#Utility').val(JSON.stringify(listItem));
     }

     /** Image */

     $("#inputImageFile").change(function () {
          loadPreviewFile(this);
     });

     let loadPreviewFile = (input) => {
          $preview = $('#imageImputList').empty();

          if (input.files) {
               if (input.files.length === 0) {
                    $('#inputImageCount').text('Chưa chọn ảnh nào!');
               } else {
                    $('#inputImageCount').text(`Đã chọn ${input.files.length} ảnh! Bấm lưu dể lưu thay đổi!`);

               }


               [...input.files].forEach(file => {
                    let reader = new FileReader();

                    reader.onloadend = (event) => {
                         let html = `<figure class="col-md-4">
                                   <div class="w-100" style="height: 300px; position: relative;">
                                        <img alt="picture" src="${reader.result}" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; margin: auto; max-height: 100%; max-width: 100%">
                                   </div>
                              </figure>`;

                         $preview.append($.parseHTML(html))
                    }

                    reader.readAsDataURL(file);
               });

          }
     };

     var validateConstraints = {
          Title: {
               presence: {
                    allowEmpty: false,
                    message: "^Tiêu đề Bất động sản Không được để trống!"
               }
          },
          DistrictId: (value) => {
               if (!project.value) {
                    if (!value) return {
                         presence: {
                              allowEmpty: false,
                              message: "^Bạn chưa chọn Quận Huyện!"
                         }
                    }
               }
          },
          CityId: (value) => {
               if (!project.value) {
                    if (!value) return {
                         presence: {
                              allowEmpty: false,
                              message: "^Bạn chưa chọn Thành Phố"
                         }
                    }
               }
          },
          AreaId: (value) => {
               if (!project.value) {
                    if (!value) return {
                         presence: {
                              allowEmpty: false,
                              message: "^Bạn chưa chọn Phường / Xã!"
                         }
                    }
               }
          },
          StreetId: (value) => {
               if (!project.value) {
                    if (!value) return {
                         presence: {
                              allowEmpty: false,
                              message: "^Bạn chưa chọn Đường!"
                         }
                    }
               }
          },
          Price: {
               presence: {
                    allowEmpty: false,
                    message: "^Giá không dược để trống!"
               },
               numericality: {
                    greaterThanOrEqualTo: 1,
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
               presence: {
                    allowEmpty: false,
                    message: "^Chiều rộng không dược để trống!"
               },
               numericality: {
                    greaterThanOrEqualTo: 1,
                    message: "^Chiều dài phải lớn hơn hoặc bằng 0!"
               }
          },
          Width: {
               presence: {
                    allowEmpty: false,
                    message: "^Chiều dài không dược để trống!"
               },
               numericality: {
                    greaterThanOrEqualTo: 1,
                    message: "^Chiều rộng phải lớn hơn hoặc bằng 0!"
               }
          },
     };

     validateData('form#main', validateConstraints);

</script>
