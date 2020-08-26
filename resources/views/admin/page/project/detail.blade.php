<form action="{{ Request::is('admin/project/add') ? route('adminProjectPostAdd') : route('adminProjectPutEdit') }}" method="post">
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
                    <input id="name" class="form-control" type="text" placeholder="Tên Dự Án" name="title" value="{{ $data['project_info']->title ?? old('Title') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Địa Chỉ</label>
                <div class="w-100">
                    <input id="location" class="form-control" type="text" placeholder="Địa Chỉ" name="location" value="{{ $data['project_info']->location ?? old('Location') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Chủ Đầu Tư</label>
                <div class="w-100">
                    <input id="investor" class="form-control" type="text" placeholder="Chủ Đầu Tư" name="investor" value="{{ $data['project_info']->investor ?? old('Investor') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Block</label>
                <div class="w-100">
                    <input id="block" class="form-control" type="text" placeholder="Số Block" name="block" value="{{ $data['project_info']->block ?? old('NumberOfBlock') }}">
                </div>

                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Floor</label>
                <div class="w-100">
                    <input id="floor" class="form-control" type="text" placeholder="Số Floor" name="floor" value="{{ $data['project_info']->floor ?? old('NumberOfFloor') }}">
                </div>

                <label class="col-sm-2" for="name" style="padding-top: 7px;">Số Căn Hộ</label>
                <div class="w-100">
                    <input id="apartment" class="form-control" type="text" placeholder="Số Căn Hộ" name="apartment" value="{{ $data['project_info']->apartment ?? old('NumberOfApartment') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 1px.r;">Khu Vực</label>
                <div class="w-100">
                    <input id="area" class="form-control" type="text" placeholder="Khu Vực" name="area" value="{{ $data['project_info']->arae ?? old('AreaApartment') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px.r;">Tổng Khu Vực</label>
                <div class="w-100">
                    <input id="totalarea" class="form-control" type="text" placeholder="Tổng Khu Vực" name="totalarea" value="{{ $data['project_info']->totalarea ?? old('TotalArea') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 1px.r;">Mật độ</label>
                <div class="w-100">
                    <input id="density" class="form-control" type="text" placeholder="Mật độ" name="density" value="{{ $data['project_info']->density ?? old('BuildingDensity') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Năm Xây Dựng</label>
                <div class="w-100">
                    <input id="year" class="form-control" type="text" placeholder="Năm Xây Dựng" name="year" value="{{ $data['project_info']->year ?? old('YearBulit') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Giá</label>
                <div class="w-100">
                    <input id="price" class="form-control" type="text" placeholder="Năm Xây Dựng" name="price" value="{{ $data['project_info']->price ?? old('Price  ') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Ảnh</label>
                <div class="w-100">
                    <input id="image" class="form-control" type="file" placeholder="Ảnh" name="image" value="{{ $data['project_info']->image ?? old('Image') }}">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-sm-2" for="name" style="padding-top: 7px;">Mô tả</label>
                <div class="w-100">
                    <input id="desc" class="form-control" type="text" placeholder="Mô Tả" name="desc" value="{{ $data['project_info']->desc ?? old('Description') }}">
                </div>
            </div>

               <div class="form-group d-flex" >
                    <label class="col-sm-2">Trạng thái</label>
                    <select required name="status" class="form-control">
                         <option value="1">Hiện</option>
                         <option value="-1">Ẩn</option>
                         <option value="0">Chờ duyệt</option>
                </select>
               </div>

               <div class="form-group d-flex">
                   <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                   <div class="w-100">
                        <input id="slug" class="form-control" type="text" placeholder="Slug" name="slug" value="{{ old('Name') }}" readonly>
                   </div>
              </div>
    </div>
</form>

<script>
    let name = document.getElementById('Name');
    let slug = document.getElementById('Slug');
    let convertToSlug = () => slug.value = name.value.trim().replace(/\s+/g, '-');

    convertToSlug();
    name.addEventListener('input', convertToSlug);
</script>
