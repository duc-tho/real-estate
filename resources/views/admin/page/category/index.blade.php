<div class="card">
     <div class="card-header">
          <a href="{{route('adminCategoryGetAdd')}}" class="btn btn-primary">Thêm Danh Mục</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['category_list'] as $item)
                    <tr>
                         <td>{{ $item->CategoryId }}</td>
                         <td>{{ $item->Name }}</td>
                         <td>
                              <a href="{{ route('adminCategoryGetEdit', $item->CategoryId) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{ route('adminCategoryDelete', $item->CategoryId) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
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
