<div class="card">
    <div class="card-header">
        <a href="{{ route('adminProjectGetAdd') }}" class="btn btn-primary">Thêm Bài Đăng</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên Dự Án</th>
                    <th>Vị Trí</th>
                    <th>Chủ Đầu Tư</th>
                    <th>Số Block</th>
                    <th>Số Căn Hộ</th>
                    <th>Năm Xây Dựng</th>
                    <th>Giá</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projectList as $item)
                    <tr>
                        <td>{{ $item->ProjectId }}</td>
                        <td>{{ $item->Title }}</td>
                        <td>{{ $item->Location }}</td>
                        <td>{{ $item->Investor }}</td>
                        <td>{{ $item->NumberOfBlock }}</td>
                        <td>{{ $item->NumberOfApartment }}</td>
                        <td>{{ $item->YearBuilt }}</td>
                        <td>{{ number_format($item->Price, 0, '.', ',') }}</td>
                        <td>
                            <a href="{{ route('adminProjectGetEdit', $item->ProjectId) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i> Sửa</a>
                            <form class="d-inline" action={{ route('adminProjectDelete', $item->ProjectId) }}
                                method="post">
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
                    <th>Chủ Đầu Tư</th>
                    <th>Số Block</th>
                    <th>Số Căn Hộ</th>
                    <th>Năm Xây Dựng</th>
                    <th>Giá</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        scrollCollapse: true,
        autoWidth: false,
        fixedColumns: true,
        fixedHeader: true,
        columnDefs: [{
                render: function(data, type, full, meta) {
                    return "<div style='width: 145px;'>" + data + "</div>";
                },
                targets: 8
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 145px;'>" + data + "</div>";
                },
                targets: 7
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 120px;' class='text-center'>" + data + "</div>";
                },
                targets: 6
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 90px;' class='text-center'>" + data + "</div>";
                },
                targets: 5
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 80px;' class='text-center'>" + data + "</div>";
                },
                targets: 4
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 100px;'>" + data + "</div>";
                },
                targets: 3
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='width: 160px;'>" + data + "</div>";
                },
                targets: 2
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='white-space:normal; width:200px;'>" + data + "</div>";
                },
                targets: 1
            },
            {
                render: function(data, type, full, meta) {
                    return "<div style='max-width: 50px; min-width: 40px;' class='text-center'>" +
                        data + "</div>";
                },
                targets: 0
            }
        ],
    });

</script>
