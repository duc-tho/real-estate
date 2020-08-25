<div class="container">
     <div class="row">
          <div class="col-12">
               <h1 class="text-primary"><span class="badge badge-primary">Danh Sách Dự Án</span></h1>
          </div>
     </div>
     {{-- <div class="row">
        <div class="col-6">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Địa Chỉ
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Chủ Đầu Tư
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                    <a class="dropdown-item" href="#">Thành Phố 1</a>
                </div>
            </div>
        </div>
    </div> --}}
     <div class="row">
          <div class="col-12">
               <table class="table">
                    <thead class="thead">
                         <tr>
                              <th>Tên Dự Án</th>
                              <th>Chủ Đầu Tư</th>
                              <th>Địa Chỉ</th>
                              <th>Số Tòa</th>
                              <th>Số Tầng</th>
                              <th>Ảnh</th>
                              <th>Năm Xây Dựng</th>
                              <th>Mô tả</th>
                              <th></th>
                              <th></th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr class="table-primary">
                              <td>12356</td>
                              <td>1234</td>
                              <td>12345</td>
                              <td>12345</td>
                              <td>12345</td>
                              <td>12345</td>
                              <td>12345</td>
                              <td>12345</td>
                              <td>
                                   <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                              </td>
                              <td>
                                   <button type="button" class="btn btn-primary btn-sm">Xóa</button>
                              </td>
                         </tr>
                    </tbody>
               </table>
               <div class="row">
                    <div class="col-6">
                         <a href={{ route('adminProjectGetAdd') }}>
                              <button type="button" class="btn btn-primary btn-lg">Thêm Dự Án</button>
                         </a>
                         <a href={{ route('adminProjectGetEdit', 2) }}>
                              <button type="button" class="btn btn-primary btn-lg">Sửa</button>
                         </a>
                    </div>
               </div>
          </div>
     </div>
</div>
