<div class="card">
     <div class="card-header">
          <a href="{{route('adminCategoryGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Danh Mục</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th>Danh Mục Cha</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['category_list'] as $item)
                    <tr>
                         <td>{{ $item->CategoryId }}</td>
                         <td>{{ $item->Name }}</td>
                         @if ($item->ParentId === 0)
                         <td>Không thuộc danh mục nào</td>
                         @else
                         @foreach ($data['category_list'] as $sub_item)
                         @if ($item->ParentId === $sub_item->CategoryId)
                         <td>{{ $sub_item->Name }}</td>
                         @break
                         @endif
                         @endforeach
                         @endif
                         <td>
                              <a href="{{ route('adminCategoryGetEdit', $item->CategoryId) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <form class="d-inline" action={{ route('adminCategoryDelete', $item->CategoryId) }} method="post">
                                   @csrf
                                   @method('delete')
                                   <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</button>
                              </form>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th>Danh Mục Cha</th>
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
               { "width": "20%" }
          ]
     });
</script>
