<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets/images/favicon 1.png') }}" rel="icon" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">

    @stack('css')

    <style>
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
    </style>

    <title>@yield('title')</title>
</head>

<body x-data>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #3348BB;">
            <div class="container">
                <a class="navbar-brand " href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/Logo & Nama Sekolah.png') }}" alt="Logo" width="150"
                        height="45" class=" ">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 py-3 py-lg-0 small ">
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil Sekolah
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                                <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="{{ route('prestasi') }}">Prestasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('sarana') }}">Sarana</a></li>
                            </ul>
                        </li>
                        <li class=" dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SDM
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('guru') }}">Guru</a></li>
                                <li><a class="dropdown-item" href="{{ route('karyawan') }}">Karyawan</a></li>
                            </ul>
                        </li>
                        <li class=" dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Galeri
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('foto') }}">Foto</a></li>
                                <li><a class="dropdown-item" href="{{ route('video') }}">Video</a></li>
                            </ul>
                        </li>
                        <li class=" dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kesiswaan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('ekstra') }}">Ekstrakurikuler</a></li>
                                <li><a class="dropdown-item" href="{{ route('osis') }}">Osis</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a class="nav-link text-white" href="{{ route('berita') }}">Berita</a>
                        </li>

                        <template x-if="$store.app.isLogin">
                            <li class="">
                                <a class="nav-link text-white" href="{{ route('presensi') }}"
                                    target="_blank">Presensi
                                    Online</a>
                            </li>
                        </template>

                        <li class="">
                            <a class="nav-link text-white" href="{{ route('kontak') }}">Kontak</a>
                        </li>
                        <li class="">
                            <a class="nav-link text-white" href="{{ route('download-area') }}">Download</a>
                        </li>
                    </ul>
                    <div class="btn-login ms-lg-5 gy-2">
                        <template x-if="$store.app.isLogin">
                            <button type="button" class="btn border-1 border-warning text-white"
                                @click="$store.app.logout()">
                                Logout
                            </button>
                        </template>

                        <template x-if="!$store.app.isLogin">
                            <button type="button" class="btn border-1 border-warning text-white"
                                data-bs-toggle="modal" data-bs-target="#modal_login">
                                Login
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- modal login --}}
    <div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="modal_login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card shadow-xl" style="background-color: #3348BB;">
                    <img src="{{ asset('assets/images/Logo & Nama Sekolah.png') }}"
                        class="card-img-top mx-auto d-block mt-4" alt="..."
                        style="max-width: 35%; height: auto;">
                    <div class="card-body" style="padding-top: 50px;">
                        <!-- Form Login -->
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label" style="color: white;">Email</label>
                                <input x-model="$store.app.form.email" type="text"
                                    class="form-control form-control-lg" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: white;">Password</label>
                                <input x-model="$store.app.form.password" type="password"
                                    class="form-control form-control-lg" id="password" name="password" required>
                            </div>
                            <br>
                            <button type="button" x-data @click="$store.app.login()"
                                class="btn btn-warning text-white btn-lg btn-block"
                                style="width: 100%;">Login</button>
                        </form>
                        <!-- End Form Login -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="min-vh-100">
        @yield('content')
    </main>

    <footer>
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top"
         style="background-color: #3348BB">
        <div class="container">
            <div class="row align-items-center gap-5">
                <div class="col-md-6 border-end border-white text-center text-md-start">
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('assets/images/Logo & Nama Sekolah.png') }}" alt="Logo"
                             width="250" height="70">
                    </a>
                </div>

                <div class="col-md-5 text-center text-md-end text-white h5">
                    © Copyright 2019. All Rights Reserved By SMP 6 Temanggung
                    <div class="mt-2">
                        <a href="https://www.facebook.com/smpn6tmg/?locale=id_ID" target="_blank" class="text-white me-3">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/smpn6tmg_official/" target="_blank" class="text-white me-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('app', {
                init() {
                    this.isLogin = this.getLocalStorage() ? this.getLocalStorage() : false;
                },
                isLogin: false,
                form: {
                    email: '',
                    password: '',
                },

                setLocalStorage(key, value) {
                    localStorage.setItem(key, value);
                },

                getLocalStorage() {
                    return JSON.parse(localStorage.getItem('isLogin'));
                },

                login() {
                    const email = this.form.email;
                    const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (email == '') {
                        alert('Email tidak boleh kosong');
                        return;
                    }

                    if (!email.match(emailFormat)) {
                        alert('Email tidak valid');
                        return;
                    }

                    if (this.form.password === '') {
                        alert('Password tidak boleh kosong');
                        return;
                    }

                    const isLogin = true;

                    this.setLocalStorage('isLogin', isLogin);

                    window.location.href = '{{ route('home') }}';
                },

                logout() {
                    this.setLocalStorage('isLogin', false);
                    window.location.href = '{{ route('home') }}';
                },
            })
        })
    </script>

    @stack('scripts')
</body>

</html>
