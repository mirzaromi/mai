<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Perizinan;
use App\Models\RegisSiswaIzin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'adminwebmai',
            'password' => bcrypt('adminwebmai'),
            'role' => 'admin',
            'author_id' => 1

        ]);

        User::create([
            'username' => 'mirzaromi',
            'password' => bcrypt('mirzaromi123'),
            'role' => 'pembina',
            'author_id' => 2

        ]);

        User::create([
            'username' => 'ismizahria',
            'password' => bcrypt('ismizahria123'),
            'role' => 'pembina',
        ]);

        User::create([
            'username' => 'muhammadromli',
            'password' => bcrypt('muhammadromli123'),
            'role' => 'pembina',
        ]);

        User::create([
            'username' => 'rahaffaldi',
            'password' => bcrypt('rahaffaldi123'),
            'role' => 'pembina',
        ]);

        User::create([
            'username' => 'khoirunnisak',
            'password' => bcrypt('khoirunnisak'),
            'role' => 'author',            
        ]);

        Post::create([
            'judul' => 'RESOLUSI JIHAD, HARI SANTRI BERDEDIKASI UNTUK NEGERI',
            'isi' => '<p>Setiap tanggal 22 Oktober diperingati hari santri nasional, di tahun 2021 ini berbeda dengan tahun-tahun sebelumnya dikarenakan pendemi Covid-19 yang setiap waktu semakin tinggi angka penyebarannya. Tetapi, melalui protokol kesehatan yang ketat dengan tetap memakai masker baik peserta maupun petugas upacara, hal ini tidak mengurangi semangat para santri melaksanakan upacara dengan tertib dan khidmat. Pondok Pesantren Amanatul Ummah tetap melaksanakan upacara dengan serangkaian kegiatan lainnya untuk memperingati Hari Santri Nasional 2021 ini. </p>
            <p>Upacara Hari Santri Nasional ini diadakan pada hari Jumat tanggal 22 Oktober 2021 di lapangan KH. Abdullah Pondok Pesantren Amanatul Ummah Pacet Mojokerto. Upacara ini diikuti oleh seluruh santri dan Staff Dewan Guru dari berbagai lembaga PP. Amanatul Ummah Pacet yakni; IKHAC, MAI, MBI, SMABP, MTS, SMPBP, dan HIKMATUL AMANAH. Upacara dimulai pukul 09.00 dan dipimpin langsung oleh pengasuh kita Prof. Dr. K.H. Asep Saifuddin Chalim, M.A. </p>

            <p>Upacara Hari Santri Nasional ini dirayakan dengan sangat meriah. Tidak seperti upacara pada umumnya. Petugas upacara kali ini berkolaborasi dengan berbagai lembaga diantaranya; MAI, SMABP, SMPBP, dan MTS. Khususnya, pasukan pengibar bendera, penampilan variasi formasi, dan paduan suara dari lembaga MAI dan SMABP. Menariknya lagi, upacara ini diiringi oleh MAXC Chord Drumband dari lembaga MAI Amanatul Ummah. </p>

            <p>Pada saat menyanyikan lagu mars NU “Yalal Wathon” terdapat penurunan banner yang bergambar Romo Kyai Asep beserta Koordinatornya yang mana itu adalah hasil kreativitas santri MAI dan SMABP. Setelah upacara berlangsung, terdapat penampilan ekstrakurikuler dari beberapa lembaga antara lain yaitu Drumband dengan iringan lagu Mars NU dari lembaga MAI, Tarian Kreasi dari lembaga SMABP, Tarian Kreasi dari lembaga MAI, dan yang terakhir adalah penampilan variasi formasi paskibra SMPBP. Sebagai santri Indonesia kita harus bangga dengan predikat santri yang melekat pada diri kita karena tidak semua orang dapat menjadi santri.</p>
            <p>“ Derita Kami Untuk Negeri, Doa kami tetap abadi.”

            </p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'Setiap-tanggal-22-Oktober',
            'foto' =>'foto_post/yai.jpg'
        ]);

        Post::create([
            'judul' => 'Susana Ramadhan, Pondok Pesantren Amanatul Ummah',
            'isi' => '<p>Ramadhan adalah bulan yang paling di tunggu umat muslim. Di bulan ini
            kita diwajibkan berpuasa selama sebulan penuh. Tak hanya menahan
            rasa lapar dan dahaga di bulan ini kita juga diwajibkan untuk
            menahan segala hawa nafsu kita. kita juga akan mendapatkan pahala
            yang besar walaupun oleh perbuatan sekecil apapun. Maka dari itu di
            bulan yang berkah ini hendaknya kita lakukan perbuatan yang positif
            sebanyak banyaknya. </p>

            <p>Ramadhan adalah bulan yang paling di tunggu umat muslim. Di bulan ini
            kita diwajibkan berpuasa selama sebulan penuh. Tak hanya menahan
            rasa lapar dan dahaga di bulan ini kita juga diwajibkan untuk
            menahan segala hawa nafsu kita. kita juga akan mendapatkan pahala
            yang besar walaupun oleh perbuatan sekecil apapun. Maka dari itu di
            bulan yang berkah ini hendaknya kita lakukan perbuatan yang positif
            sebanyak banyaknya. </p>

            <p> Mulai dari jam 2 kami sudah dibangunka untuk sahur dan bersih diri
            kemudian berangkat ke masjid untuk melakukan shalat malam. Hal ini
            sudah menjadi ciri khas pondok pesantren Amanatul Ummah, shalat
            malam yang wajib dilaksanakan dan tidak boleh di tinggal kan.
            Setelah shalat malam dilanjutkan dengan pengajian abah kyai dengan
            kitab mukhtarul alhadist. Kitab yang berisi dalil-dalil nabi.
            Dilanjut setelah pengajian para santri akan kembali ke pondok untuk
            bersiap siap menuntut ilmu ke lembaga mereka masing masing.</p>

            <p>Para santri bersekolah hingga pukul 3 sore. Kemudian para santri akan
            kembali ke asrama untuk melaksanakan kegiatan selanjutnya. Pukul 4
            para santri akan melakukan pengajian kitab hingga adzan maghrib.
            Setelah shalat maghrib para santri akan kembali ke asrama untuk
            berbuka puasa. Lalu akan kembali ke masjid untuk shalat isya dan
            tarawih. Setelah shalat tarawih mereka akan bertadarus bersama
            membaca al-qur’an dengan pembagian juz yang telah ditentukan. </p>

            <p>Pukul 9 para santri sudah diharuskan tidur malam agar mereka siap
            untuk melakukan kegiatan mereka esok hari. Dengan adanya kegiatan
            yang padat ini membuat para santri dapat melakukan hal hal yang
            positif dan bermanfaat bagi diri mereka. Hal ini juga dapat sejenak
            melupakan rasa lapar saat mereka berpuasa.</p>',
            'kategori' => 'Ramadhan',
            'tag' => 'Puasa',
            'author_id' => 1,
            'slug' => 'Susana-Ramadhan,-Pondok-Pesantren',
            'foto' =>'foto_post/yai.jpg'
        ]);

        Post::create([
            'judul' => 'Pondok Pesantren Amanatul Ummah Telah Adakan Vaksinasi',
            'isi' => '<p>Vaksinasi adalah pemberian vaksin (antigen) yang dapat merangsang
            pembentukan imunitas (antibodi) sistem imun di dalam tubuh.
            Vaksinasi sebagai upaya pencegahan primer yang sangat handal
            mencegah penyakit yang cepat menular. Dengan prosedur vaksinasi yang
            benar diharapkan akan diperoleh kekebalan yang optimal, penyuntikan
            yang aman dan Kejadian Ikutan Pasca Imunisasi(KIPI) yang minimal.
            Vaksinasi Covid-19 dilakukan setelah kepastian keamanan dan
            keampuhannya ada, merupakan upaya untuk menurunkan kesakitan dan
            kematian dan mendorong terbentuknya kekebalan kelompok (herd
            imunity). Selain itu, vaksinasi Covid-19 bertujuan untuk melindungi
            dan memperkuat sistem kesehatan secara menyeluruh, juga menjaga
            produktivitas dan mengurangi dampak sosial dan ekonomi masyarakat.
            </p>

        <p> (7/4/2021) hari Rabu kemarin Amanatul Ummah mengadakan vaksinasi.
            Vaksinasi ini di peruntukkan bagi tim kesehatan, para guru, dan
            pegawai. Hal ini bertujuan agar para santri yang ada di pondok tidak
            tertular oleh para guru/pegawai yang hampir tiap hari keluar masuk
            pondok. Mengenai vaksin, menggunakan vaksin sinovac yang halal dan
            telah disahkan MUI.</p>

        <p> Vaksinasi ini diadakan dalam 2 periode. Periode pertama dilaksanakan
            pada tanggal 7 april selama 3 hari dan periode kedua dilaksanakan 28
            hari setelah diadakannya vaksin yang pertama. Sebelum dilakukan
            vaksinasi harus melewati beberapa tahap:
        <ol>
            <li>Tahap vertifikasi data. Pada tahap ini diharuskan menyetorkan
                KTP atau KK hal ini agar dapat mengetahui bahwa orang tersebut
                telah melakukan vaksinasi.</li>
            <li>Skrining. Tahap ini adalah tahap pengecekan suhu serta
                pengecekan apakah orang tersebut memiliki penyakit serius
                seperti kolestrol atau dibetes.</li>
            <li>Tahap vaksinasi. Setelah orang tersebut aman tanpa penyakit
                serius. Maka diperbolehkan melakukan vaksinasi.</li>
            <li>Observasi. Setelah melakukan vaksinasi maka diwajibkan menunggu
                terlebih dahulu sekitar 30 menit di pos observasi hal ini
                bertujuan agar mengetahui efek samping seseorang yang telah
                melakukan vaksinasi seperti mengantuk, pusing atau suhu badan
                naik.</li>
        </ol>
        </p>
        <p> Dengan adanya vaksinasi ini memberikan banyak komentar positif,
            seperti ;
            “yang penting vaksinnya bagus dan halal. Seperti sinovac dan
            biofarma. Gratis juga. setelah melakukan vaksinasi agak nyeri pas di
            suntik tapi tidak ada efek pusing” ujar ustadh Romli salah satu
            pembimbing putra.
            “saya setuju saja dengan adanya vaksinasi ini. Efek samping yang
            saya rasakan cuma mengantuk” ucap pak ulin salah satu guru</p>',
            'kategori' => 'Vaksin',
            'tag' => 'Puasa',
            'author_id' => 1,
            'slug' => 'Vaksinasi-adalah-pemberian-vaksin',
            'foto' =>'foto_post/yai.jpg'
        ]);
        Post::create([
            'judul' => 'RESOLUSI JIHAD, HARI SANTRI BERDEDIKASI UNTUK NEGERI',
            'isi' => '<p>Setiap tanggal 22 Oktober diperingati hari santri nasional, di tahun 2021 ini berbeda dengan tahun-tahun sebelumnya dikarenakan pendemi Covid-19 yang setiap waktu semakin tinggi angka penyebarannya. Tetapi, melalui protokol kesehatan yang ketat dengan tetap memakai masker baik peserta maupun petugas upacara, hal ini tidak mengurangi semangat para santri melaksanakan upacara dengan tertib dan khidmat. Pondok Pesantren Amanatul Ummah tetap melaksanakan upacara dengan serangkaian kegiatan lainnya untuk memperingati Hari Santri Nasional 2021 ini. </p>
            <p>Upacara Hari Santri Nasional ini diadakan pada hari Jumat tanggal 22 Oktober 2021 di lapangan KH. Abdullah Pondok Pesantren Amanatul Ummah Pacet Mojokerto. Upacara ini diikuti oleh seluruh santri dan Staff Dewan Guru dari berbagai lembaga PP. Amanatul Ummah Pacet yakni; IKHAC, MAI, MBI, SMABP, MTS, SMPBP, dan HIKMATUL AMANAH. Upacara dimulai pukul 09.00 dan dipimpin langsung oleh pengasuh kita Prof. Dr. K.H. Asep Saifuddin Chalim, M.A. </p>

            <p>Upacara Hari Santri Nasional ini dirayakan dengan sangat meriah. Tidak seperti upacara pada umumnya. Petugas upacara kali ini berkolaborasi dengan berbagai lembaga diantaranya; MAI, SMABP, SMPBP, dan MTS. Khususnya, pasukan pengibar bendera, penampilan variasi formasi, dan paduan suara dari lembaga MAI dan SMABP. Menariknya lagi, upacara ini diiringi oleh MAXC Chord Drumband dari lembaga MAI Amanatul Ummah. </p>

            <p>Pada saat menyanyikan lagu mars NU “Yalal Wathon” terdapat penurunan banner yang bergambar Romo Kyai Asep beserta Koordinatornya yang mana itu adalah hasil kreativitas santri MAI dan SMABP. Setelah upacara berlangsung, terdapat penampilan ekstrakurikuler dari beberapa lembaga antara lain yaitu Drumband dengan iringan lagu Mars NU dari lembaga MAI, Tarian Kreasi dari lembaga SMABP, Tarian Kreasi dari lembaga MAI, dan yang terakhir adalah penampilan variasi formasi paskibra SMPBP. Sebagai santri Indonesia kita harus bangga dengan predikat santri yang melekat pada diri kita karena tidak semua orang dapat menjadi santri.</p>
            <p>“ Derita Kami Untuk Negeri, Doa kami tetap abadi.”

            </p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 2,
            'slug' => 'Setiap-tanggal-22-asd',
            'foto' =>'foto_post/yai.jpg'
        ]);

        Post::create([
            'judul' => 'Susana Ramadhan, Pondok Pesantren Amanatul Ummah',
            'isi' => '<p>Ramadhan adalah bulan yang paling di tunggu umat muslim. Di bulan ini
            kita diwajibkan berpuasa selama sebulan penuh. Tak hanya menahan
            rasa lapar dan dahaga di bulan ini kita juga diwajibkan untuk
            menahan segala hawa nafsu kita. kita juga akan mendapatkan pahala
            yang besar walaupun oleh perbuatan sekecil apapun. Maka dari itu di
            bulan yang berkah ini hendaknya kita lakukan perbuatan yang positif
            sebanyak banyaknya. </p>

            <p>Ramadhan adalah bulan yang paling di tunggu umat muslim. Di bulan ini
            kita diwajibkan berpuasa selama sebulan penuh. Tak hanya menahan
            rasa lapar dan dahaga di bulan ini kita juga diwajibkan untuk
            menahan segala hawa nafsu kita. kita juga akan mendapatkan pahala
            yang besar walaupun oleh perbuatan sekecil apapun. Maka dari itu di
            bulan yang berkah ini hendaknya kita lakukan perbuatan yang positif
            sebanyak banyaknya. </p>

            <p> Mulai dari jam 2 kami sudah dibangunka untuk sahur dan bersih diri
            kemudian berangkat ke masjid untuk melakukan shalat malam. Hal ini
            sudah menjadi ciri khas pondok pesantren Amanatul Ummah, shalat
            malam yang wajib dilaksanakan dan tidak boleh di tinggal kan.
            Setelah shalat malam dilanjutkan dengan pengajian abah kyai dengan
            kitab mukhtarul alhadist. Kitab yang berisi dalil-dalil nabi.
            Dilanjut setelah pengajian para santri akan kembali ke pondok untuk
            bersiap siap menuntut ilmu ke lembaga mereka masing masing.</p>

            <p>Para santri bersekolah hingga pukul 3 sore. Kemudian para santri akan
            kembali ke asrama untuk melaksanakan kegiatan selanjutnya. Pukul 4
            para santri akan melakukan pengajian kitab hingga adzan maghrib.
            Setelah shalat maghrib para santri akan kembali ke asrama untuk
            berbuka puasa. Lalu akan kembali ke masjid untuk shalat isya dan
            tarawih. Setelah shalat tarawih mereka akan bertadarus bersama
            membaca al-qur’an dengan pembagian juz yang telah ditentukan. </p>

            <p>Pukul 9 para santri sudah diharuskan tidur malam agar mereka siap
            untuk melakukan kegiatan mereka esok hari. Dengan adanya kegiatan
            yang padat ini membuat para santri dapat melakukan hal hal yang
            positif dan bermanfaat bagi diri mereka. Hal ini juga dapat sejenak
            melupakan rasa lapar saat mereka berpuasa.</p>',
            'kategori' => 'Ramadhan',
            'tag' => 'Puasa',
            'author_id' => 2,
            'slug' => 'Susana-Ramadhan,-Pondok-Pesanasdastren',
            'foto' =>'foto_post/yai.jpg'
        ]);

        Post::create([
            'judul' => 'Pondok Pesantren Amanatul Ummah Telah Adakan Vaksinasi',
            'isi' => '<p>Vaksinasi adalah pemberian vaksin (antigen) yang dapat merangsang
            pembentukan imunitas (antibodi) sistem imun di dalam tubuh.
            Vaksinasi sebagai upaya pencegahan primer yang sangat handal
            mencegah penyakit yang cepat menular. Dengan prosedur vaksinasi yang
            benar diharapkan akan diperoleh kekebalan yang optimal, penyuntikan
            yang aman dan Kejadian Ikutan Pasca Imunisasi(KIPI) yang minimal.
            Vaksinasi Covid-19 dilakukan setelah kepastian keamanan dan
            keampuhannya ada, merupakan upaya untuk menurunkan kesakitan dan
            kematian dan mendorong terbentuknya kekebalan kelompok (herd
            imunity). Selain itu, vaksinasi Covid-19 bertujuan untuk melindungi
            dan memperkuat sistem kesehatan secara menyeluruh, juga menjaga
            produktivitas dan mengurangi dampak sosial dan ekonomi masyarakat.
            </p>

        <p> (7/4/2021) hari Rabu kemarin Amanatul Ummah mengadakan vaksinasi.
            Vaksinasi ini di peruntukkan bagi tim kesehatan, para guru, dan
            pegawai. Hal ini bertujuan agar para santri yang ada di pondok tidak
            tertular oleh para guru/pegawai yang hampir tiap hari keluar masuk
            pondok. Mengenai vaksin, menggunakan vaksin sinovac yang halal dan
            telah disahkan MUI.</p>

        <p> Vaksinasi ini diadakan dalam 2 periode. Periode pertama dilaksanakan
            pada tanggal 7 april selama 3 hari dan periode kedua dilaksanakan 28
            hari setelah diadakannya vaksin yang pertama. Sebelum dilakukan
            vaksinasi harus melewati beberapa tahap:
        <ol>
            <li>Tahap vertifikasi data. Pada tahap ini diharuskan menyetorkan
                KTP atau KK hal ini agar dapat mengetahui bahwa orang tersebut
                telah melakukan vaksinasi.</li>
            <li>Skrining. Tahap ini adalah tahap pengecekan suhu serta
                pengecekan apakah orang tersebut memiliki penyakit serius
                seperti kolestrol atau dibetes.</li>
            <li>Tahap vaksinasi. Setelah orang tersebut aman tanpa penyakit
                serius. Maka diperbolehkan melakukan vaksinasi.</li>
            <li>Observasi. Setelah melakukan vaksinasi maka diwajibkan menunggu
                terlebih dahulu sekitar 30 menit di pos observasi hal ini
                bertujuan agar mengetahui efek samping seseorang yang telah
                melakukan vaksinasi seperti mengantuk, pusing atau suhu badan
                naik.</li>
        </ol>
        </p>
        <p> Dengan adanya vaksinasi ini memberikan banyak komentar positif,
            seperti ;
            “yang penting vaksinnya bagus dan halal. Seperti sinovac dan
            biofarma. Gratis juga. setelah melakukan vaksinasi agak nyeri pas di
            suntik tapi tidak ada efek pusing” ujar ustadh Romli salah satu
            pembimbing putra.
            “saya setuju saja dengan adanya vaksinasi ini. Efek samping yang
            saya rasakan cuma mengantuk” ucap pak ulin salah satu guru</p>',
            'kategori' => 'Vaksin',
            'tag' => 'Puasa',
            'author_id' => 2,
            'slug' => 'Vaksinasi-adalah-pemberian-asdasd',
            'foto' =>'foto_post/yai.jpg'
        ]);
        
        Author::create([
            'nama' => 'Linda Firza Yunaida',
            'jabatan' => 'Manager Asyarif',
            'des_singkat' => 'Seorang Santriwati yang suka menulis berbagai hal mengenai santri dan pondok pesantren dan juga teknologi',
            'instagram' => 'https://www.instagram.com/mirzaromi/',
            'facebook' => 'https://www.facebook.com/mirzaromi86',
            'twitter' => 'https://twitter.com/mirzaromi2',
            // 'user_id' =>1
        ]);
        Author::create([
            'nama' => 'Mirza Romi Setiawan',
            'jabatan' => 'Manager Asyarif',
            'des_singkat' => 'Seorang Santri yang suka menulis berbagai hal mengenai santri dan pondok pesantren dan juga teknologi',
            'instagram' => 'https://www.instagram.com/mirzaromi/',
            'facebook' => 'https://www.facebook.com/mirzaromi86',
            'twitter' => 'https://twitter.com/mirzaromi2',
            // 'user_id' => 2
        ]);

        RegisSiswaIzin::create([
            'nama_siswa' => 'Mirza Romi Setiawan',
            'slug' => 'mirza-romi-setiawan',
            'kelas' => 'XII-A',
            'angkatan' => 'Inverno',
            'jk' => 'l'
        ]);

        RegisSiswaIzin::create([
            'nama_siswa' => 'Fitri Nur Azizah',
            'slug' => 'fitri-nur-azizah',
            'kelas' => 'XII-E',
            'angkatan' => 'Inverno',
            'jk' => 'p'
        ]);

        RegisSiswaIzin::create([
            'nama_siswa' => 'Nabila Faza',
            'slug' => 'nabila-faza',
            'kelas' => 'XII-F',
            'angkatan' => 'Inverno',
            'jk' => 'p'
        ]);

        Perizinan::create([
            'regis_siswa_izin_id' => 1,
            'kategori' => 'GALAXY',
            'waktu_mulai' => '2021-01-13 06:00:00',
            'waktu_selesai' => '2021-01-13 09:00:00',
            'keterangan' => 'membuat dekorasi',
            'status_aktif' => 1,
            'pembina' => 'muhammad romli'
        ]);

        Perizinan::create([
            'regis_siswa_izin_id' => 2,
            'kategori' => 'OSPACE',
            'waktu_mulai' => '2021-01-12 06:00:00',
            'waktu_selesai' => '2021-01-12 09:00:00',
            'keterangan' => 'Rapat Rutinan',
            'status_aktif' => 0,
            'pembina' => 'ismi zahria'
        ]);

        Perizinan::create([
            'regis_siswa_izin_id' => 3,
            'kategori' => 'LKTI',
            'waktu_mulai' => '2021-01-13 06:00:00',
            'waktu_selesai' => '2021-01-14 09:00:00',
            'keterangan' => 'Mengerjakan Presentasi',
            'status_aktif' => 1,
            'pembina' => 'ismi zahria'
        ]);

        
    }
}
