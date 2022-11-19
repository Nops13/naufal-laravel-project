@extends ('layout.app')

@section('header')
    <!--header sectiom start-->
    <header class="sticky">
        <a href="landing" class="logo">
            <h1><span class="fas fa-shield-virus"></span> MAP.<span>id</span></h1>
        </a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul class="navbar ">
                {{-- <li><a class="active" href="#home">Home</a></li> --}}
                {{-- <li><a href="#about">Tentang Vaksinasi</a></li> --}}
                {{-- <li><a href="#proses">Proses </a></li> --}}
                {{-- <li><a href="#peta">Persebaran</a></li> --}}
                {{-- <li><a href="#kipi">KIPI</a></li> --}}
                {{-- <li><a href="#contact">Contact</a></li> --}}
                <li><a href="#about">Beranda</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#contact">Info</a></li>
                <li><a href="profile_user">Account</a>

                    {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu2"> --}}
                    {{-- <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul> --}}
                </li>
            </ul>
        </nav>

    </header>
    <!--header sectiom ends-->
@endsection

@section('content')
    <!--Content sectiom start-->
    <!--home sectiom start-->
    <section class="home" id="home">

        <div class="content" src="image/dont-img.png">

            {{-- <h3><span>Monitoring Ayam</span></h3> --}}
            <h1>Monitoring Ayam Pedaging</h1>
            <h1>Pedaging</h1>
            <p>Platform Untuk Mengawasi Serta Melacak Data Usaha Close House Ayam Pedaging. Data Ditampilkan Secara General
                Ke Usaha Close House Ayam Pedaging</p>
            <a href="#proses" class="btn">Telusuri</a>
        </div>

        <div class="image">
            <img src="image/Group 423.svg" alt="">
        </div>

    </section>
    <!--home sectiom ends-->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center flex-wrap-reverse">

                <div class="col-md-6 content">
                    <h3>Apa <span> Fungsi </span>Monitoring Ayam ? </h3>

                    <p>Website Monitoring Ayam Pedaging Ini Memiliki Fungsi Yaitu
                        Untuk Memantau Serta Mencatat Data Dari Apa Yang Terjadi Pada Saat Pemeliharaan. Website Ini Hanya
                        Digunakan Oleh User Yaitu Pemilik Peternakan, Karyawan, Dan Admin.
                    </p>
                    <p>
                        Website Ini Memberi Banyak Keuntungan Serta Manfaat Pada User Karena Data Yang Disimpan Seperti
                        Jumlah Ayam, Perkembangan Ayam, Data Harian, Merupakan Data Yang Valid Dan Membuat User Tidak
                        Kesulitan Dalam Mengambil Sebuah Keputusan Saat Pemeliharaan.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="image/Komputer.PNG" class="w-100" alt="">
                </div>

            </div>
        </div>

    </section>


    <!--proses vaksinasi section starts-->
    <section class="proses" id="proses">
        <h3>Fitur Monitoring</h3>
        <div class="container">

            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="input_data_harian" class="profile">
                            <img src="image/v1.png">
                        </a>
                        <div>
                            <p><b>Input Data Harian</b></p>
                            <p>Laporan Dan Penginputan Data Setiap Hari Sesuai Keadaan Yang Ada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="informasi_obat" class="profile">
                            <img src="image/v2.png">
                        </a>
                        <div>
                            <p><b>Informasi Obat</b></p>
                            <p>Menginput Dan Melihat Jenis Obat Serta Tanggal Pemberian Yang Diberikan Ke Ayam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="informasi_pakan" class="profile">
                            <img src="image/v3.png">
                        </a>
                        <div>
                            <p><b>Informasi Pakan</b></p>
                            <p>Menginput Dan Melihat Jenis Pakan Ayam Serta Tanggal Pemberian Yang Diberikan Ke Ayam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="monitoring_ayam" class="profile">
                            <img src="image/v4.png">
                        </a>
                        <div>
                            <p><b>Monitoring Ayam</b></p>
                            <p>Melihat Proses Perkembangan Pada Ayam Terdapat Di Kandang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <div class="profile">
                            <img src="image/v5.png">
                        </div>
                        <div>
                            <p><b>Register Peternak</b></p>
                            <p>Melihat Proses Perkembangan Pada Ayam Terdapat Di Kandang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="kondisi_kandang" class="profile">
                            <img src="image/v6.png">
                        </a>
                        <div>
                            <p><b>Kondisi Kandang</b></p>
                            <p>Informasi Keadaan Kandang Terkini. (Suhu, Kelembaban udara, kipas).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--proses  section ends-->

    <!--Prevent section start-->
    <section class="prevent" id="prevent">

        <div class="row">

            <div class="content">
                <h1 class="heading">Jenis - Jenis <span>Pakan</span> Ayam</h1>
                <p>Berikut Adalah Beberapa Pakan Ayam Yang Sering Digunakan Untuk Peternak :</p>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Jagung Giling </li>
                    <li>Cangkang Keong</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Pelet</li>
                    <li>Tepung Ikan</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Bekatul</li>
                    <li>Bungkil Kedelai</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Limbah Gandum</li>
                    <li>Ubi Cincang</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Sorgum</li>
                    <li>Tepung Tulang</li>
                </ul>
            </div>

            <div class="image">
                <img src="image/do-img.png" alt="">
            </div>

        </div>


        <div class="row">

            <div class="image">
                <img src="image/dont-img.png" alt="">
            </div>

            <div class="content">
                <h1 class="heading">Jeni - Jenis <span>Vitamin </span>Ayam</h1>
                <p>Berikut adalah Beberapa Vitamin Ayam Yang Sering Digunakan Oleh Peternak :</p>
                <ul>
                    <li>Vitachick & Vitastress</li>
                    <li>Paket Ternak Ayam Nasa</li>
                    <li>Neobro : Vitamin Penggemuk Ayam Broiler</li>
                    <li>Tonikum Plus Gingseng Dan Taurine Penambah Stamina Ayam</li>
                    <li>Vitamin Egg Stimulan Untuk Ayam Petelur</li>
                    <li>Rooster Plus Untuk Ayam Sakit</li>
                </ul>
            </div>

        </div>

        <div class="row">

            <div class="content">
                <h1 class="heading">Jenis <span>Obat - Obatan </span>Ayam </h1>
                <p>Berikut Adalah Beberapa Obat Ayam Yang Sering Digunakan Oleh Peternak :</p>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Antibiotik </li>
                    <li>Pelindung Hati</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Antiparasit</li>
                    <li>Pengencer Dahak</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Antioksidial</li>
                    <li>Pemacu Pertumbuhan</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Antiinflamasi</li>
                    <li>Vitamin & Mineral</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li>Antipiretik</li>
                    <li>Vaksin</li>
                </ul>
            </div>

            <div class="image">
                <img src="image/do-img.png" alt="">
            </div>

        </div>

    </section>
    {{-- <div class="container2">

        <div class="image">
            <img class="img-fluid" src="https://corona.jakarta.go.id/img/logo/img-vaksin-doctor.svg" alt="">
        </div>

        <div class="d-none d-lg-block col-md-6" style="padding-top: 170px;padding-bottom: 170px;">
            <h3>Kenapa Harus Vaksin Covid-19?</h3>
            <h5>Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang.</h5>
            <p>Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara
                melawannya.</p>
            <p>Vaksinasi tidak hanya bertujuan untuk memutus rantai penularan penyakit, tetapi juga dalam jangka panjang
                untuk mengeliminasi bahkan membasmi penyakit itu sendiri.</p>
            <p>Apabila seseorang tidak menjalani vaksinasi, maka ia tidak akan memiliki kekebalan spesifik terhadap suatu
                penyakit.</p>
        </div>
        <div class="d-lg-none col-md-6" style="padding-bottom: 70px;">
            <h5>Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang.</h5>
            <p>Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara
                melawannya.</p>
            <p>Vaksinasi tidak hanya bertujuan untuk memutus rantai penularan penyakit, tetapi juga dalam jangka panjang
                untuk mengeliminasi bahkan membasmi penyakit itu sendiri.</p>
            <p>Apabila seseorang tidak menjalani vaksinasi, maka ia tidak akan memiliki kekebalan spesifik terhadap suatu
                penyakit.</p>
        </div>
    </div>
    </div>
    </div>

    </div>

    <!--Prevent section end-->
    <!-- about section ends -->


    <!--peta sectiom start-->
    <section class="peta" id="peta">
        <div class="here2">
            <h1>Persebaran Peta</h1>
            <h2>Covid-19 dan Vaksinasi</h2>
        </div>
        <div class="peta-img">
            <img src="image/peta.png" alt="">
        </div>
    </section>
    <!--peta sectiom end-->

    <!--proses KiPi starts-->
    <section class="kipi" id="kipi">
        <div class="here">
            <h1>KIPI</h1>
            <h2>Kejadian Ikutan Pasca Imunisasi</h2>

            <div class="container1">
                <div class="indicator">
                    <span class="btn1 active"></span>
                    <span class="btn1"></span>
                    <span class="btn1"></span>
                    <span class="btn1"></span>
                </div>
                <div class="testimonial1">
                    <div class="slide-row" id="slide">
                        <div class="slide-col">
                            <div class="user-text">
                                <h3>Apa itu KIPI?</h3>
                                <p>
                                    Kejadian Ikutan Pasca Imunisasi (KIPI) merupakan semua kejadian medik yang terjadi
                                    setelah imunisasi,
                                    menjadi perhatian dan diduga berhubungan dengan imunisasi.
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="image/kipi0.png" alt="">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>
                                    Secara umum, efek samping yang timbul dapat beragam pada umumnya ringan dan bersifat
                                    sementara,
                                    dan tidak selalu ada, serta bergantung pada kondisi tubuh.
                                    Efek seperti demam dan nyeri otot atau kemerahan pada bekas suntikan adalah hal yang
                                    wajar namun tetap perlu dimonitor.
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="image/kipi1.png" alt="">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>
                                    Manfaat vaksin jauh lebih besar dibandingkan risiko sakit karena terinfeksi bila tidak
                                    divaksin.
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="image/kipi2.png" alt="">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>
                                    Apabila terjadi Kejadian Ikutan Pasca Imunisasi (KIPI), dapat dilaporkan kepada
                                    Fasyankes tempat pemberian vaksinasi,
                                    kemudian akan ditindaklanjuti oleh focal point yang ada di masing-masing Dinas Kesehatan
                                    dan dikaji oleh
                                    Komite Pengkajian dan Penanggulangan KIPI yang ada di setiap daerah maupun Nasional.
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="image/kipi3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var btn = document.getElementsByClassName("btn1");
                    var slide = document.getElementById("slide");

                    btn[0].onclick = function() {
                        slide.style.transform = "translateX(0px)";
                        for (i = 0; 1 < 4; i++) {
                            btn1[i].classList.remove("active");
                        }
                        this.classList.add("active");
                    }
                    btn[1].onclick = function() {
                        slide.style.transform = "translateX(-800px)";
                        for (i = 0; 1 < 4; i++) {
                            btn1[i].classList.remove("active");
                        }
                        this.classList.add("active");
                    }
                    btn[2].onclick = function() {
                        slide.style.transform = "translateX(-1600px)";
                        for (i = 0; 1 < 4; i++) {
                            btn1[i].classList.remove("active");
                        }
                        this.classList.add("active");
                    }
                    btn[3].onclick = function() {
                        slide.style.transform = "translateX(-2400px)";
                        for (i = 0; 1 < 4; i++) {
                            btn1[i].classList.remove("active");
                        }
                        this.classList.add("active");
                    }
                </script>
            </div>
    </section>
    <!--proses slider ends-->

    <!-- scroll top  -->
    <a href="#home" class="scroll-top">
        <img src="image/up-arrow.png" alt="" style="width: 40px; height: 40px">
    </a>


@endsection --}}




@section('footer')
    <!--footer sectiom start-->
    <footer class="contact" id="contact">
        <div class="main-content">
            <div class="left box">
                <h2>Tentang Kami</h2>
                <div class="content">
                    <p>MAP.id adalah Web Untuk Memantau Serta Mencatat Data Dari Apa Yang Terjadi Pada Saat Pemeliharaan.
                        Website Ini Memberi Banyak Keuntungan Serta Manfaat Pada User Karena Data Yang Disimpan Seperti
                        Jumlah Ayam, Perkembangan Ayam, Data Harian, Merupakan Data Yang Valid Dan Membuat User Tidak
                        Kesulitan Dalam Mengambil Sebuah Keputusan Saat Pemeliharaan.
                    </p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>Alamat</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">SV IPB </span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+088-019876154</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">MAP.id@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Contact us</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn2">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <strong>Copyright &copy; 2021 <a href="#">Monitoring Ayam Pedaging</a>.</strong>
                All rights reserved.<br><b>RPL-PBW</b> Version
            </center>
        </div>
    </footer>
    <!--proses footer ends-->
@endsection
