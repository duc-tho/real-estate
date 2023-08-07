<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                                                  <a href="{{route('adminCity')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                             </div>
                                             <div class="card-body">
                                                  <div class="form-group">
                                                       <label>Tên Thành phố</label>
                                                       <input id="name" required type="text" name="name" class="form-control" value="{{$city->Name}}">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Slug</label>
                                                       <input id="slug" required type="text" name="slug" class="form-control" value="{{$city->Slug}}">
                                                  </div>
                                                  {{-- <div class="form-group" >
												<label>Trạng thái</label>
												<select required name="status" class="form-control">
													<option value="1" @if($city->Status==1) checked @endif>1 (Hiện cho người dùng xem)</option>
													<option value="-1" @if($city->Status==-1) checked @endif>-1 (Không hiện)</option>
													<option value="0" @if($city->Status==0) checked @endif>0 (Chờ duyệt)</option>
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
</script>
