<nav class="re-navbar navbar navbar-expand-md navbar-light bg-light shadow">
    <img src="{{ asset('storage/assets/images/rs-logo.png') }}" alt="Logo" height="70">

    <button
        class="btn btn-light d-lg-none"
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
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Trang chu</a>
            </li>
            <li class="nav-item dropdown">
                <span id="a" data-toggle="dropdown" class="nav-link" aria-haspopup="true">Mua</a>

                <div class="dropdown-menu" aria-labelledby="a">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Thue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Du an</a>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
