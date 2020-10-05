<div class="card">
     <div class="card-header">
          <a href="{{ route('adminStreetGetAdd') }}" class="btn btn-primary">Thêm Đường</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Đường</th>
                         <th>Phường/Xã</th>
                         <th>Tên Đường</th>
                         <th>Tùy Chỉnh</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($data['street_list'] as $item)
                    <tr>
                         <td>{{ $item->StreetId }}</td>

                         @foreach ($data['area_list'] as $area_item)
                         @if ($item->AreaId === $area_item->AreaId)
                         <td>{{ $area_item->Name }}</td>
                         @break
                         @endif
                         @endforeach
                         <td>{{ $item->Name }}</td>
                         <td>
                              <a href="{{ route('adminStreetGetEdit', $item->StreetId) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Sửa</a>
                              <form class="d-inline" action={{ route('adminStreetDelete', $item->StreetId) }} method="post">
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
                         <th>Mã Đường</th>
                         <th>Mã Phường/Xã</th>
                         <th>Tên Đường</th>
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
