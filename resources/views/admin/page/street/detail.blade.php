<form enctype="multipart/form-data" id="main" action="{{ Request::is('admin/street/add') ? route('adminStreetPostAdd') : route('adminStreetPutEdit', $data['street_info']->StreetId) }}" method="post">
     @csrf

     @if (Request::is('admin/street/add'))
     @method('POST')
     @else
     @method('PUT')
     @endif

     <div class="card">
          <div class="card-header">
               <input class="btn btn-success" type="submit" value="Lưu">
               <a href="{{route('adminStreet')}}" class="btn btn-danger">Hủy bỏ</a>
          </div>
          <div class="card-body">
               @include('errors.note')
               <div class="form-group d-flex">
                    <label class="col-sm-2" for="City" style="padding-top: 7px;">Thành Phố</label>
                    <div class="w-100">
                         <div class="form-group">
                              <div class="col-lg-12 messages text-danger"></div>
                              <select class="form-control" name="CityId" id="city">
                                   @foreach ( $data['city_list'] as $item )
                                   <option value="{{ $item->CityId }}" {{ $item->CityId === ($data['city_info']->CityId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                                   @endforeach
                              </select>
                         </div>
                         <div class="col-lg-12 messages text-danger"></div>
                    </div>
               </div>

               <div class="form-group d-flex">
                    <label class="col-sm-2" for="AreaId" style="padding-top: 7px;">Mã Quận Huyện</label>
                    <div class="w-100">
                         <div class="form-group">
                              <select class="form-control" name="DistrictId" id="district">
                                   @foreach ( $data['district_list'] as $item )
                                   <option value="{{ $item->DistrictId }}" {{ $item->DistrictId === ($data['district_info']->AreaId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                                   @endforeach
                              </select>
                         </div>
                    </div>
               </div>

               <div class="form-group d-flex">
                    <label class="col-sm-2" for="AreaId" style="padding-top: 7px;">Mã Phường Xã</label>
                    <div class="w-100">
                         <div class="form-group">
                              <select class="form-control" name="AreaId" id="district">
                                   @foreach ( $data['area_list'] as $item )
                                   <option value="{{ $item->AreaId }}" {{ $item->AreaId === ($data['area_info']->AreaId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                                   @endforeach
                              </select>
                         </div>
                    </div>
               </div>


               <div class="form-group d-flex">
                    <label class="col-sm-2" for="name" style="padding-top: 7px;">Tên Đường</label>
                    <div class="w-100">
                         <input id="Name" class="form-control" type="text" placeholder="Tên đường" name="Name" value="{{ $data['street_info']->Name ?? old('Name') }}">
                         <div class="col-lg-12 messages text-danger"></div>
                    </div>

               </div>

               <div class="form-group d-flex">
                    <label class="col-sm-2">Trạng thái</label>
                    <select required name="Status" class="form-control">
                         <option value="1">Hiện</option>
                         <option value="-1">Ẩn</option>
                         <option value="0">Chờ Duyệt</option>
                    </select>
               </div>

               <div class="form-group d-flex">
                    <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                    <div class="w-100">
                         <input id="Slug" class="form-control" type="text" placeholder="Slug" name="Slug" value="{{ old('Name') }}" readonly>
                    </div>
               </div>
          </div>
     </div>
</form>

<script>
     let name = document.getElementById('Name');
     let slug = document.getElementById('Slug');
     slug.value = convertToSlug(name.value);
     name.addEventListener('input', () => slug.value = convertToSlug(name.value));

     var validateConstraints = {
          Name: {
               presence: {
                    allowEmpty: false,
                    message: "^Vui lòng nhập tên đường!"
               }
          },
     }
     validateData('form#main', validateConstraints);
</script>
