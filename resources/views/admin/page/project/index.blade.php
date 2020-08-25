<div class="card">
     <div class="card-header">
          <a href="{{route('adminProjectGetAdd')}}" class="btn btn-primary">Thêm Bài Đắng</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Dự Án</th>
                         <th>Tên</th>
                         <th>Địa Chỉ</th>
                         <th>Chủ Đâu Tư</th>
                         <th>Số Block</th>
                         <th>Số Floor</th>
                         <th>Năm Xây Dựng</th>
                         <th>Ảnh</th>
                         <th>Mô tả</th>
                         <th>Giá</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['street_list'] as $item)
                    <tr>
                         <td>{{ $item->StreetId }}</td>
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
                         <th>Mã Dự Án</th>
                         <th>Tên</th>
                         <th>Địa Chỉ</th>
                         <th>Chủ Đâu Tư</th>
                         <th>Số Block</th>
                         <th>Số Floor</th>
                         <th>Năm Xây Dựng</th>
                         <th>Ảnh</th>
                         <th>Mô tả</th>
                         <th>Giá</th>
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
              null,
              { "width": "20%" }
              ]
    });
</script>
