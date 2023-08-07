<form enctype="multipart/form-data" id="main" action="{{ Request::is('admin/project/add') ? route('adminProjectPostAdd') : route('adminProjectPutEdit', $data['project_info']->ProjectId) }}" method="post">
     @csrf

     @if (Request::is('admin/project/add'))
     @method('POST')
     @else
     @method('PUT')
     @endif

     <input type="hidden" base_url="{{ URL::to('/') }}">

     <div class="card">
          <div class="card-header">
               <input class="btn btn-success" type="submit" value="Lưu">
               <a href="{{ route('adminProject') }}" class="btn btn-danger">Hủy bỏ</a>
          </div>
          <div class="card-body">
               <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#basicInfo">Thông tin cơ bản</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#detailInfo">Thông tin chi tiết</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#vtht">Vị Trí Hạ Tầng</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#tkmb">Thiết Kế - Mặt Bằng</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#tikm">Tiện Ích - Khuyến Mãi</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#imageInfo">Ảnh</a>
                    </li>
               </ul>


               <div class="tab-content">
                    @include('errors.note')

                    <div class="tab-pane active container" id="basicInfo">

                         <div class="form-group">
                              <label class="col-sm-2k" for="Status" style="padding-top: 7px;">Trạng Thái</label>
                              <select class="form-control" name="Status" id="Status">
                                   <option value="1" {{ ($data['project_info']->Status ?? '') === 1 ? 'selected' : '' }}>
                                        Đang hoạt động</option>
                                   <option value="-1" {{ ($data['project_info']->Status ?? '') === -1 ? 'selected' : '' }}>
                                        Không hoạt động</option>
                                   <option value="0" {{ ($data['project_info']->Status ?? '') === 0 ? 'selected' : '' }}>
                                        Chờ duyệt</option>
                              </select>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2k" for="Progress" style="padding-top: 7px;">Tiến Độ</label>
                              <select class="form-control" name="Progress" id="Progress">
                                   <option value="" selected>
                                        Chọn Trạng Thái</option>
                                   <option value="1" {{ ($data['project_info']->Progress ?? '') === 1 ? 'selected' : '' }}>
                                        Đang mở bán</option>
                                   <option value="0" {{ ($data['project_info']->Progress ?? '') === 0 ? 'selected' : '' }}>
                                        Sắp mở bán</option>
                              </select>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Tên Dự Án</label>
                              <div class="w-100">
                                   <input id="title" class="form-control" type="text" placeholder="Tên Dự Án" name="Title" value="{{ $data['project_info']->Title ?? old('Title') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                              <div class="w-100">
                                   <input id="slug" class="form-control" type="text" placeholder="" name="Slug" value="{{ old('Slug') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Chủ Đầu Tư</label>
                              <div class="w-100">
                                   <input id="investor" class="form-control" type="text" placeholder="Chủ Đầu Tư" name="Investor" value="{{ $data['project_info']->Investor ?? old('Investor') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Năm Xây Dựng</label>
                              <div class="w-100">
                                   <input id="year" class="form-control" type="text" placeholder="Năm Xây Dựng" name="YearBuilt" value="{{ $data['project_info']->YearBuilt ?? old('YearBuilt') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Giá</label>
                              <div class="w-100">
                                   <input id="price" class="form-control" type="text" placeholder="Giá" name="Price" value="{{ $data['project_info']->Price ?? old('Price  ') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Địa Chỉ</label>
                              <div class="w-100">
                                   <input id="location" class="form-control" type="text" placeholder="Địa Chỉ" name="Location" value="{{ $data['project_info']->Location ?? old('Location') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="City" style="padding-top: 7px;">Thành Phố</label>
                              <div class="w-100">
                                   <select class="form-control" name="CityId" id="City">
                                        <option value="" aria-readonly="true">Chọn Thành Phố</option>
                                        @isset($data['city_list'])
                                        @foreach ($data['city_list'] as $item)
                                        <option value="{{ $item->CityId }}" {{ $item->CityId === ($data['project_info']->CityId ?? '') ? 'selected' : '' }}>
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
                                        @isset($data['district_list'])
                                        @foreach ($data['district_list'] as $item)
                                        <option value="{{ $item->DistrictId }}" {{ $item->DistrictId === ($data['project_info']->DistrictId ?? '') ? 'selected' : '' }}>
                                             {{ $item->Name }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Area" style="padding-top: 7px;">Phường / Xã</label>
                              <div class="w-100">
                                   <select class="form-control" name="AreaId" id="Area">
                                        <option value="" aria-readonly="true">Chọn Phường / Xã</option>
                                        @isset($data['area_list'])
                                        @foreach ($data['area_list'] as $item)
                                        <option value="{{ $item->AreaId }}" {{ $item->AreaId === ($data['project_info']->AreaId ?? '') ? 'selected' : '' }}>
                                             {{ $item->Name }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Street" style="padding-top: 7px;">Đường</label>
                              <div class="w-100">
                                   <select class="form-control" name="StreetId" id="Street">
                                        <option value="" aria-readonly="true">Chọn Đường</option>
                                        @isset($data['street_list'])
                                        @foreach ($data['street_list'] as $item)
                                        <option value="{{ $item->StreetId }}" {{ $item->StreetId === ($data['project_info']->StreetId ?? '') ? 'selected' : '' }}>
                                             {{ $item->Name }}</option>
                                        @endforeach
                                        @endisset
                                   </select>
                              </div>
                              <div class="col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="detailInfo">
                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Block</label>
                              <div class="w-100">
                                   <input id="block" class="form-control" type="number" placeholder="Số Block" name="NumberOfBlock" value="{{ $data['project_info']->NumberOfBlock ?? old('NumberOfBlock') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Tầng</label>
                              <div class="w-100">
                                   <input id="floor" class="form-control" type="number" placeholder="Số Floor" name="NumberOfFloor" value="{{ $data['project_info']->NumberOfFloor ?? old('NumberOfFloor') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Căn Hộ</label>

                              <div class="w-100">
                                   <input id="apartment" class="form-control" type="number" placeholder="Số Căn Hộ" name="NumberOfApartment" value="{{ $data['project_info']->NumberOfApartment ?? old('NumberOfApartment') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="city" style="padding-top: 7px;">Diện tích căn hộ</label>
                              <div class="w-100">
                                   <input id="apartment" class="form-control" type="number" step="0.01" placeholder="Diện tích căn hộ" name="AreaApartment" value="{{ $data['project_info']->AreaApartment ?? old('AreaApartment') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 7px.r;">Tổng Diện Tích</label>
                              <div class="w-100">
                                   <input id="totalarea" class="form-control" type="number" step="0.01" placeholder="Tổng Diện Tích" name="TotalArea" value="{{ $data['project_info']->TotalArea ?? old('TotalArea') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2" for="name" style="padding-top: 1px.r;">Mật độ xây dựng</label>
                              <div class="w-100">
                                   <input id="density" class="form-control" type="number" step="0.1" placeholder="Mật độ" name="BuildingDensity" value="{{ $data['project_info']->BuildingDensity ?? old('BuildingDensity') }}">
                                   <div class="col-lg-12 messages text-danger"></div>
                              </div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="vtht">
                         <div class="form-group">
                              <div class="md-form">
                                   <textarea id="InfrastructureLocation" name="InfrastructureLocation" class="md-textarea form-control" rows="20">{{ $data['project_info']->InfrastructureLocation ?? old('InfrastructureLocation') }}</textarea>
                              </div>
                              <div class=" col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="tkmb">
                         <div class="form-group">
                              <div class="md-form">
                                   <textarea id="GroundDesign" name="GroundDesign" class="md-textarea form-control" rows="20">{{ $data['project_info']->GroundDesign ?? old('GroundDesign') }}</textarea>
                              </div>
                              <div class=" col-lg-12 messages text-danger"></div>
                         </div>
                    </div>

                    <div class="tab-pane container" id="tikm">
                         <div class="form-group">
                              <label class="col-sm-2" for="Utility" style="padding-top: 7px;">Tiện ích</label>
                              <input type="hidden" name="Utility" id="Utility" value="{{ $data['project_info']->Utility ?? old('Utility') }}">
                              <div class="row" id="UtilityList">
                                   <button type="button" class="btn ml-2 btn-info my-auto" id="UtilityAddBtn" style="height: max-content;"><i class="far fa-plus-square"></i></button>
                              </div>
                         </div>
                         <div class=" col-lg-12 messages text-danger"></div>
                         <div class="form-group">
                              <label class="col-sm-2" for="Promotion" style="padding-top: 7px;">Khuyến Mãi</label>
                              <div class="md-form">
                                   <textarea id="Promotion" name="Promotion" class="md-textarea form-control" rows="20">{{ $data['project_info']->Promotion ?? old('Promotion') }}</textarea>
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
                              <div class="card-header bg-info">
                                   Tạo nhóm ảnh
                              </div>
                              <div class="card-body">
                                   <div class="input-group mb-3">
                                        <div id="image-group-area" class="custom-file" style=" display: flex; flex-wrap: inherit; height: fit-content;">
                                             <input type="hidden" name="ImageGroup" class="custom-file-input" id="ImageGroup">
                                             <button type="button" class="btn ml-2 btn-info my-auto" id="ImageGroupAddBtn" style="height: max-content;"><i class="far fa-plus-square"></i></button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12 d-flex flex-wrap" id="imageList"></div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
</form>


<script>
     let url = document.querySelector('input[base_url]').attributes['base_url'].value;
     let city = document.getElementById('City');
     let district = document.getElementById('District');
     let area = document.getElementById('Area');
     let street = document.getElementById('Street');
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

     /* --- Image Group, Select --- */

     let groupList = JSON.parse(`{!! $data['project_info']->Image ?? "[]" !!}`);
     let imageGroupArea = $("#image-group-area");

     let resetImageGroupArea = () => {
          let deleteItem = imageGroupArea.find("div.col-md-3");

          deleteItem.each(function (index, item) {
               $(item).remove();
          });
     }

     let loadGroup = () => {
          if (groupList.length) {
               if (!groupList[0].id.startsWith('GroupItem-')) groupList.shift();

               groupList.forEach(item => {
                    let html = `<div class="col-md-3">
                         <div class="input-group">
                              <input data="${item.id}" type="text" class="form-control my-2" placeholder="Tên Nhóm" value="${item.name}">
                              <div class="input-group-append my-2">
                                   <a href="javascript:void(0)" class="btn btn-danger"><i class="fas fa-times"></i></a>
                              </div>
                         </div>
                    </div>`;

                    let elemt = $(html);
                    setEventForImageGroup(elemt);
               });
          } else {
               loadGroupListToSelect();
          }
     }

     $("#ImageGroupAddBtn").click(function () {
          if ($('input[data^="GroupItem-"]').length)
               if (!$('input[data^="GroupItem-"]')[$('input[data^="GroupItem-"]').length - 1].value)
                    return alert('Vui lòng điền tên nhóm trước khi tạo thêm nhóm mới!');

          groupList.push({
               id: `GroupItem-${++$('input[data^="GroupItem-"]').length}`,
               name: '',
               imgList: []
          });

          let html = `<div class="col-md-3">
                    <div class="input-group">
                         <input data="GroupItem-${++$('input[data^="GroupItem"]').length}" type="text" class="form-control my-2" placeholder="Tên Nhóm">
                         <div class="input-group-append my-2">
                              <a href="javascript:void(0)" class="btn btn-danger"><i class="fas fa-times"></i></a>
                         </div>
                    </div>
               </div>`;

          let elemt = $(html);
          setEventForImageGroup(elemt);
     });

     function setEventForImageGroup(elemt) {
          // Element is Html like "elemt = $(html)"

          elemt.find("a").on("click", function () {
               let id = this.parentElement.parentElement.children[0].attributes.data.value;

               groupList = groupList.filter(i => i.id != id);

               groupList.forEach((item, index) => {
                    item.id = `GroupItem-${++index}`;
               });

               resetImageGroupArea();
               loadGroup();
               loadGroupListToSelect();
               saveImageGroup();
          })

          elemt.on('input', function () {
               let id = this.children[0].children[0].attributes.data.value;

               groupList.forEach(item => {
                    if (item.id === id) {
                         item.name = this.children[0].children[0].value;
                    }
               });

               loadGroupListToSelect();
               saveImageGroup();
          });

          elemt.insertBefore('#ImageGroupAddBtn');
          elemt.find("input").focus();
     }

     // Chuyen doi data groupList thanh JSON r add vao Input de gui ve server
     function saveImageGroup() {
          $('#ImageGroup').val(JSON.stringify(groupList));
     }


     let loadGroupListToSelect = () => {
          let allSelectBox = $('select[data^="GroupSelect"]');

          allSelectBox.each((key, selectBox) => {
               let groupHtml = [
                    '<option selected>-- Slide --</option>',
                    ...groupList.map(group => {
                         return (group.name ? `<option data="${group.id}" ${group.imgList.indexOf(selectBox.attributes['img-url'].value) !== -1 ? 'selected' : ''}>${group.name}</option>` : '')
                    })
               ].join('');

               selectBox.innerHTML = groupHtml
          });
     };

     let imageGroupSelectChange = () => {
          let allSelectBox = $('select[data^="GroupSelect"]');

          allSelectBox.each((key, item) => {
               $(item).on('change', function () {
                    groupList.forEach(item => {
                         if (item.name === this.value) {
                              item.imgList.push(this.attributes['img-url'].value);
                              return;
                         }

                         let itemIndex = item.imgList.indexOf(this.attributes['img-url'].value);
                         if (itemIndex !== -1) item.imgList.splice(itemIndex, 1);
                    });

                    $('#ImageGroup').val(JSON.stringify(groupList));
               });
          });
     };

     /* --- Utility --- */

     let listUtility = JSON.parse($('#Utility').val() || "[]");
     let utilityArea = $('#UtilityList');

     let resetUtilityArea = () => {
          let deleteItem = utilityArea.find("div.col-md-3");

          deleteItem.each(function (index, item) {
               $(item).remove();
          });
     }

     $("#UtilityAddBtn").click(() => {

          if ($('#UtilityList>div').length) {
               let abort = false;

               $('#UtilityList>div').each(function(index, item) {
                    if (!$(item).find("input").val()){
                         alert('Vui lòng điền tiện ích còn trống trước khi tạo thêm tiện ích mới!');
                         abort = true;
                         return false;
                    }
               });

               if (abort) return;
          }


          let html = `<div class="col-md-3">
               <div class="input-group">
                    <input data="UtilityItem" type="text" class="form-control my-2">
                    <div class="input-group-append my-2">
                         <a href="javascript:void(0)" class="btn btn-danger"><i class="fas fa-times"></i></a>
                    </div>
               </div>
          </div>`;

          elemt = $(html);
          setEventForUtilityItem(elemt);
     });

     if (listUtility) showUtilityItem(listUtility);

     function showUtilityItem(list) {
          if (list) {
               list.forEach(item => {
                    let html = `<div class="col-md-3">
                         <div class="input-group">
                              <input data="UtilityItem" type="text" class="form-control my-2" value="${item}">
                              <div class="input-group-append my-2">
                                   <a href="javascript:void(0)" class="btn btn-danger"><i class="fas fa-times"></i></a>
                              </div>
                         </div>
                    </div>`;

                    elemt = $(html);
                    setEventForUtilityItem(elemt);

               })
          }
     }

     function setEventForUtilityItem(elemt) {
          elemt.on("input", function () {
               let value = this.children[0].children[0].value;
               let position = $(this).index();

               if (position != -1) listUtility[position] = value ? value : "";

               SaveUtility();
          });

          elemt.find("a").on("click", function() {
               // Xóa Theo Value
               // let value = this.parentElement.parentElement.children[0].value;

               // Xóa theo vị trí
               let listItem = Array.from(document.getElementById("UtilityList").children);
               let position = listItem.indexOf(this.parentElement.parentElement.parentElement);

               // Loại bỏ item có vị trí bằng với vị trí đã ấn
               listUtility = listUtility.filter((item, index) => index != position);

               resetUtilityArea();
               showUtilityItem(listUtility);
               SaveUtility();

          });

          elemt.insertBefore('#UtilityAddBtn');
          elemt.focus();
     }

     function SaveUtility() {
          $('#Utility').val(JSON.stringify(listUtility));
     }

     /* --- CKEditor --- */

     CKEDITOR.config.filebrowserImageUploadUrl = "{!! route('uploadCKEditor').'?_token='.csrf_token() !!}";
     CKEDITOR.config.filebrowserUploadMethod = 'form';
     CKEDITOR.replace('Promotion', { height: '80vh' });
     CKEDITOR.replace('GroundDesign', { height: '80vh' });
     CKEDITOR.replace('InfrastructureLocation', { height: '80vh' });

     let promotionEditor = CKEDITOR.instances.Promotion;
     let GroundDesignEditor = CKEDITOR.instances.GroundDesign;
     let InfrastructureLocationEditor = CKEDITOR.instances.InfrastructureLocation;

     promotionEditor.on('change', function () {
          $('#Promotion').text(this.getData());
     });

     GroundDesignEditor.on('change', function () {
          $('#GroundDesign').text(this.getData());
     });

     InfrastructureLocationEditor.on('change', function () {
          $('#InfrastructureLocation').text(this.getData());
     });

     /* --- Slug --- */

     let name = document.getElementById('title');
     let slug = document.getElementById('slug');
     slug.value = convertToSlug(name.value);
     name.addEventListener('input', () => slug.value = convertToSlug(name.value));

     /* --- Image --- */

     let loadImage = (imgJsonStr) => {
          let imgList = JSON.parse(imgJsonStr).slice(0, 1);
          let html = '';

          if (!imgList) return;

          imgList.forEach(item => {
               item.imgList.forEach(imgURL => {
                    html += `<figure class="col-md-3">
                         <div class="w-100 border rounded" style="height: 200px; position: relative;">
                              <img alt="picture" src="{!! asset('public') !!}/${imgURL}" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; margin: auto; max-height: 100%; max-width: 100%" />
                         </div>
                         <select img-url="${imgURL}" data="GroupSelect" class="form-control mt-1">
                              <option selected>-- Slide --</option>
                         </select>
                    </figure>`;
               });
          });

          let wrap = `<div class="card text-center mt-4 col-md-12 px-0">
               <div class="card-header bg-secondary col-md-12">
                    Tất cả ảnh
               </div>
               <div class="card-body">
                    <div class="row">
                         ${html}
                    </div>
               </div>
          </div>`;

          $('#imageList').append(wrap);

     }

     loadImage('{!! $data['project_info']->Image ?? "[]" !!}');

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

     imageGroupSelectChange();

     if (groupList) {
          loadGroup();
          loadGroupListToSelect();
     }

     /* --- Validate --- */

     var validateConstraints = {
          Title: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập tên dự án!"
               }
          },
          Investor: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập chủ đầu tư!"
               },
          },
          NumberOfBlock: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập số Block!"
               },
          },
          NumberOfFloor: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập số Floor!"
               },
          },
          NumberOfApartment: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập số Apartment!"
               },
          },
          AreaApartment: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng chọn Thành Phố!"
               },
          },
          TotalArea: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhạp diện tích!"
               },
          },
          BuildingDensity: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập mật độ!"
               },
          },
          YearBuilt: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập năm xây dựng!"
               },
          },
          Price: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập giá dự án!"
               },
          },
          Status: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng chọn trạng thái dự án!"
               },
          },
          DistrictId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Quận Huyện!"
               }
          },
          CityId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Thành Phố"
               }
          },
          AreaId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Phường / Xã!"
               }
          },
          StreetId: {
               presence: {
                    allowEmpty: false,
                    message: "^Bạn chưa chọn Đường!"
               }
          },
     }

     validateData('form#main', validateConstraints);

</script>
