<nav class="navbar navbar-expand-lg bg-body-tertiary" style=" 5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Transaksi Surat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Surat keluar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Galeri File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Klasifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-disabled="true">Kode Surat Internal</a>
                </li>
            </ul>

            <li class=" d-flex dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
                        </li>
                    </form>
                </ul>
            </li>
        </div>
    </div>
</nav>
