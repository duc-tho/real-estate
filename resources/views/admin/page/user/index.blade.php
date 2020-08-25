<div class="card">
    <div class="card-header">
         <a href="{{route('adminUserGetAdd')}}" class="btn btn-primary">Thêm Người Dùng</a>
    </div>
    <div class="card-body">
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                    <th>Mã Người Dùng</th>
                    <th>Họ Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Ảnh</th>
                    <th>Số Điện Thoại</th>
                    <th>E-mail</th>
                    <th></th>   
                   </tr>
              </thead>
              <tbody>
                   <tr>
                        <td>1</td>
                        <td>Chung cư</td>
                        <td>Hồ Chí Minh</td>
                        <td>Kiên</td>
                        <td>2</td>
                        <td>10</td>
                        <td>15</td>
                        <td>img</td>
                        <td>10000</td>
                        <td>
                             <a href="{{route('adminUserGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                             <a href="{{route('adminUserDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                        </td>
                   </tr>
                   <tr>
                        <td>2</td>
                        <td>fsasa</td>
                        <td>adadas</td>
                        <td>ádas</td>
                        <td>adsad</td>
                        <td>ádsadasd</td>
                        <td>đấád</td>
                        <td>adssadsa</td>
                        <td>đâsđ</td>
                        <td>
                             <a href="{{route('adminUserGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                             <a href="{{route('adminUserDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                        </td>
                   </tr>
              </tbody>
              <tfoot>
                <tr>
                    <th>Mã Người Dùng</th>
                    <th>Họ Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Ảnh</th>
                    <th>Số Điện Thoại</th>
                    <th>E-mail</th>
                    <th></th>   
                   </tr>
              </tfoot>
         </table>
    </div>
</div>

<script>
    $("#dataTable").DataTable({
         "responsive": true,
         "autoWidth": true,
         "columns": [
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              null,
              { "width": "20%" }
              ]
    });
</script>

