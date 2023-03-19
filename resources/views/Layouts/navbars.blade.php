<nav class="navbar navbar-expand-lg pb-2 mt-2 sticky-top" style="background-color: #ffffff;">
    <div class="container-fluid">
        <div class="col-4 col-md-2 col-lg-2 me-3"><a class="navbar-brand" href="/home"><img src="img/logo.png"
                    class="img-fluid col-6 col-sm-5 col-md-9 col-lg-5"></a></div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav col-lg-9">
                <li class="nav-item">
                    <a class="nav-link " href="/" style="color:#000000; font-size: 20px">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/about" style="color:#000000; font-size: 20px">About</a>
                </li>
            </ul>
            @if ( !Auth::guard('petugas')->check() && !Auth::guard('pengguna')->check())
                <div class=" col-lg-3 text-end float-end">
                    <a href="/register"><button type="button" class="btn btn-dark"><i class="fa-solid fa-user-group"></i>
                            Daftar</button></a>
                    <a href="/login"><button type="button" class="btn btn-secondary"><i
                                class="fa-solid fa-right-to-bracket"></i> Login</button></a>
                </div>
            @elseif (Auth::guard('user')->check())
            <div class=" col-lg-3 text-end float-end">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
               
            @elseif (Auth::guard('petugas')->check())
            <div class=" col-lg-3 text-end float-end">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
              
            @elseif (Auth::guard('pengguna')->check())
            
            <div class=" col-lg-3 text-end float-end">
               
                <form action="/logout" method="POST">
                    @csrf
                    {{Auth::guard ('pengguna')->user()->username}}  
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
            
            @endif
            
        </div>
    </div>
</nav>
