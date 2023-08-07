<div class="card">
     <div class="card-header">
          <a href="{{route('adminCityGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Thành Phố</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Thành Phố</th>
                         <th>Tên Thành Phố</th>
                         <th>Tùy chọn</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($citylist as $city)
                    <tr>
                         <td>{{$city->CityId}}</td>
                         <td>{{$city->Name}}</td>
                         <td>
                              <a href="{{asset('admin/city/edit/'.$city->CityId)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                              <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/city/delete/'.$city->CityId)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                         </td>
                    </tr>
                    @endforeach
               </tbody>

               {{-- <tr>
                         <td>2</td>
                         <td>Hà Nội</td>
                         <td>
                              <a href="{{route('adminCityGetEdit', 2)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
               <a href="{{route('adminCityDelete', 2)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Xóa</a>
               </td>
               </tr> --}}

               <tfoot>
                    <tr>
                         <th>Mã Thành Phố</th>
                         <th>Tên</th>
                         <th>Tùy Chọn</th>
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
