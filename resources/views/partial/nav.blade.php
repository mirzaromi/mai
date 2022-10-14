<div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100 navbar-MAI">
        <a href="/">
            {{-- <img class="logo-dark" src="/assets/assets/img/photos/mai/logoMAI-hitam.png" srcset="/assets/assets/img/photos/mai/logoMAI-hitam.png " alt="" /> --}}
            <img class="logo-dark" src="/assets/assets/img/photos/mai/logo MA remove bg.png"
                srcset="/assets/assets/img/photos/mai/logo MA remove bg.png " alt="" width="60px" />
            @if (request()->is('/'))
                <img class="logo-light" src="/assets/assets/img/photos/mai/logo MA remove bg.png"
                    srcset="/assets/assets/img/photos/mai/logo MA remove bg.png" alt="" width="60px" />
            @else
                <img class="logo-light" src="/assets/assets/img/photos/mai/logo MA remove bg.png"
                    srcset="/assets/assets/img/photos/mai/logo MA remove bg.png" alt="" width="60px" />
                {{-- <img class="logo-light" src="/assets/assets/img/photos/mai/logoMAI-hitam.png" srcset="/assets/assets/img/photos/mai/logoMAI-hitam.png " alt="" /> --}}
            @endif
        </a>
        @if (request()->is('/'))
            <div class="navbar-text">
                <h4 class="navbar-heading text-light">MAU Amanatul Ummah <br> Program Istimewa</h4>
                {{-- <h4 class="navbar-heading text-light">Layanan SKS 2 dan 3 Tahun</h4> --}}
            </div>
        @else
            <div class="navbar-text">
                <h4 class="navbar-heading text-dark">MAU Amanatul Ummah <br> Program Istimewa</h4>
                {{-- <h4 class="navbar-heading text-light">Layanan SKS 2 dan 3 Tahun</h4> --}}
            </div>
        @endif
    </div>
    <div class="navbar-collapse offcanvas-nav">
        <div class="offcanvas-header d-lg-none d-xl-none">
            <a href="/"><img src="/assets/assets/img/photos/mai/logoMAI-2.png"
                    srcset="/assets/assets/img/photos/mai/logoMAI-2.png " alt="" /></a>
            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                aria-label="Close"></button>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Tentang MAI</a>
                <ul class="dropdown-menu">
                    <!-- <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/assets/services.html">Services I</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/assets/services2.html">Services II</a></li>
              </ul>
            </li> -->

                    <li class="nav-item"><a class="dropdown-item" href="/tentang/profil">Profil</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/tentang/layanan">Program</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/tentang/fasilitas">Fasilitas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Kegiatan</a>
                <ul class="dropdown-menu">
                    <!-- <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/assets/services.html">Services I</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/assets/services2.html">Services II</a></li>
              </ul>
            </li> -->
                    <li class="nav-item"><a class="dropdown-item" href="https://galaxy.mai-au.sch.id/">Event
                            Galaxy</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Pendaftaran</a>
                <ul class="dropdown-menu">
                    <!-- <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/assets/services.html">Services I</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/assets/services2.html">Services II</a></li>
              </ul>
            </li> -->

                    {{-- <li class="nav-item"><a class="dropdown-item" href="/assets/pricing.html">Info Pendaftaran</a></li> --}}
                    <li class="nav-item"><a class="dropdown-item" href="https://ppdb.mai-au.sch.id/">Pendaftaran
                            Online</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/post">Post</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a>
            </li>
        </ul>
        <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other w-100 d-flex ms-auto">
        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

            <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">ID</a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">ID</a></li>
                </ul>

            </li>
            {{-- <li class="nav-item"><a class="nav-link" data-toggle="offcanvas-info"><i class="uil uil-info-circle"></i></a></li> --}}
            <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain"
                        data-toggle="offcanvas-nav"><span></span></button></div>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="https://ppdb.mai-au.sch.id" class="btn btn-sm btn-primary rounded-pill">Daftar Yuk!</a>
            </li>
        </ul>
        <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-other -->
    <div class="offcanvas-info text-inverse">
        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close"
            aria-label="Close"></button>
        <a href="/assets/index.html"><img src="/assets/assets/img/photos/mai/logoMAI-2.png"
                srcset="/assets/assets/img/photos/mai/logoMAI-2.png " alt="" /></a>
        <div class="mt-4 widget">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
                business.</p>
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> +00 (123) 456 78 90
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
        </div>
        <!-- /.widget -->
    </div>
    <!-- /.offcanvas-info -->
</div>
<!-- /.container -->
