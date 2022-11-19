<!doctype html>
<html lang="en">

<head>
    <title>Rental Mobil.Id | Masuk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="baru/css/style.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="image/logo2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>

    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-md-6 text-center mb-8">
                    <img class="img-responsive" src="images/baya daon pisah-04.png" width="200px">
                </div> --}}
            </div>
            <div class="row justify-content-center">
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">

                            <h1 class="mb-4">Masuk Akun Rental Mobil.Id</h1>
                        </div>
                        {{-- <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div> --}}
                    </div>
                    <form action="{{ route('login.post') }}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="label text-white" for="email">ALAMAT EMAIL</label>
                            <input type="text" id="email" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            {{-- <input type="text" class="form-control" placeholder="email" required> --}}
                        </div>
                        <div class="form-group mb-3">
                            <label class="label text-white" for="password">KATA SANDI</label>
                            <input type="password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            {{-- <input type="password" class="form-control" placeholder="Password" required> --}}
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Ingat Akun
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </form>
                    <p class="text-white text-center">Tidak Punya Akun? <a href="/registration">Daftar</a></p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
