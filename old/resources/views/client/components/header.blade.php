<nav class="re-navbar navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <a href="#">
            <img src="{{ asset('storage/assets/images/re-logo.png') }}" alt="Logo" height="70">
        </a>

        <button
            class="btn btn-light d-md-none"
            type="button"
            data-toggle="collapse"
            data-target="#collapsibleNav"
            aria-controls="collapsibleNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="re-navbar-action collapse navbar-collapse w-100 w-lg-auto bg-light" id="collapsibleNav">
            <ul class="navbar-nav mx-auto">
                <li class="re-navbar-item nav-item active font-weight-bold px-3">
                    <a class="nav-link" href="#">Trang chu</a>
                </li>
                <li class="re-navbar-item nav-item font-weight-bold px-3">
                    <a class="nav-link" href="#">Mua</a>

                    <ul class="re-navbar-item-menu bg-light rounded shadow p-3">
                        <a href="#">
                            <li class="py-2 pl-4 pr-2 rounded">
                                <span>Dat Nen</span>
                            </li>
                        </a>
                        <a href="#">
                            <li class="py-2 pl-4 pr-2 rounded">
                                <span>Nha rieng</span>
                            </li>
                        </a>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="re-navbar-item nav-item font-weight-bold px-3 border rounded shadow-sm mr-3">
                    <a class="nav-link" href="#">
                        @if (Auth::check())
                            <span class="mr-3">
                                {{ Auth::user()['first_name'] }}
                            </span>
                            <img src="{{ Auth::user()['profile_image'] }}" class="rounded-circle" width="25" height="25" alt="Avatar" />
                        @else
                            <span class="mr-3">
                                guest
                            </span>
                            <i class="fa-regular fa-user"></i>
                        @endif
                    </a>

                    <ul class="re-navbar-item-menu bg-light rounded shadow p-3">
                        @if (Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a onclick="return">
                                <li class="py-2 pl-4 pr-2 rounded">
                                    <button class="btn text-nowrap">Dang xuat</button>
                                </li>
                            </a>
                        </form>
                        @else
                            <a href="{{ route('login') }}">
                                <li class="py-2 pl-4 pr-2 rounded">
                                    <span>Dang Nhap</span>
                                </li>
                            </a>
                            <a href="{{ route('register') }}">
                                <li class="py-2 pl-4 pr-2 rounded">
                                    <span>Dang Ky</span>
                                </li>
                            </a>
                        @endif
                    </ul>
                </li>
                <li class="re-navbar-item nav-item px-2 border rounded shadow-sm">
                    <a class="nav-link text-primary" href="#">
                        <i class="fa-solid fa-heart fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
