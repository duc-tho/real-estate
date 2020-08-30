{{-- <form action="{{ Request::is('admin/project/add') ? route('adminProjectPostAdd') : route('adminProjectPutEdit') }}" method="post"> --}}
    <form action="{{ Request::is('admin/project/add') ? route('adminProjectPostAdd') : route('adminProjectPutEdit', $data['project_info']->ProjectId) }}" method="post">
    @csrf

    @if (Request::is('admin/project/add'))
    @method('POST')
    @else
    @method('PUT')
    @endif

    <div class="card">
         <div class="card-header">
              <input class="btn btn-success" type="submit" value="Lưu">
              <a href="{{route('adminProject')}}" class="btn btn-danger">Hủy bỏ</a>
         </div>
         <div class="card-body">


            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Tên Dự Án</label>
                <div class="w-100">
                    <input id="title" class="form-control" type="text" placeholder="Tên Dự Án" name="Title" value="{{ $data['project_info']->Title ?? old('Title') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Địa Chỉ</label>
                <div class="w-100">
                    <input id="location" class="form-control" type="text" placeholder="Địa Chỉ" name="Location" value="{{ $data['project_info']->Location ?? old('Location') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Chủ Đầu Tư</label>
                <div class="w-100">
                    <input id="investor" class="form-control" type="text" placeholder="Chủ Đầu Tư" name="Investor" value="{{ $data['project_info']->Investor ?? old('Investor') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Block</label>
                <div class="w-100">
                    <input id="block" class="form-control" type="text" placeholder="Số Block" name="Block" value="{{ $data['project_info']->NumberOfBlock ?? old('NumberOfBlock') }}">
                </div>

                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Floor</label>
                <div class="w-100">
                    <input id="floor" class="form-control" type="text" placeholder="Số Floor" name="Floor" value="{{ $data['project_info']->NumberOfFloor ?? old('NumberOfFloor') }}">
                </div>

                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Căn Hộ</label>
                <div class="w-100">
                    <input id="apartment" class="form-control" type="text" placeholder="Số Căn Hộ" name="Apartment" value="{{ $data['project_info']->NumberOfApartment ?? old('NumberOfApartment') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 1px.r;">Khu Vực</label>
                <div class="w-100">
                    <input id="area" class="form-control" type="text" placeholder="Khu Vực" name="Area" value="{{ $data['project_info']->AreaApartment ?? old('AreaApartment') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px.r;">Tổng Khu Vực</label>
                <div class="w-100">
                    <input id="totalarea" class="form-control" type="text" placeholder="Tổng Khu Vực" name="Totalarea" value="{{ $data['project_info']->TotalArea ?? old('TotalArea') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 1px.r;">Mật độ</label>
                <div class="w-100">
                    <input id="density" class="form-control" type="text" placeholder="Mật độ" name="Density" value="{{ $data['project_info']->BuildingDensity ?? old('BuildingDensity') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Năm Xây Dựng</label>
                <div class="w-100">
                    <input id="year" class="form-control" type="text" placeholder="Năm Xây Dựng" name="Year" value="{{ $data['project_info']->YearBuilt ?? old('YearBuilt') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Giá</label>
                <div class="w-100">
                    <input id="price" class="form-control" type="text" placeholder="Giá" name="Price" value="{{ $data['project_info']->Price ?? old('Price  ') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Ảnh</label>
                <div class="w-100">
                    <input id="image" class="form-control" type="file" placeholder="Ảnh" name="Image" value="{{ $data['project_info']->Image ?? old('Image') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Mô tả</label>
                <div class="w-100">
                    <input id="desc" class="form-control" type="text" placeholder="Mô Tả" name="Desc" value="{{ $data['project_info']->Description ?? old('Description') }}">
                </div>
            </div>

               <div class="form-group d-flex" >
                    <label class="col-sm-2">Trạng thái</label>
                    <select required name="Status" class="form-control">
                         <option value="1">Hiện</option>
                         <option value="-1">Ẩn</option>
                         <option value="0">Chờ duyệt</option>
                </select>
               </div>

               <div class="form-group d-flex">
                   <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                   <div class="w-100">
                        <input id="slug" class="form-control" type="text" placeholder="" name="Slug" value="{{ old('Name') }}" readonly>
                   </div>
              </div>
    </div>
</form>

<script>
    // let name = document.getElementById('Name');
    // let slug = document.getElementById('Slug');
    // let convertToSlug = () => slug.value = name.value.trim().replace(/\s+/g, '-');

    // convertToSlug();
    // name.addEventListener('input', convertToSlug);

    let name = document.getElementById('title');
    let slug = document.getElementById('slug');
    slug.value = convertToSlug(name.value);
    name.addEventListener('input', () => slug.value = convertToSlug(name.value));
    // var validateConstraints = {
    //         title: {
    //             presence: {
    //                 allowEmpty: false,
    //                 message: "^Tên danh mục Không được để trống!"
    //             }
    //         },
    //         location: {
    //             presen
    //         }
    //         slug: {
    //               presence: {
    //                    allowEmpty: false,
    //                    message: "^Slug Không được để trống!"
    //               }
    //          },
    //     };
   
    //     validateData('form#main', validateConstraints);
</script>
