<div class="card">
     <div class="card-header">
          <a href="{{route('adminAreaGetAdd')}}" class="btn btn-primary">Thêm Phường/Xã</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Phường/Xã</th>
                         <th>Tên</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td>1</td>
                         <td>P25</td>
                         <td>
                              <a href="{{route('adminAreaGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminAreaDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
                    <tr>
                         <td>2</td>
                         <td>P27</td>
                         <td>
                              <a href="{{route('adminAreaGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminAreaDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Phường/Xã</th>
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
