<div class="card">
     <div class="card-header">
          <a href="{{route('adminCityGetAdd')}}" class="btn btn-primary">Thêm Thành Phố</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Thành Phố</th>
                         <th>Tên</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td>1</td>
                         <td>Hồ Chí Minh</td>
                         <td>
                              <a href="{{route('adminCityGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminCityDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
                    <tr>
                         <td>2</td>
                         <td>Hà Nội</td>
                         <td>
                              <a href="{{route('adminCityGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminCityDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Thành Phố</th>
                         <th>Tên</th>
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
               { "width": "20%" }
               ]
     });
</script>



