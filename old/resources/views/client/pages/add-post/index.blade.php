<div class="headdt">
     <img src="{{ asset("dist/img/bannerdangtin.jpg") }}" alt="đăng tin bds" />
     <h1>ĐĂNG TIN BDS</h1>

</div>

<div class="container content-dangtin dang-tin-owner-logged">
     <div class="col-sm-12">
          <h2 class="title-dangtin">Thông tin BĐS</h2>
     </div>
     <div class="form-horizontal bl-info-credibility form-news">
          <div class="row">
               <div class="col-sm-12">
                    <div class="row">
                         <div class="col-sm-6">
                              <div class="form-group">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <label class="col-sm-12 control-label">
                                                  <span class="text">Loại hình giao dịch <strong class="color-red">*</strong></span>
                                             </label>
                                             <div class="col-sm-12">
                                                  <div class="row">
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input type="radio" name="listingType" id="listingType-1" value="1" class="listingType" checked="">
                                                                 <label for="listingType-1"> Bán </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input type="radio" name="listingType" id="listingType-2" class="listingType" value="2">
                                                                 <label for="listingType-2"> Cho thuê </label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <label class="col-sm-12 control-label">
                                                  <span class="text">Loại bất động sản <strong class="color-red">*</strong></span>
                                             </label>
                                             <div class="col-sm-12 propertyType-buy" style="display: block;">
                                                  <div class="row">
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input class="propertyType" type="radio" name="propertyType" id="propertyType-8" value="8" buy-value="8"> <label for="propertyType-8"> Chung cư / căn hộ </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input class="propertyType" type="radio" name="propertyType" id="propertyType-11" value="11" buy-value="11" checked="">
                                                                 <label for="propertyType-11"> Nhà riêng </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input class="propertyType" type="radio" name="propertyType" id="propertyType-13" value="13" buy-value="13">
                                                                 <label for="propertyType-13" class="propertyType-13"> Đất nền </label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-sm-12 propertyType-rent" style="display: none;">
                                                  <div class="row">
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input class="propertyType_rent" type="radio" name="propertyType_rent" id="propertyType-1" value="1" rent-value="1" checked="">
                                                                 <label for="propertyType-1"> Chung cư / căn hộ </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="bl-radio">
                                                                 <input class="propertyType_rent" type="radio" name="propertyType_rent" id="propertyType-2" value="2" rent-value="2">
                                                                 <label for="propertyType-2"> Nhà riêng </label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-sm-12">
                    <div class="form-group form-group-new row">
                         <div class="col-sm-6">
                              <div class="form-group">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <div class="col-sm-12">
                                                  <div class="row">
                                                       <label class="col-sm-4 control-label">
                                                            <span class="text text-price">Giá đề nghị <strong class="color-red">*</strong></span>
                                                       </label>
                                                  </div>
                                             </div>
                                             <div class="col-md-6 col-sm-4 price-fav">
                                                  <input id="price" type="text" name="price" class="form-control" placeholder="Giá đề nghị" value="" onkeyup="onChangeInput(event);">
                                             </div>
                                             <div class="col-sm-6 col-rate">
                                                  <div class="row">
                                                       <div class="col-md-6 col-sm-5">
                                                            <select class="form-control" id="currency" name="currency">
                                                                 <option value="VND">VND</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="form-group col-deposit" style="display: none;">
                                   <div class="col-md-6 col-sm-4 price-fav">
                                        <input id="deposit" type="text" name="deposit" class="form-control" placeholder="Giá đặt cọc" value="" onkeyup="onChangeInput(event);">
                                   </div>
                                   <div class="col-sm-6 col-rate">
                                        <div class="row">
                                             <div class="col-md-6 col-sm-5">
                                                  <select class="form-control" id="currency" name="currency">
                                                       <option value="VND">VND</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <label class="col-sm-12 control-label"> <span class="text">Địa chỉ BĐS <strong class="color-red">*</strong></span>
                                             </label>
                                             <div class="col-sm-12">
                                                  <div class="form-group row">
                                                       <div class="col-md-4 col-sm-4">
                                                            <select class="form-control" id="city">
                                                                 <option value="1">Hồ Chí Minh</option>
                                                            </select>
                                                       </div>
                                                       <div class="col-md-4 col-sm-4 select-district-fav">
                                                            <select class="form-control" id="district" name="district">
                                                                 <option value="">Quận/Huyện</option>
                                                                 <option value="1">Quận 1</option>
                                                                 <option value="2">Quận 2</option>
                                                                 <option value="3">Quận 3</option>
                                                                 <option value="4">Quận 4</option>
                                                                 <option value="5">Quận 5</option>
                                                                 <option value="6">Quận 6</option>
                                                                 <option value="7">Quận 7</option>
                                                                 <option value="8">Quận 8</option>
                                                                 <option value="9">Quận 9</option>
                                                                 <option value="10">Quận 10</option>
                                                                 <option value="11">Quận 11</option>
                                                                 <option value="12">Quận 12</option>
                                                                 <option value="13">Quận Bình Tân</option>
                                                                 <option value="14">Quận Bình Thạnh</option>
                                                                 <option value="15">Quận Gò Vấp</option>
                                                                 <option value="16">Quận Phú Nhuận</option>
                                                                 <option value="17">Quận Tân Bình</option>
                                                                 <option value="18">Quận Tân Phú</option>
                                                                 <option value="19">Quận Thủ Đức</option>
                                                                 <option value="20">Huyện Củ Chi</option>
                                                                 <option value="21">Huyện Hóc Môn</option>
                                                                 <option value="22">Huyện Bình Chánh</option>
                                                                 <option value="23">Huyện Nhà Bè</option>
                                                                 <option value="24">Huyện Cần Giờ</option>
                                                            </select> </div>
                                                       <div class="col-md-4 col-sm-4 select-ward-fav"> <select class="form-control" id="ward" name="ward">
                                                                 <option value="">Phường/Xã</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="form-group hidden-feedback-icon row">
                                                       <div class="col-sm-4">
                                                            <input name="houseNumber" id="houseNumber" class="form-control" type="text" placeholder="Số nhà">
                                                       </div>
                                                       <div class="col-sm-8">
                                                            <input name="fullAddress" id="fullAddress" class="form-control" type="text" placeholder="Tên đường" autocomplete="off">
                                                       </div>
                                                  </div>
                                                  <!--<div class="form-group">
													<div class="col-sm-12">
														<a id="map-dangtin" class="popup-map-dangtin">Nhập địa chỉ từ bản đồ</a>
													</div>
												</div> -->
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-sm-12 col-upload">
                    <div class="form-group form-group-new">
                         <div class="col-sm-12">
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label class="col-sm-12 control-label">
                                                  <span class="text">Hình ảnh nhà</span> (upload tối thiểu 2 hình, kéo thả file hoặc chọn trực tiếp từ máy tính , Dung lượng từ 600kb - &gt;1Mb kích thước tối thiểu đối với ảnh ngang 1714x968, ảnh đứng 968x1714) <strong class="color-red">*</strong>
                                             </label>
                                             <div class="">
                                                  <div class="col-sm-12 images-listing">
                                                       <div class="ajax-file-upload-container"></div>
                                                       <div class="pic-upload">
                                                            <div id="updatepic">
                                                                 <div class="ajax-upload-dragdrop col-lg-6 col-md-6 col-sm-6" style="vertical-align:top;">
                                                                      <div class="ajax-file-upload image-upload" style="position: relative; overflow: hidden; cursor: default;">
                                                                           <label for="upload-file" class="img-pointer">
                                                                                <img id="image_listing" data-lazy-type="image" data-lazy-src="{{ asset('dist/img/icon-hinh.png') }}" class=" col-upload-img image_listing loaded loaded" alt="submit" src="{{ asset('dist/img/icon-hinh.png') }}">
                                                                           </label>
                                                                           <input class="upload-image form-control" type="file" id="upload-file" data-target="#image_listing" name="image_file[]" accept="image/*" multiple="">
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label class="col-sm-12 control-label text-photoGcn">
                                                  <span class="text">Bản vẽ / Sổ </span>(upload tối thiểu 4 hình, kéo thả file hoặc chọn trực tiếp từ máy tính, Dung lượng từ 600kb -&gt; 1Mb kích thước tối thiểu đối với ảnh ngang 1714x968, ảnh đứng 968x1714) <strong class="color-red">*</strong>
                                             </label>
                                             <div class="">
                                                  <div class="col-sm-12 images-drawing">
                                                       <div class="ajax-file-upload-container-drawing"></div>
                                                       <div class="pic-upload">
                                                            <div id="updatepic">
                                                                 <div class="ajax-upload-dragdrop col-lg-6 col-md-6 col-sm-6" style="vertical-align:middle;">
                                                                      <div class="ajax-file-upload image-upload" style="position: relative; overflow: hidden; cursor: default;">
                                                                           <label for="upload-file-drawing" class="img-pointer">
                                                                                <img id="image_drawing" data-lazy-type="image" data-lazy-src="{{ asset('dist/img/icon-hinh.png') }}" class=" col-upload-img image_drawing loaded loaded" alt="submit" src="{{ asset('dist/img/icon-hinh.png') }}">
                                                                           </label>
                                                                           <input class="upload-image-drawing form-control" type="file" id="upload-file-drawing" data-target="#image_drawing" name="image_file[]" accept="image/*" multiple="">
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-sm-12">
                    <div class="form-group row">
                         <div class="col-sm-6 col-description">
                              <div class="form-group">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <label class="col-sm-12 control-label">
                                                  <span class="text">Mô tả</span>
                                             </label>
                                             <div class="col-sm-12">
                                                  <div class="hidden-feedback-icon">
                                                       <textarea name="description" id="description" class="form-control text-description" placeholder="" rows="4"></textarea>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                   <div class="col-sm-12">
                                        <div class="row">
                                             <label class="col-sm-12 control-label"> <span class="text">Nhu cầu khác</span>
                                             </label>
                                             <div class="col-sm-12 col-request-type">
                                                  <div class="row">
                                                       <div class="col-sm-12">
                                                            <div class="bl-checkbox">
                                                                 <input type="checkbox" id="request-type-2" class="request-type" name="request-type" value="2">
                                                                 <label for="request-type-2"> Thẩm định giá bất động sản </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-12">
                                                            <div class="bl-checkbox">
                                                                 <input type="checkbox" id="request-type-3" class="request-type" name="request-type" value="3">
                                                                 <label for="request-type-3"> Cung cấp thông tin quy hoạch </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-12">
                                                            <div class="bl-checkbox">
                                                                 <input type="checkbox" id="request-type-4" class="request-type" name="request-type" value="4">
                                                                 <span for="request-type-4"> Hoàn thiện hồ sơ pháp lý rao bán (Quyền sở hữu, tách thửa, kê khai thừa kế,...) </span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-sm-12">
                    <div class="row">
                         <div class="remove-icon-bootstrap-validate">
                              <div class="col-sm-12 padding-request">
                                   <div class="form-group">
                                        <div class="col-sm-12">
                                             <div class="bl-checkbox bl-checkbox-special">
                                                  <input type="checkbox" id="require-post" class="require-post" checked="checked" name="requirePost" value="1">
                                                  <label class="label_active" for="require-post">&nbsp;</label>
                                                  <span id="require-post-text"> Tôi đồng ý với <a href="javascript:;" data-toggle="modal" data-target="#popup-require-post"> điều khoản sử dụng</a> và <span id="price-button"><a href="javascript:;" data-target="#popup-require-price-buy" data-toggle="modal">biểu phí giao dịch</a></span> </span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-sm-12">
                    <div class="form-group form-button">
                         <div class="col-sm-6"> <button id="btnSendNoLogin" class="btn btn-primary add-property">Đăng tin</button>

                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>
