<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/perizinan/style.css" />
    <link rel="shortcut icon" href="/assets/assets/img/photos/mai/logoMAI.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    <script language="JavaScript">
        //jam
        // 1 detik = 1000
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var tanggal = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML =
                tanggal.getHours() +
                ":" +
                tanggal.getMinutes() +
                ":" +
                tanggal.getSeconds();
        }
        //bulan
        let tanggallengkap = new String();
        let namahari = "Minggu Senin Selasa Rabu Kamis Jumat Sabtu";
        namahari = namahari.split(" ");
        let namabulan =
            "Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember";
        namabulan = namabulan.split(" ");
        let tgl = new Date();
        let hari = tgl.getDay();
        let tanggal = tgl.getDate();
        let bulan = tgl.getMonth();
        let tahun = tgl.getFullYear();
        tanggallengkap =
            namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
    <title>DETAIL PERIZINAN SISWA </title>
</head>

<body>
    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg shadow-sm fixed-top"
        style="background-color: #1f755e">
        <div class="container-fluid pr-6 flex-column flex-sm-row flex-md-row flex-lg-row">
            <a class="navbar-brand m-0" href="#">
                <p id="judulNavbar">PERIZINAN MAI</p>
            </a>
            <div class="p-0 mr-sm-5 mr-md-5 mr-lg-5 time">
                <div class="row">
                    <div class="">
                        <script language="JavaScript">
                            document.write(tanggallengkap);
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto d-flex justify-content-center" id="jam"></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- isi -->
    <!-- <div id="isi" class="table-responsive-sm">
      <table style="width: 80%" class="table position-absolute top-50 start-50 translate-middle">
        <tr>
          <th width="500px" rowspan="5"><img width="330px" src="foto.jpeg" alt="" /></th>
          <th colspan="2" class="salam">
            Assalaamu’alaikum Wr Wb Bapak Ibu Guru, semoga panjenengan selalu dalam <br />
            limpahan rahmat Allah SWT dan selallu dalam keadaan sehat dan berbahagia
          </th>
        </tr>
        <tr>
          <td colspan="2" class="nama">JOKOWI DODO</td>
        </tr>
        <tr>
          <td colspan="2" class="kelas">INDONESIA</td>
        </tr>
        <tr>
          <td colspan="2" class="dari">dari :</td>
        </tr>
        <tr>
          <td colspan="2" class="galaxy">GALAXY 5.0</td>
        </tr>

        <tr>
          <td rowspan="8"></td>
        </tr>
        <tr>
          <td class="a" colspan="2">Mohon Izin untuk :</td>
        </tr>
        <tr>
          <td class="mengerjakan" colspan="2">Mengerjakan Poster GALAXY 5.0 dan menghubungi Media Partner</td>
        </tr>
        <tr>
          <td class="menyelesaikan" colspan="2">Saya akan menyelesaikan pekerjaan saya sampai :</td>
        </tr>
        <tr class="b">
          <td class="c"  >Hari</td>
          <td>: Sabtu</td>
        </tr>
        <tr class="b">
          <td class="c">Tanggal</td>
          <td>: 12 Desember 2021</td>
        </tr>
        <tr class="b">
          <td class="c">jam</td>
          <td>: 12:00</td>
        </tr>
      </table> 
      <div class="position-fixed bottom-0 end-0" id="ttd">
        <p>Mengetahui,<br>
          11 Desember 2021</p>
          <p class="p1">Dr.Ismi Zahria, M. T.</p>
      </div>
    </div> -->
    <!-- akhir isi -->

    <!-- awal isi -->
    <div class="container isi">
        @foreach ($data as $data)
            <div class="row">
                <div class="col-lg-3">
                    <div class="mx-auto d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $data->foto) }}" alt="" class="img-fluid">
                    </div>

                </div>
                <div class="col-lg-9 mt-3 mt-md-5 mt-lg-0">


                    <p class="fs font-weight-bold pt-xs-4">
                        <b>Assalaamu’alaikum Wr Wb Bapak Ibu Guru, semoga panjenengan selalu dalam limpahan rahmat Allah
                            SWT
                            dan selalu dalam keadaan sehat dan berbahagia</b>
                    </p>
                    <h3>Saya atas nama : </h3>
                    <h1>{{ $data->nama_siswa }}</h1>
                    <h2>{{ $data->kelas }}</h2>
                    <p class="h5 " style="font-weight: 400">dari : </p>
                    @foreach ($data->izin as $d)
                    @if ($d->status_aktif == 1)
                    <h3>{{ $d->kategori }}</h3>
                        
                    <p class="h5 " style="font-weight: 400">Mohon Izin tidak dapat mengikuti pembelajaran
                        bapak/ibu dikarenakan : </p>
                    <h4>{{ $d->keterangan }}</h4>
                    <br>
                    <p class="h5 " style="font-weight: 400">Saya akan menyelesaikan pekerjaan saya pada :
                    </p>
                    <h5>Hari <span style="padding-left: 40px;">:</span>
                        {{ Carbon\Carbon::today()->isoFormat('dddd') }}</h5>
                    <h5>Tanggal <span style="padding-left: 5.9px;">:</span>
                        {{ Carbon\Carbon::today()->isoFormat('D MMMM Y') }}</h5>
                    <h5>Jam <span style="padding-left: 40.8px;">:</span>
                        {{ \Carbon\Carbon::parse($d->waktu_mulai)->Format('H:i') }} -
                        {{ \Carbon\Carbon::parse($d->waktu_selesai)->Format('H:i') }}</h5>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-end">
                                <div>

                                    <h5 class="text-nowrap">Mojokerto,
                                        {{ Carbon\Carbon::parse($d->waktu_mulai)->isoFormat('D MMMM Y') }}
                                    </h5>
                                    <h5>Mengetahui,</h5>
                                    <h5>Pembina</h5>
                                    <div class="box">

                                    </div>
                                    <h5 class="text-nowrap">{{ $d->pembina }}</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <!-- akhir isi -->

</body>

</html>
