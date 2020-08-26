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
                         <th>Số Căn Hộ</th>
                         <th>Khu Vực</th>
                         <th>Năm Xây Dựng</th>
                         <th>Ảnh</th>
                         <th>Mô tả</th>
                         <th>Giá</th>
                         <th>Tùy Chỉnh</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['project_list'] as $item)
                    <tr>
                         <td>{{ $item->ProjectID }}</td>
                         <td>{{ $item->Title }}</td>
                         <td>{{ $item->Location }}</td>
                         <td>{{ $item->Investor }}</td>
                         <td>{{ $item->NumberOfLock }}</td>
                         <td>{{ $item->NumberOfFloor }}</td>
                         <td>{{ $item->NumberOfApartment }}</td>
                         <td>{{ $item->AreaApartment }}</td>
                         <td>{{ $item->YearBuilt }}</td>
                         <td>{{ $item->Image }}</td>
                         <td>{{ $item->Description }}</td>
                         <td>{{ $item->Price }}</td>
                         <td>
                              <a href="{{ route('adminProjectGetEdit', $item->ProjectId) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <form class="d-inline" action={{ route('adminProjectDelete', $item->ProjectId) }} method="post">
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
                         <th>Mã Dự Án</th>
                         <th>Tên</th>
                         <th>Địa Chỉ</th>
                         <th>Chủ Đâu Tư</th>
                         <th>Số Block</th>
                         <th>Số Floor</th>
                         <th>Số Căn Hộ</th>
                         <th>Khu Vực</th>
                         <th>Năm Xây Dựng</th>
                         <th>Ảnh</th>
                         <th>Mô tả</th>
                         <th>Giá</th>
                         <th>Tùy Chỉnh</th>
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
