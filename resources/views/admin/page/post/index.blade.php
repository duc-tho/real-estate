<div class="card">
     <div class="card-header">
          <a href="{{route('adminPostGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Bất Động Sản</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã</th>
                         <th>Tiêu đề</th>
                         <th>Danh mục</th>
                         <th>Dự Án</th>
                         <th>Giá</th>
                         <th>Người đăng</th>
                         <th>Ngày đăng</th>
                         <th>Trạng thái</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['post_list'] as $item)
                    <tr>
                         <th>{{ $item.PostId }}</th>
                         <th>{{ $item.Title }}</th>
                         <th>{{ $item.CategoryId }}</th>
                         <td>{{ $item.ProjectId }}</td>
                         <td>{{ $item.Price }}</td>
                         <th>{{ $item.UserId }}</th>
                         <th>{{ $item.create_at }}</th>
                         <th>{{ $item.Status }}</th>
                         <td>
                              <a href="{{route('adminPostGetEdit', 1)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <a href="{{route('adminPostDelete', 1)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã</th>
                         <th>Tiêu đề</th>
                         <th>Danh mục</th>
                         <th>Dự Án</th>
                         <th>Giá</th>
                         <th>Người đăng</th>
                         <th>Ngày đăng</th>
                         <th>Trạng thái</th>
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
               { "width": "17%" }
          ]
    });
</script>
