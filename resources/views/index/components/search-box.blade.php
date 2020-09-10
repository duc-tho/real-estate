<div class="search-box rounded p-0 pt-4" style="background: #e2e2e2; box-shadow: 0 3px 16px rgba(0,0,0,.14);">
     <h3 class="text-center">Tìm Nhanh</h3>
     <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
               <a class="nav-link px-4 active" id="home-tab" data-toggle="tab" href="#ban" role="tab" aria-controls="home" aria-selected="true">Bán</a>
          </li>
          <li class="nav-item">
               <a class="nav-link px-4" id="profile-tab" data-toggle="tab" href="#thue" role="tab" aria-controls="profile" aria-selected="false">Thuê</a>
          </li>
          <li class="nav-item">
               <a class="nav-link px-4" id="contact-tab" data-toggle="tab" href="#duan" role="tab" aria-controls="contact" aria-selected="false">Dự án</a>
          </li>
     </ul>
     <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade p-3 show active" id="ban" role="tabpanel" aria-labelledby="home-tab" style="background: #fff">
               <h6 class="text-center font-weight-bold">Nhà Đất Bán</h6>
               <form action="#" method="get">

                    <div class="form-group">
                         <label for="select-category" class="control-label">Danh mục</label>
                         <select name="category_id" id="select-category" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Căn hộ</option>
                              <option value="2">Đất nền</option>
                              <option value="3">Nhà riêng</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">TP.HCM</option>
                              <option value="2">Bình Dương</option>
                              <option value="3">Đồng Nai</option>
                              <option value="4">Bà Rịa - Vũng Tàu</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Quận 1</option>
                              <option value="2">Quận 2</option>
                              <option value="3">Quận 3</option>
                              <option value="4">Quận 4</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Phường 1</option>
                              <option value="2">Phường 2</option>
                              <option value="3">Phường 3</option>
                              <option value="4">Phường 4</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_floor" class="control-label">Giá từ</label>
                                   <input type="number" name="min_floor" id="min_floor" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_floor" class="control-label">đến</label>
                                   <input type="number" name="max_floor" id="max_floor" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_flat" class="control-label">Diện tích từ</label>
                                   <input type="number" name="min_flat" id="min_flat" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_flat" class="control-label">đến</label>
                                   <input type="number" name="max_flat" id="max_flat" value="" class="form-control"></div>
                         </div>
                    </div>

                    <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                    </div>
               </form>

          </div>
          <div class="tab-pane fade p-3" id="thue" role="tabpanel" aria-labelledby="profile-tab">
               CHO THUÊ
               <form action="https://flex-home.botble.com/projects" method="get">

                    <div class="form-group">
                         <label for="select-category" class="control-label">Danh mục</label>
                         <select name="category_id" id="select-category" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Căn hộ</option>
                              <option value="2">Đất nền</option>
                              <option value="3">Nhà riêng</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">TP.HCM</option>
                              <option value="2">Bình Dương</option>
                              <option value="3">Đồng Nai</option>
                              <option value="4">Bà Rịa - Vũng Tàu</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Quận 1</option>
                              <option value="2">Quận 2</option>
                              <option value="3">Quận 3</option>
                              <option value="4">Quận 4</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Phường - Xã</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Phường 1</option>
                              <option value="2">Phường 2</option>
                              <option value="3">Phường 3</option>
                              <option value="4">Phường 4</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_floor" class="control-label">Giá từ</label>
                                   <input type="number" name="min_floor" id="min_floor" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_floor" class="control-label">đến</label>
                                   <input type="number" name="max_floor" id="max_floor" value="" class="form-control">
                              </div>
                         </div>
                    </div>

                    <div class="form-group">
                         <div class="row">
                              <div class="col-md-6">
                                   <label for="min_flat" class="control-label">Diện tích từ</label>
                                   <input type="number" name="min_flat" id="min_flat" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label for="max_flat" class="control-label">đến</label>
                                   <input type="number" name="max_flat" id="max_flat" value="" class="form-control"></div>
                         </div>
                    </div>

                    <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                    </div>
               </form>
          </div>
          <div class="tab-pane fade p-3" id="duan" role="tabpanel" aria-labelledby="contact-tab">
               DỰ ÁN

               <form action="https://flex-home.botble.com/projects" method="get">



                    <div class="form-group">
                         <label for="select-blocks" class="control-label">Tỉnh - Thành phố</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">TP.HCM</option>
                              <option value="2">Bình Dương</option>
                              <option value="3">Đồng Nai</option>
                              <option value="4">Bà Rịa - Vũng Tàu</option>
                         </select>
                    </div>

                    <div class="form-group">
                         <label for="select-quanhuyen" class="control-label">Quận - huyện</label>
                         <select name="blocks" id="select-blocks" class="form-control">
                              <option value="">-- Select --</option>
                              <option value="1">Quận 1</option>
                              <option value="2">Quận 2</option>
                              <option value="3">Quận 3</option>
                              <option value="4">Quận 4</option>
                         </select>
                    </div>
                    <div class="form-group text-center"><button type="submit" class="btn btn-primary btn-full">Search</button>
                    </div>
               </form>
          </div>
     </div>
</div>
