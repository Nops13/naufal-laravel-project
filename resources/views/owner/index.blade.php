@extends ('layout.app')

@section('header')
    <!--header sectiom start-->
    <header class="sticky">
        <a href="/" class="logo">
            <h1><span class='fas fa-car' style='font-size:36px'></span> Rental Mobil.Id<span></span></h1>
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
            <h1>Rental Mobil.Id</h1>
            <p>Perusahaan yang menyewakan mobil untuk jangka waktu yang singkat, umumnya mulai dari beberapa jam sampai
                beberapa minggu. Sering diatur dengan banyak cabang lokal (yang memungkinkan pengguna untuk mengembalikan
                kendaraan ke lokasi yang berbeda), dan terutama terletak di dekat bandara atau daerah kota yang sibuk dan
                sering dilengkapi dengan situs web yang memungkinkan pemesanan online.</p>
            <a href="#proses" class="btn">Telusuri</a>
        </div>

        <div class="image">
            <svg width="365" height="338" viewBox="0 0 365 338" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M134.474 288.158H326.579C326.579 288.158 355.395 288.158 355.395 249.737C355.395 230.526 355.395 192.105 345.789 182.5C336.184 172.895 268.947 115.263 240.131 115.263H182.5C153.684 115.263 86.4473 182.5 86.4473 182.5L48.0263 192.105C48.0263 192.105 19.2105 201.711 19.2105 220.921V249.737C19.2105 249.737 9.60522 252.983 9.60522 268.534C9.60522 288.158 28.8157 288.158 28.8157 288.158H134.474Z"
                    fill="#0047FF" />
                <path
                    d="M201.711 134.474H182.5C163.29 134.474 105.658 192.105 105.658 192.105C105.658 192.105 153.655 189.579 201.711 187.12V134.474Z"
                    fill="#BBDDF5" />
                <path
                    d="M297.763 163.289C288.158 153.684 249.737 134.474 230.526 134.474H220.921V186.14C259.448 184.181 293.748 182.5 297.763 182.5C307.368 182.5 307.368 172.895 297.763 163.289Z"
                    fill="#BBDDF5" />
                <path
                    d="M144.079 278.553C144.079 299.771 126.876 316.974 105.658 316.974C84.4398 316.974 67.2368 299.771 67.2368 278.553C67.2368 257.335 84.4398 240.132 105.658 240.132C126.876 240.132 144.079 257.335 144.079 278.553Z"
                    fill="#292F33" />
                <path
                    d="M124.868 278.553C124.868 289.157 116.262 297.763 105.658 297.763C95.0536 297.763 86.4473 289.157 86.4473 278.553C86.4473 267.948 95.0536 259.342 105.658 259.342C116.262 259.342 124.868 267.948 124.868 278.553Z"
                    fill="#CCD6DD" />
                <path
                    d="M307.368 278.553C307.368 299.771 290.165 316.974 268.947 316.974C247.729 316.974 230.526 299.771 230.526 278.553C230.526 257.335 247.729 240.132 268.947 240.132C290.165 240.132 307.368 257.335 307.368 278.553Z"
                    fill="#292F33" />
                <path
                    d="M288.158 278.553C288.158 289.157 279.552 297.763 268.947 297.763C258.343 297.763 249.737 289.157 249.737 278.553C249.737 267.948 258.343 259.342 268.947 259.342C279.552 259.342 288.158 267.948 288.158 278.553Z"
                    fill="#CCD6DD" />
            </svg>


        </div>

    </section>
    <!--home sectiom ends-->

    <!-- about section starts  -->

    <!--proses vaksinasi section starts-->
    <section class="proses" id="proses">
        <h3>Fitur Monitoring Owner</h3>
        <div class="container">
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="pendataan_kendaraan/create" class="profile">
                            <img src="image/invest.png">
                        </a>
                        <div>
                            <p><b>Pendataan Kendaraan Inventaris</b></p>
                            <p>Mencatat Segala kendaraan yang akan dijadikan inventaris.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        {{-- <a href="monitoring_pemberian_obat_ayam" class="profile"> --}}
                        <a href="pendataan_kendaraan" class="profile">
                            <img src="image/datakendaraan.png">
                        </a>
                        <div>
                            <p><b>Stok Kendaraan</b></p>
                            <p>Menampilkan Stok kendaraan sewa yang tersedia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero">
                <div class="review-box">
                    <div class="card">
                        <a href="member" class="profile">
                            <img src="image/Membermek.png">
                        </a>
                        <div>
                            <p><b>Data Member</b></p>
                            <p>Menampilkan Data Member yang telah terdaftar pada Rental Mobil.Id.
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
                        <a href="kerugian" class="profile">
                            <img src="image/gantirugi.png">
                        </a>
                        <div>
                            <p><b>Data Kerusakan</b></p>
                            <p>Menampilkan Laporan Data kerusakan pada kendaraan.
                            </p>
                        </div>
                    </div>
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
                    <p>Rental Mobil.Id Dibuat dengan tujuan untuk dapat menangani proses transaksi senya menyewa mobil,
                        Paltform ini juga dibuat untuk memenuhi Ujian kompetensi Matakuliah WEB.
                    </p>
                    <div class="social">
                        <a href="https://www.facebook.com/jackie.ian.735"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://www.twitter.com/acupears"><span class="fab fa-twitter"></span></a>
                        <a href="https://www.instagram.com/naufal_gunawan66/"><span class="fab fa-instagram"></span></a>
                        <a href="https://youtube.com/channel/UCIhZucdtpNIoZImrOw_3lnA"><span
                                class="fab fa-youtube"></span></a>
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
                        <span class="text">RentalMobil.Id@gmail.com</span>
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
                <strong>Copyright &copy; 2021 J3D119092 Muhammad Naufal Gunawan</strong>
                All rights reserved.<br><b>RPL-PBW</b> Version
            </center>
        </div>
    </footer>
    <!--proses footer ends-->
@endsection
