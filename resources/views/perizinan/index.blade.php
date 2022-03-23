
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="/assets/css/perizinan/style.css" />
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
    <title>Daftar Perizinan MAI</title>
</head>

<body>
    <!-- NAV -->
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
    <!-- END NAV -->
    <!-- TABEL -->
    <div class="container">
        <div class="row" style="margin-top: 10rem">
            <div class="col">
                <div class="justify-content-center table-responsive-lg">
                    <table class="table table-bordered teble-responsive-sm table-paginate"
                        style="border-color: solid #828282">
                        <thead>
                            <tr style="background-color: #b7e3d8">
                                <th scope="col-8">No</th>
                                <th scope="col-">NAMA</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">ANGKATAN</th>
                                <th scope="col">KATEGORI PERIZINAN</th>
                                <th scope="col-8">KETERANGAN PERIZINAN</th>
                                <th scope="col">WAKTU SLESAI</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)


                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $d->siswa->nama_siswa }}</td>
                                    <td>{{ $d->siswa->kelas }}</td>
                                    <td>{{ $d->siswa->angkatan }}</td>
                                    <td>{{ $d->kategori }}</td>
                                    <td>{{ $d->keterangan }}</td>
                                    <td>{{ Carbon\Carbon::parse($d->waktu_selesai)->isoFormat('dddd,D MMMM Y') }} -
                                        {{ Carbon\Carbon::parse($d->waktu_selesai)->Format('H:i') }} </td>
                                    <td>
                                        @if ($d->status_aktif == 1)
                                            <a href="/perizinan/{{ $d->siswa->slug }}"
                                                class="text-decoration-none text-white">
                                                <button class="btn btn-success">
                                                    LIHAT
                                                </button>
                                            </a>
                                        @else
                                            <button class="btn btn-danger">
                                                HABIS
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- END TABEL -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $(".table-paginate").dataTable();
        });
    </script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
