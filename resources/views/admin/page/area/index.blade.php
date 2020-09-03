<div class="card">
     <div class="card-header">
          <a href="{{route('adminAreaGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Phường/Xã</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Phường/Xã</th>
                         <th>Tên Phường/Xã</th>
                         <th> Quận/Huyện</th>
                         <th> Trạng Thái</th>
                         <th>Tùy Chỉnh</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($arealist as $area)
                    <tr>
                         <td>{{$area->AreaId}}</td>
                         <td>{{$area->Name}}</td>
                         @foreach ($district_list as $dis)
                              @if ($dis->DistrictId === $area->DistrictId)
                              <td>{{$dis->Name}}</td>
                              @break
                              @endif
                         @endforeach
                         @switch($area->Status)
                                   @case(1)
                                   <td class="text-success">Hoạt động</td>
                                   @break
                                   @case(-1)
                                   <td class="text-secondary">Không hoạt động</td>
                                   @break
                                   @case(0)
                                   <td class="text-warning">Chờ duyệt</td>
                                   @break
                                   @default
                                   @endswitch
                        
                         <td>
                              <a href="{{asset('admin/area/edit/'.$area->AreaId)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                              <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/area/delete/'.$area->AreaId)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>   
                         </td>
                    </tr>
               @endforeach
               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Phường/Xã</th>
                         <th>Tên Phường/Xã</th>
                         <th>Quận/Huyện</th>
                         <th> Trạng Thái</th>
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
               { "width": "20%" }
               ]
     });
</script>
