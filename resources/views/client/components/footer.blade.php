<div class="container">
    <div class="row">
        <div class="col-6">
            <a href="#">
                <img src="{{ asset('storage/assets/images/re-logo-light.png') }}" alt="Logo" height="90">
            </a>

            <p class="re-footer-text-muted pr-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam laborum iure! Fugit labore debitis vel
                sint nulla est! Consectetur at cumque, omnis nobis adipisci reprehenderit corporis sunt quis explicabo.
            </p>

            <div>
                <a href="#" class="text-light btn-sm text-decoration-none">
                    <i class="fa-brands fa-facebook fa-2x"></i>
                </a>
                <a href="#" class="text-light btn-sm text-decoration-none mr-2">
                    <i class="fa-brands fa-instagram fa-2x"></i>
                </a>
                <a href="#" class="text-light btn-sm text-decoration-none mr-2">
                    <i class="fa-brands fa-twitter fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="col-3 pt-4">
            <h3 class="mt-3 mb-2 font-weight-bold">Dich vu</h3>

            <div class="py-2">
                <a href="#" class="text-light">Mua BDS</a>
            </div>
            <div class="py-2">
                <a href="#" class="text-light">Thue BDS</a>
            </div>
            <div class="py-2">
                <a href="#" class="text-light">Du an</a>
            </div>
            <div class="py-2">
                <a href="#" class="text-light">BDS theo Khu vuc</a>
            </div>
        </div>
        <div class="col-3 pt-4">
            <h3 class="my-3 font-weight-bold">Lien He</h3>

            <p>
                <b>Dien thoai:</b>
                <span class="re-footer-text-muted">
                    +84 58 834 3618
                </span>
            </p>
            <p>
                <b>Email:</b>
                <span class="re-footer-text-muted">
                    contact@re.vn
                </span>
            </p>
            <p>
                <b>Dia chi:</b>
                <span class="re-footer-text-muted">
                    QPWF+F7W, Trần Trọng Kim, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh
                </span>
            </p>
        </div>
    </div>

    <hr class="my-4">

    <div class="row">
        <div class="col-6 re-footer-text-muted">
            2023 © Ban quyen thuoc ve
            <a href="#" class="text-primary font-weight-bold">
                {{ request()->get('appName') ?? config('app.name', 'Real Estate') }}
            </a>
        </div>

        <div class="col-6 text-right re-footer-text-muted">
            <a href="#" class="text-info font-weight-bold">Dieu khoan</a>
            va
            <a href="#" class="text-info font-weight-bold">Chinh sach</a>
        </div>
    </div>
</div>
