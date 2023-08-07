<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<input type="hidden" base_url="{{ URL::to('/') }}">
<div style="padding-left: 10px">
     <div class="row">
          <div class="col-sm-12 ">
               <div class="panel panel-primary">
                    {{-- <div class="panel-heading" >Thêm Phường/Xã</div> --}}
                    <div class="panel-body">
                         @include('errors.note')
                         <form method="post" type="hidden">
                              <div class="row" style="margin-bottom:40px">
                                   <div class="col-sm-12">
                                        <div class="card">
                                             <div class="card-header">
                                                  <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
                                                  <a href="{{route('adminArea')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                             </div>
                                             <div class="card-body">
                                                  <div class="form-group">
                                                       <label>Tên Phường/Xã</label>
                                                       <input id="name" required type="text" name="name" class="form-control" value="{{$area->Name}}">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Slug</label>
                                                       <input id="slug" required type="text" name="slug" class="form-control" value="{{$area->Slug}}">
                                                  </div>

                                                  <div class="form-group">
                                                       <label>Danh mục Thành Phố</label>
                                                       <select id="City" required name="city" class="form-control">
                                                            @foreach ($listcity as $city)
                                                            <option value="{{$city->CityId}}">{{$city->Name}}</option>
                                                            {{-- <option value="{{$city->CityId}}" >{{$city->Name}}</option> --}}
                                                            @endforeach
                                                       </select>
                                                  </div>

                                                  <div class="form-group">
                                                       <label>Danh mục Quận/Huyện</label>
                                                       <select id="District" required name="dis" class="form-control">
                                                            @foreach ($listdis as $dis)
                                                            <option value="{{$dis->DistrictId}}" @if($area->DistrictId == $dis->DistrictId) selected @endif >{{$dis->Name}}</option>
                                                            @endforeach
                                                       </select>
                                                  </div>
                                                  {{-- <div class="form-group">
                                                       <label>Trạng thái</label>
                                                       <select required name="status" class="form-control">
                                                            <option value="1" @if($area->Status==1) checked @endif>1 (Hiện cho người dùng xem)</option>
                                                            <option value="-1" @if($area->Status==-1) checked @endif>-1 (Không hiện)</option>
                                                            <option value="0" @if($area->Status==0) checked @endif>0 (Chờ duyệt)</option>
                                                       </select>
                                                  </div> --}}
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              {{(csrf_field())}}
                         </form>
                         <div class="clearfix"></div>
                    </div>
               </div>
          </div>
     </div>
     <!--/.row-->
</div>
<!--/.main-->
<script>
     let name = document.getElementById('name');
		let slug = document.getElementById('slug');
		slug.value = convertToSlug(name.value);
		name.addEventListener('input', () => slug.value = convertToSlug(name.value));

          let url = document.querySelector('input[base_url]').attributes['base_url'].value;
          let city = document.getElementById('City');
          let district = document.getElementById('District');
          city.addEventListener('change', () => {
          district.innerHTML = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>';
          if (!city.value) return;
          getDistrictByCity(city.value, url).then(html => district.innerHTML = html);
     });
</script>
