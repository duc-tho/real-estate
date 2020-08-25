<div class="card">
     <div class="card-header">
          <a href="{{route('adminStreetGetAdd')}}" class="btn btn-primary">Thêm Đường</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Đường</th>
                         <th>Mã Phường/Xã</th>
                         <th>Tên Đường</th>
                         <th>Tùy Chỉnh </th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td>1</td>
                         <td>4</td>
                         <td>Bạch Đằng</td>
                         <td>
                              <a href="{{route('adminStreetGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminStreetDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
                    <tr>
                     <td>2</td>
                     <td>3</td>
                     <td>Lê Duẩn</td>
                         <td>
                              <a href="{{route('adminStreetGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminStreetDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
               </tbody>
               <tfoot>
                    <tr>
                          <th>Mã Đường</th>
                          <th>Mã Phường/Xã</th>
                          <th>Tên Đường</th>
                          <th>Tùy Chỉnh </th>
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
               { "width": "20%" }
               ]
     });
 </script>
 