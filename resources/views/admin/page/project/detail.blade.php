<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Chi Tiết Dự Án</h1>
        </div>
    </div>
    <div class="row">
        <form action={{ route('adminProjectPostAdd') }} method="post">
                <div class="form-group">
                    <label for="name">Tên Dự Án</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="address">Địa Chỉ</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                      <label for="investo">Chủ Đầu Tư</label>
                      <input type="text" class="form-control" name="investo">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="address">Số Block</label>
                      <input type="text" class="form-control" name="block">
                    </div>
                    <div class="col">
                        <label for="address">Số Tầng</label>
                      <input type="text" class="form-control" name="floor">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Số Tòa</label>
                    <input type="text" class="form-control" name="apartment">
                </div>
                <div class="form-group">
                    <label for="address">Năm Xây Dựng</label>
                    <input type="text" class="form-control" name="year">
                </div>
                <div class="form-group">
                    <label for="address">Giá</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="address">Mô Tả</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="form-group">
                    <label for="address">Ảnh</label>
                    <input type="text" class="form-control" name="img">
                </div>
                <div class="form-group">
                    <label for="address">Trạng Thái</label>
                    <input type="list" class="form-control" name="status">
                </div>
            <button type="submit" class="btn btn-primary">Save</button>
            {{ csrf_field() }}
          </form>
          
    </div>
</div>