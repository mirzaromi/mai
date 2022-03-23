<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.head')

</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
                @include('partial.nav')
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <div class="hero-slider-wrapper bg-dark">
            <div class="hero-slider owl-carousel dots-over" data-nav="true" data-dots="true" data-autoplay="true">
                <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-400"
                    style="background-image: url(/assets/assets/img/photos/mai/AU.jpg);">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start">
                                <h2 class="display-1 fs-56 mb-4 text-white animated-caption"
                                    data-anim="animate__slideInDown" data-anim-delay="500">Sekolahnya Generasi Istimewa
                                </h2>
                                <p class="lead fs-23 lh-sm mb-7 text-white animated-caption"
                                    data-anim="animate__slideInRight" data-anim-delay="1000">Kami sangat berkomitmen
                                    untuk meniptakan generasi-generasi yang Istimewa</p>
                                <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a
                                        href="#mai" class="btn btn-lg btn-outline-white rounded-pill">Read More</a>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.owl-slide -->
                <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-400"
                    style="background-image: url(/assets/assets/img/photos/mai/yai.jpg);">
                    <div class="container light-gallery-wrapper">
                        <div class="row">
                            <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                                <h2 class="display-1 fs-56 mb-4 text-white animated-caption"
                                    data-anim="animate__slideInDown" data-anim-delay="500">Kami dipercayai oleh seluruh
                                    walisantri kami.</h2>
                                <p class="lead fs-23 lh-sm mb-7 text-white animated-caption"
                                    data-anim="animate__slideInRight" data-anim-delay="1000">yuk lihat cuplikan-cuplikan
                                    di MAI.</p>
                                <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a
                                        href="https://www.youtube.com/watch?v=-Id6kGamFpI"
                                        class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 lightbox"><i
                                            class="icn-caret-right"></i></a></div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.owl-slide -->
                <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-400"
                    style="background-image: url(/assets/assets/img/photos/mai/tari2.JPG);">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start">
                                <h2 class="display-1 fs-56 mb-4 text-white animated-caption"
                                    data-anim="animate__slideInDown" data-anim-delay="500">Yuk daftar PPDB MAI</h2>
                                <p class="lead fs-23 lh-sm mb-7 text-white animated-caption"
                                    data-anim="animate__slideInRight" data-anim-delay="1000">Klik tautan dibawah ini ya
                                </p>
                                <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a
                                        href="https://ppdb.mai-au.sch.id"
                                        class="btn btn-lg btn-outline-white rounded-pill" target="_blank">PPDB MAI</a>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.owl-slide -->
                @if (App\Models\Post::Latest()->first() != null)
                    <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-400"
                        style="background-image: url({{ asset('storage/' . App\Models\Post::Latest()->first()->foto) }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                                    <h2 class="display-1 fs-56 mb-4 text-white animated-caption"
                                        data-anim="animate__slideInDown" data-anim-delay="500">
                                        {{ App\Models\Post::Latest()->first()->judul }}</h2>
                                    <p class="lead fs-23 lh-sm mb-7 text-white animated-caption"
                                        data-anim="animate__slideInRight" data-anim-delay="1000">By :
                                        {{ App\Models\Post::Latest()->first()->author->nama }}
                                    </p>
                                    <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500">
                                        <a href="/post/{{ App\Models\Post::Latest()->first()->slug }}"
                                            class="btn btn-lg btn-outline-white rounded-pill" target="_blank">Read
                                            More</a>
                                    </div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/.container -->
                    </div>
                    <!--/.owl-slide -->
                @endif

            </div>
            <!--/.hero-slider -->
        </div>
        <!--/.hero-slider-wrapper -->
        <section class="wrapper bg-light angled lower-end" id="mai">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                            style="top: 3rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item">
                                <figure class="rounded shadow" data-cue="slideInUp"><img
                                        src="/assets/assets/img/photos/mai/tentang 3-min.JPG"
                                        srcset="/assets/assets/img/photos/mai/tentang 3-min.JPG" alt=""></figure>
                            </div>
                            <div class="item">
                                <figure class="rounded shadow" data-cue="slideInUp"><img
                                        src="/assets/assets/img/photos/mai/tentang 2.JPG"
                                        srcset="/assets/assets/img/photos/mai/tentang 2.JPG" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6" data-cue="slideInLeft" data-duration="2000">
                        <img src="/assets/assets/img/icons/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3">Madrasah Aliyah Terbaik</h2>
                        <p class="lead fs-lg">Madrasah Aliyah Istimewa Amanatul Ummah</p>
                        <p class="mb-6">"Terakreditasi “A”, MAI (Madrasah Aliyah Istimewa) Amanatul Ummah
                            memiliki fleksibilitas masa pembelajaran.
                            Santri dapat memilih masa pembelajaran 2 tahun atau 3 tahun dengan ketentuan khusus yang
                            harus dipenuhi.
                            Proses pembelajaran kami menggunakan sistem yang kompetitif, penuh kejujuran dan rasa
                            percaya diri dalam bentuk dauroh dan remidi."</p>
                        <div class="row gy-3 gx-xl-8">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Fasilitas lengkap</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Sistem
                                            yang sangat ketat</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Kualitas lulusan yang
                                            bagus</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Akhlakul
                                            karimah</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->


                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-16 pb-14 pb-md-0">
                <div class="row gx-lg-8 gx-xl-0 align-items-center">
                    <div class="col-md-5 col-lg-4 offset-lg-1 d-none d-md-flex position-relative">
                        <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21" data-rellax-speed="1"
                            style="top: 7rem; left: 1rem"></div>
                        <figure data-cue="zoomIn"><img src="/assets/assets/img/photos/mai/quotes.png"
                                srcset="/assets/assets/img/photos/mai/quotes.png" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1" data-cue="zoomIn">
                        <div class="basic-slider owl-carousel dots-start gap-small mt-6" data-margin="30">
                            <div class="item">
                                <blockquote class="icon fs-lg">
                                    <p>“Kami bertekad menjadikan Pondok Pesantren Amanatul Ummah yang paling unggul
                                        untuk mempersembahkan kader-kader bangsa yang memiliki power maksimal dan
                                        berakhlakul karimah kepada Indonesia dan serta dapat dijangkau oleh seluruh
                                        lapisan masyarakat karena keberhasilan cita-cita kemerdekaan demi terwujudnya
                                        kesehjahteraan dan tegaknya keadilan untuk seluruh bangsa indonesia tanpa
                                        terkecuali”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Prof. Dr. KH. Asep Saifudin Chalim, MA</h5>
                                            <p class="mb-0">Pengasuh PP. Amanatul Ummah</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <h2 class="display-4 mb-3 text-center">Testimoni Walisantri</h2>
                <p class="lead text-center mb-6 px-md-16 px-lg-0">Kepuasan walisantri adalah segalanya bagi kami,
                    berikut beberapa testimoni walisantri kami</p>
                <div class="position-relative">
                    <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                        style="bottom: 0.5rem; right: -1.7rem;"></div>
                    <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1"
                        style="top: -1rem; left: -1.7rem;"></div>
                    <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="true"
                        data-autoplay-timeout="5000"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“Lembaga pendidikan MAI Amanatul Ummah mempunyai induk yang kuat yaitu
                                                Yayasan Amanatul Ummah yang mempunyai ideologis-ideologis kebangsaan dan
                                                keislaman yang kuat”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="/assets/assets/img/photos/mai/RI-2 - Copy.png"
                                                    srcset="/assets/assets/img/photos/mai/RI-2 - Copy.png" alt="" />
                                                <div class="info">
                                                    <h5 class="mb-1">KH. Ma'ruf Amin</h5>
                                                    <p class="mb-0">Wali Santri - Wakil Presiden RI</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“Dua tahun di pesantren Amanatul Ummah memang belum cukup menimba
                                                kedalaman 'sumur ilmu' nya yang sekarang tak kering. Sejumput ilmu yang
                                                barokah, semoga mengantarkan anak saya memperoleh ilman nafi'an
                                                mubarokan”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="/assets/assets/img/photos/mai/khofifah.jpg"
                                                    srcset="/assets/assets/img/photos/mai/khofifah.jpg" alt="" />
                                                <div class="info">
                                                    <h5 class="mb-1">Khofifah Indar P</h5>
                                                    <p class="mb-0">Wali Santri - Gubernur Jawa Timur</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <blockquote class="icon mb-0">
                                            <p>“Amanatul Ummah telah membekali azkia pengalaman yang akan dikenang
                                                sebagai bagian dari perjalanan hidupnya. kemandirian, simpati, dan
                                                empati, tenggang rasa, kejujuran, hidup bersama, menghargai guru dan
                                                orang tua, menyayangi kawan, pembenmtukan karakter, dan nilai-nilai
                                                positif lain yang belum tentu diperoleh diluar pesantren”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="/assets/assets/img/photos/mai/matsuki.png"
                                                    srcset="/assets/assets/img/photos/mai/matsuki.png" alt="" />
                                                <div class="info">
                                                    <h5 class="mb-1">Matsuki HS</h5>
                                                    <p class="mb-0">Wali Santri - Kepala Pusat Registrasi dan
                                                        Sertifikasi
                                                        Halal Kemenag</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!-- /.position-relative -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary angled lower-start">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-3 invisible .d-md-none">
                                <img src="/assets/assets/img/icons/check.svg"
                                    class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter invisible">7518</h3>
                                <p>Completed Projects</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-3">
                                <img src="/assets/assets/img/icons/user.svg"
                                    class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter">3324</h3>
                                <p>Jumlah Alumni</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-3">
                                <img src="assets/assets/img/icons/award-2.svg"
                                    class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter">3122</h3>
                                <p>Alumni di perguruan tinggi</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-3 invisible .d-md-none">
                                <img src="/assets/assets/img/icons/award-2.svg"
                                    class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                <h3 class="counter invisible">4523</h3>
                                <p>Awards Won</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        @if ($first_post != null)
            <section class="wrapper bg-light">
                <div class="container py-14 py-md-16">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                            <h2 class="display-4 mb-0">Postingan Terbaru MAI Amanatul Ummah</h2>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                            <a href="/post" class="btn btn-soft-primary rounded-pill mb-0" style="color: #c28837">View
                                All
                                News</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row gx-lg-8 gx-xl-11 gy-10 blog grid-view">
                        <div class="col-lg-8">
                            <article class="post">
                                <figure class="overlay overlay1 hover-scale rounded mb-5"><a
                                        href="/post/{{ $first_post->slug }}"> <img
                                            src="{{ asset('storage/' . $first_post->foto) }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <!-- /.post-slider -->
                                <div class="post-header mb-5">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover"
                                            rel="category">{{ $first_post->kategori }}</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-4"><a class="link-dark"
                                            href="/post/{{ $first_post->slug }}">{{ $first_post->judul }}</a></h2>
                                    <ul class="post-meta mb-0">
                                        <li class="post-date"><i
                                                class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($first_post->created_at)->isoFormat('D MMM Y') }}</span>
                                        </li>
                                        <li class="post-author"><a href="#"><i
                                                    class="uil uil-user"></i><span>{{ $first_post->author->nama }}</span></a>
                                        </li>
                                        </a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>{!! Str::of($first_post->isi)->words(50) !!}</p>
                                </div>
                                <!-- /.post-content -->
                            </article>
                            <!-- /.post -->
                        </div>
                        <!-- /column -->
                        <div class="col-lg-4">
                            <div class="row gy-10">
                                @foreach ($post as $p)
                                    <div class="col-md-6 col-lg-12">
                                        <article class="post">
                                            <figure class="overlay overlay1 hover-scale rounded mb-5"><a
                                                    href="/post/{{ $p->slug }}"> <img
                                                        src="{{ asset('storage/' . $p->foto) }}" alt="" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover"
                                                        rel="category">{{ $p->kategori }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="/post/{{ $p->slug }}">{{ $p->judul }}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>14
                                                            Apr 2021</span></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /.post -->
                                    </div>
                                @endforeach
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
        @endif
        <section class="wrapper bg-soft-primary angled lower-start">
            <div class="container py-14 py-md-16">
                <div class="row mt-6">
                    <div class="col-xl-10 mx-auto">
                        <div class="grid grid-view projects-tiles show-more" data-showstart="3" data-showafter="3">
                            <div class="project light-gallery-wrapper">
                                <div class="row g-6 isotope">
                                    <div class="item col-md-6" data-cues="bounceInLeft">
                                        <figure class="itooltip itooltip-light hover-scale rounded bg-primary"
                                            title='<h5 class="mb-0">SKS 2 Tahun</h5>'><a
                                                href="/assets/img/sks 2 tahun 2.png" class="lightbox"
                                                data-sub-html=".caption1"> <img src="/assets/img/sks 2 tahun 2.png"
                                                    alt="" /></a>
                                            <div class="caption1 d-none">
                                                <h5>SKS 2 Tahun</h5>
                                            </div>
                                        </figure>
                                    </div>
                                    <!-- /.item -->
                                    <div class="item col-md-6" data-cues="bounceInRight">
                                        <figure class="itooltip itooltip-light hover-scale rounded bg-primary"
                                            title='<h5 class="mb-0">SKS 3 Tahun</h5>'><a
                                                href="/assets/img/sks 3 tahun 2.png" class="lightbox"
                                                data-sub-html=".caption3"> <img src="/assets/img/sks 3 tahun 2.png"
                                                    alt="" /></a>
                                            <div class="caption3 d-none">
                                                <h5>SKS 3 Tahun</h5>
                                            </div>
                                        </figure>
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.project -->
                        </div>
                        <!-- /.projects-tiles -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pt-19 pb-14 pt-md-20 pb-md-16">
                <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                            style="top: -2rem; left: -1.4rem;"></div>
                        <figure class="rounded" data-cue="slideInLeft"><img
                                src="/assets/assets/img/photos/mai/masjid.jpeg"
                                srcset="/assets/assets/img/photos/mai/masjid.jpeg" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6" data-cue="slideInRight">
                        <img src="/assets/assets/img/icons/telemarketer.svg"
                            class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                        <h2 class="display-4 mb-8">Punya Pertanyaan? Hubungi kami segera</h2>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Alamat</h5>
                                <address>jl KH. Abdul Chalim No 1, Kembangbelor<br class="d-none d-md-block" />Pacet,
                                    Mojokerto 61374</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Telepon</h5>
                                <p>085156648815</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a href="mailto:mai.amanatulummah.pacet@gmail.com"
                                        class="link-body">mai.amanatulummah.pacet@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 py-md-16 text-center">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center" data-cue="bounceIn">
                        <img src="/assets/assets/img/icons/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                            alt="" />
                        <h2 class="display-4 mb-3">PPDB MAI Amanatul Ummah</h2>
                        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">Marilah menjadi bagian dari MAI Amanatul Ummah
                        </p>
                        <a href="https://ppdb.mai-au.sch.id" class="btn btn-primary rounded" target="_blank">Join
                            Us</a>
                        <div class="item" style="padding-top: 32px">
                            <article>
                                <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="/assets/doc/PPDB 2021-2022 MAI.pdf"><span
                                            class="bg"></span> <img src="/assets/img/gambar PSB.png" alt=""
                                            style=""></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Download</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">

                                    <!-- /.post-category -->
                                    <h1 class="post-title h1 mt-1 mb-3 pt-2"><a class="link-dark"
                                            href="/assets/doc/PPDB 2021-2022 MAI.pdf">Brosur PPDB MAI Amanatul Ummah 2022-2023</a>
                                    </h1>

                                    <a href="/assets/doc/PPDB 2021-2022 MAI.pdf" class="btn btn-primary rounded"
                                        target="_blank">Download</a>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">

                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    @include('partial.footer')
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?11968';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        // s.src = "/assets/js/whatsapp.js";
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#47c26c",
                "ctaText": "Hubungi Kami",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "Admin MAI",
                "brandSubTitle": "Dibalas secepatnya",
                "brandImg": "https://mai-au.sch.id/assets/assets/img/photos/mai/logoMAI.png",
                "welcomeText": "Assalaamu'alaikum\nAda yang bisa kami bantu?",
                "messageText": "Assalaamu'alaikum%0AMohon Informasi ppdb MAI Amanatul Ummah",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "6285157748815"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</body>

</html>
