<div class="card">
    <div class="card-header">
         <a href="{{route('adminDistrictGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Quận/Huyện</a>
    </div>
    <div class="card-body">
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                        <th>Mã Quận/Huyện</th>
                        <th>Tên Quận/Huyện</th>
                        <th>Mã Thành Phố</th>
                       
                        <th>Tùy Chỉnh </th>
                   </tr>
              </thead>
              <tbody>
                    @foreach ($districtlist as $dis)
                         <tr>
                              <td>{{$dis->DistrictId}}</td>
                              <td>{{$dis->Name}}</td>
                              <td>{{$dis->CityId}}</td>
                             
                              <td>
                                   <a href="{{asset('admin/district/edit/'.$dis->DistrictId)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                                   <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/district/delete/'.$dis->DistrictId)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>   
                              </td>
                         </tr>
                    @endforeach
              </tbody>
              <tfoot>
                   <tr>
                        <th>Mã Quận/Huyện</th>
                        <th>Tên Quận/Huyện</th>
                        <th>Mã Thành Phố</th>
                       
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
</script>
