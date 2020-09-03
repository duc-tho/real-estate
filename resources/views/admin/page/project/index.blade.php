<div class="card">
     <div class="card-header">
          <a href="{{route('adminProjectGetAdd')}}" class="btn btn-primary">Thêm Bài Đăng</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã</th>
                         <th>Tên Dự Án</th>
                         <th>Vị Trí</th>
                         <th>Chủ Đâu Tư</th>
                         <th>Số Block</th>
                         <th>Số Căn Hộ</th>
                         <th>Khu Vực</th>
                         <th>Năm Xây Dựng</th>
                         <th>Giá</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($projectList as $item)
                    <tr>
                         <td>{{$item->ProjectId }}</td>
                         <td>{{$item->Title }}</td>
                         <td>{{$item->Location }}</td>
                         <td>{{$item->Investor }}</td>
                         <td>{{$item->NumberOfBlock }}</td>
                         <td>{{$item->NumberOfApartment }}</td>

                         @foreach ($area_list as $area_item)
                         @if ($item->AreaId === $area_item->AreaId)
                         <td>{{ $area_item->Name }}</td>
                         @break
                         @endif
                         @endforeach

                         <td>{{$item->YearBuilt }}</td>
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
                         <th>Mã</th>
                         <th>Tên Dự Án</th>
                         <th>Vị Trí</th>
                         <th>Chủ Đâu Tư</th>
                         <th>Số Block</th>
                         <th>Số Căn Hộ</th>
                         <th>Khu Vực</th>
                         <th>Năm Xây Dựng</th>
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
              { "width": "17%" }
          ]

    });
</script>
