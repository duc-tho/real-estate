<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div style="padding-left: 10px">
     <div class="row">
          <div class="col-sm-12 ">
               <div class="panel panel-primary">
                    {{-- <div class="panel-heading" >Thêm Phường/Xã</div> --}}
                    <div class="panel-body">
                         @include('errors.note')
                         <form method="post" enctype="multipart/form-data" role="form" action="">
                              <div class="row" style="margin-bottom:40px">
                                   <div class="col-sm-12">
                                        <div class="card">
                                             <div class="card-header">
                                                  <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Thêm</button>
                                                  <a href="{{route('adminDistrict')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                             </div>
                                             <div class="card-body">
                                                  {{-- <div class="form-group">
                                                       <label class="col-sm-2k" for="Status" style="padding-top: 7px;">Trạng Thái</label>
                                                       <select class="form-control" name="status" id="status">
                                                            <option value="1">
                                                                 Đang hoạt động</option>
                                                            <option value="-1">
                                                                 Không hoạt động</option>
                                                            <option value="0">
                                                                 Chờ duyệt</option>
                                                       </select>
                                                       <div class="col-lg-12 messages text-danger"></div>
                                                  </div> --}}
                                                  <div class="form-group">
                                                       <label>Tên Quận/Huyện</label>
                                                       <input id="name" required type="text" name="name" class="form-control ">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Slug</label>
                                                       <input id="slug" required type="text" name="slug" class="form-control">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Danh mục Thành Phố</label>
                                                       <select required name="city" class="form-control">
                                                            @foreach ($citylist as $city)
                                                            <option value="{{$city->CityId}}">{{$city->Name}}</option>
                                                            @endforeach
                                                       </select>
                                                  </div>
                                                  {{-- <div class="form-group">
                                                       <label>Trạng thái</label>
                                                       <select required name="status" class="form-control">
                                                            <option value="1">1 (Hiện cho người dùng xem)</option>
                                                            <option value="-1">-1 (Không hiện)</option>
                                                            <option value="0">0 (Chờ duyệt)</option>
                                                       </select>
                                                  </div> --}}
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
                                                  </div>
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
<script>
     let name = document.getElementById('name');
     let slug = document.getElementById('slug');
     slug.value = convertToSlug(name.value);
     name.addEventListener('input', () => slug.value = convertToSlug(name.value));
</script>
<script>
     /* --- CKEditor --- */

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
</script>

<!--/.main-->
