<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<div style="padding-left: 10px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" >Quận/Huyện</h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-sm-9 ">
				<div class="panel panel-primary">
					{{-- <div class="panel-heading" >Thêm Phường/Xã</div> --}}
					<div class="panel-body">
						@include('errors.note')
						<form method="post" type="hidden" >
                            
							<div class="row" style="margin-bottom:40px">
								<div class="col-sm-9">
									<div class="form-group" >
										<label>Tên Quận/Huyện</label>
										<input id="name" required type="text" name="name" class="form-control" value="{{$district->Name}}">
									</div>
                                    <div class="form-group" >
										<label >Slug</label>
										<input id="slug" required type="text" name="slug" class="form-control" value="{{$district->Slug}}">
                                    </div>
                                    <div class="form-group" >
										<label>Danh mục Thành Phố</label>
										<select required name="city" class="form-control">
											@foreach ($listcity as $city)
												<option value="{{$city->CityId}}" @if($district->CityId == $city->CityId) selected @endif >{{$city->Name}}</option>
                                            @endforeach
											
					                    </select>
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($district->Status==1) checked @endif>1 (Hiện cho người dùng xem)</option>
											<option value="-1" @if($district->Status==-1) checked @endif>-1 (Không hiện)</option>
											<option value="0" @if($district->Status==0) checked @endif>0 (Chờ duyệt)</option>
					                    </select>
									</div>
                                    <div class="card">
                                        <div class="card-header">
                                            <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                            <a href="{{route('adminDistrict')}}" class="btn btn-danger">Hủy bỏ</a>
                                        </div>
                                         <div class="card-body"></div>
                                    </div>
								</div>
							</div>
							{{(csrf_field())}}
                        </form> 
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    
	

