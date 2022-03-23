<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.head')
    <style>
      @media only screen and (max-width: 425px) {
      .mail {
        font-size: 0.75em;
        }
      }
    </style>
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
            <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                        <h1 class="display-1 mb-3">Kontak</h1>
                        <p class="lead px-xxl-10">Jangan sungkan-sungkan menghubungi kami yaa</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="/assets/assets/img/photos/mai/masjid.jpeg">
            <div class="container py-14 py-md-16">
              <div class="row">
                <div class="col-xl-10 mx-auto">
                  <div class="card">
                    <div class="row gx-0">
                      <div class="col-lg-6 align-self-stretch">
                        <div class="map map-full rounded-top rounded-lg-start">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.304312610269!2d112.55608906477718!3d-7.650390144484283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877101304c0e5%3A0x77d4428ba98578ab!2sMA%20Istimewa%20Amanatul%20Ummah!5e0!3m2!1sen!2sid!4v1637093386857!5m2!1sen!2sid" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                        </div>
                        <!-- /.map -->
                      </div>
                      <!--/column -->
                      <div class="col-lg-6">
                        <div class="p-10 p-md-11 p-lg-14">
                          <div class="d-flex flex-row">
                            <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div class="align-self-start justify-content-start">
                              <h5 class="mb-1">Alamat</h5>
                              <address><a href="https://g.page/ma-amanatul-ummah?share" style="color: inherit;" class="bg-soft-yellow hover hvr">Jl. KH. Abdul Chalim No. 1, Kembangbelor, Pacet, Mojokerto 61374</a> </address>
                            </div>
                          </div>
                          <!--/div -->
                          <div class="d-flex flex-row">
                            <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                            </div>
                            <div>
                              <h5 class="mb-1">Phone</h5>
                              <p><a href="https://wa.me/085157758815" style="color: inherit" class="bg-soft-yellow hover">085157758815</a> <br class="d-none d-md-block" /></p>
                            </div>
                          </div>
                          <!--/div -->
                          <div class="d-flex flex-row">
                            <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                            </div>
                            <div class="align-self-start justify-content-start">
                              <h5 class="mb-1">E-mail</h5>
                              <p class="mb-0 mail"><a href="mailto:mai.amanatulummah.pacet@gmail.com" class="link-body">mai.amanatulummah.pacet@gmail.com</a></p>
                            </div>
                          </div>
                          <!--/div -->
                        </div>
                        <!--/div -->
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!-- /.card -->
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
</body>

</html>
