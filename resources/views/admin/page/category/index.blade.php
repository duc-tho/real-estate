<div class="card">
<<<<<<< HEAD
    <div class="card-header">
         <a href="{{route('adminCategoryGetAdd')}}" class="btn btn-primary">Thêm Danh Mục</a>
    </div>
    <div class="card-body">
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                        <th>Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>ParentId Danh Mục</th>
                        <th>Tùy Chỉnh</th>
                   </tr>
              </thead>
              <tbody>
                   <tr>
                        <td>1</td>
                        <td>Nhà Đa Cấp</td>
                        <td>ParenID 1</td>
                        <td>
                             <a href="{{route('adminCategoryGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                             <a href="{{route('adminCategoryDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                        </td>
                   </tr>
                   <tr>
                        <td>2</td>
                        <td>Nhà Cấp 4</td>
                        <td>ParenID 2</td>
                        <td>
                             <a href="{{route('adminCategoryGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                             <a href="{{route('adminCategoryDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                        </td>
                   </tr>
              </tbody>
              <tfoot>
                   <tr>
                        <th>Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>ParentId Danh Mục</th>
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
=======
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
>>>>>>> 4d319ebec2456a6f03c3c95ec1de4aef0f588c22
</script>
