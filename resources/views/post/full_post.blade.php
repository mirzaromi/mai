<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.head')
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                @include('partial.nav')
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-soft-primary">
]
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                        <h1 class="display-1 mb-3">MAI News</h1>
                        <p class="lead px-lg-5 px-xxl-8">Pusat artikel MAI Istimewa yang ditulis langsung oleh
                            santri-santri MAI Amanatul Ummah</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-md-6 mx-auto">
                        <form action="/post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Postingan ..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2"
                                    style="border: 0px !important" name="cari" value="{{ request('cari') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="border-radius: 0 0.4em 0.4em 0"
                                        id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="row mt-9">
                    <div class="col-md-6 mx-auto">
                        <h1 class="fs-48">No Post Found</h1>
                    </div>
                </div> --}}
            </div>
            <!-- /.container -->
            @if ($first_post != null)
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="blog classic-view mt-n17">
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay1 hover-scale"><a class="link-dark"
                                            href="/post/{{ $first_post->slug }}"><img
                                                src="{{ asset('storage/' . $first_post->foto) }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover"
                                                    rel="category">{{ $first_post->kategori }}</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                    href="/post/{{ $first_post->slug }}">{{ $first_post->judul }}</a>
                                            </h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>
                                                {!! Str::of($first_post->isi)->words(50) !!} <a href="/post/{{ $first_post->slug }}">Read
                                                    More</a>
                                            </p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i
                                                    class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($first_post->created_at)->isoFormat('D MMM Y') }}</span>
                                            </li>
                                            <li class="post-author"><a href="#"><i
                                                        class="uil uil-user"></i><span>By
                                                        {{ $first_post->author->nama }}</span></a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                        </div>
                        <!-- /.blog -->
                        <div class="blog grid grid-view">
                            <div class="row isotope gx-md-8 gy-8 mb-8">
                                @foreach ($post as $p)

                                    <article class="item post col-md-6">
                                        <div class="card">
                                            <figure class="card-img-top overlay overlay1 hover-scale"><a
                                                    href="/post/{{ $p->slug }}">
                                                    <img src="{{ asset('storage/' . $p->foto) }}" alt="" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body">
                                                <div class="post-header">
                                                    <div class="post-category text-line">
                                                        <a href="#" class="hover"
                                                            rel="category">{{ $p->kategori }}</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                            href="/post/{{ $p->slug }}">{{ $p->judul }}</a>
                                                    </h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content">
                                                    <p>
                                                        {!! Str::of($p->isi)->words(30) !!} <a
                                                            href="/post/{{ $p->slug }}">Read More</a>
                                                    </p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($p->created_at)->isoFormat('D MMM Y') }}</span>
                                                    </li>
                                                    <li class="post-author">
                                                        <a href="#">
                                                            <i class="uil uil-user"></i>
                                                            <span>By {{ $p->author->nama }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                @endforeach
                                <!-- /.post -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.blog -->
                        {{ $post->links() }}
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        @else
            <h1 class="fs-48 text-center" style="position: relative; top: -100px">Tidak Ditemukan Konten Apapun</h1>
        @endif
        <!-- /section -->
    </div>
    
    <!-- /.content-wrapper -->
    @include('partial.footer')
</body>

</html>
