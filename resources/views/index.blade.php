@extends('layouts.app')


@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('title')
    Beranda | SMP 6 Temanggung
@endsection

@push('css')
    <style>
        .profile-card-5 {
            margin-top: 20px;
            border-color: #3348BB;
        }

        .profile-card-5 .btn {
            border-radius: 2px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 7px 20px;
        }

        .profile-card-5 .card-img-block {
            width: 91%;
            margin: 0 auto;
            position: relative;
            top: -10px;
        }

        .profile-card-5 .card-img-block img {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(38, 27, 196, 0.63);
        }

        .profile-card-5 h5 {
            color: #3348BB;
            font-weight: 600;
        }

        .profile-card-5 p {
            font-size: 14px;
        }

        .profile-card-5 .btn-primary {
            background-color: #3348BB;
            border-color: #3348BB;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <section class="jumbotron ">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <div class="swiper-slide ">
                    <img src="{{ asset('assets/images/background-sekolah.png') }}" class="img-fluid " alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/background-sekolah.png') }}" class="img-fluid "alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-prev"></div>                                                                                                       <div class="swiper-button-next"></div> -->
        </div>
    </section>

    <section class="pt-5" id="introduce" data-aos="fade-up">
        <div class="container mb-3">
            <div class="card mb-3 shadow-lg" style="background-color: #3348BB;">
                <div class="row align-items-center ">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/guru/Agus B.jpg') }}" class="img-fluid h-100 w-100 rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-white ">
                            <h5 class="card-title text-white h4">Sambutan Kepala Sekolah</h5>
                            <p class="card-text">Assalaamualaikum Warahmatullahi Wabarakatuh</p>
                            <p class="card-text  mt-4" style="text-align: justify;">Dengan mengucapkan segala puji ke
                                hadirat
                                Allah SWT, disertai rasa syukur
                                karena dengan rahmat, dan karunia-Nya lah akhirnya website sekolah ini dapat kami perbaharui
                                dengan domain www.smpn6tmg.sch.id.</p>
                            <p class="card-text" style="text-align: justify;">Saya ucapkan selamat datang di website resmi
                                SMP Negeri 6 Temanggung.
                                Perkembangan teknologi informasi (TI) khususnya teknologi internet berkembang dengan sangat
                                pesat dan memberikan banyak manfaat kususnya bagi dunia pendidikan pada saat ini.
                                Pengelolaan website untuk sekolah ini merupakan salah satu langkah bagi sekolah untuk
                                memiliki wadah atau media guna digitalilasi pembelajaran. Selain itu, website sekolah dapat
                                dimanfaatkan sebagai sumber informasi bagi guru, karyawan, siswa, orang tua/wali murid serta
                                masyarakat umum untuk dapat mengakses seluruh informasi tentang kondisi sekolah dengan
                                segala kegiatan dalam melaksanakan proses pendidikan dan upaya perkembangannya</p>
                            <p class="card-text mt-4">Wassalamu alaikum Warahmatullahi Wabarakatuh.</p>
                            <p class="card-text">Kepala SMP Negeri 6 Temanggung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5" id="news">
        <div class="container mb-3 py-5">
            <div class="d-flex justify-content-center">
                <span class="p-3 rounded-pill text-center text-white fw-bold" style="background-color: #3348BB">
                    Berita terbaru
                </span>
            </div>

            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style=" width: 4%"></div>

            <div class="row py-5">
                @php
                    $aosDelay = 200;
                @endphp
                @foreach ($news as $new)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $aosDelay }}">
                        <div class="card border-primary">
                            <div class="p-2">
                                <div class="ratio ratio-16x9">
                                    <img alt="{{ $new['title'] }}" src="{{ $new['image'] }}" class="">
                                </div>
                            </div>
                            <div class="card-body ">
                                <h3 class="h4">{{ $new['title'] }}</h3>
                                <span class="d-block text-muted text-sm font-semibold mt-2">{{ $new['date'] }}</span>
                                <p class="mt-4 mb-6">
                                    {{ $new['description'] }}
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <a href="{{ $new['url'] }}"
                                            class="text-heading text-primary-hover text-sm font-semibold">Baca Selengkapnya
                                            >></a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <span class="badge badge-lg bg-primary  text-white rounded-pill">
                                            Kategori Berita
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $aosDelay = $aosDelay + 100;
                    @endphp
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('berita') }}" class="p-3 rounded text-center text-decoration-none"
                    style="color:black; border: 3px solid #3348BB;">
                    <b>Tampilkan Semua Berita</b>
                </a>
            </div>
        </div>
    </section>

    <section class="pt-5" id="ekstrakulikuler" data-aos="fade-up" data-aos-delay="200">
        <div class="container mb-5 py-0">
            <div class="d-flex justify-content-center">
                <span class="p-3 rounded-pill text-center text-white fw-bold" style="background-color: #3348BB">
                    Ekstrakuikuler
                </span>
            </div>

            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style=" width: 4%"></div>

            <div class="row py-5">
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #307AD5;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/Basketball Player.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold ">Basket</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #E96254;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/Badminton Player.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold">Badminton</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #92278F;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/Volleyball.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold">Voli</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #F9BD44;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/scout.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold">Pramuka</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #EA54B3;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/Goalkeeper With Net.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold">Futsal</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background: #49C8DB;">
                        <div class="card-body">
                            <a href="#"
                                class="d-flex flex-column justify-content-center align-items-center text-decoration-none">
                                <img src="{{ asset('assets/images/Soccer Player.png') }}" class="img-fluid rounded"
                                    alt="" style="height: 100px;">
                                <h4 class="text-white fw-bold">Sepak Bola</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5" id="prestasi" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <div class="container mb-5 py-0">
            <div class="d-flex flex justify-content-center">
                <span class="p-3 rounded-pill text-center text-white fw-bold" style="background-color: #3348BB">
                    Prestasi
                </span>
            </div>

            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style=" width: 4%"></div>

            <div class="row py-5">
                @foreach ($prestasis as $prestasi)
                    <div class="col-md-4 mb-4">
                        <div class="card profile-card-5" style="height: 100%;">
                            <div class="card-img-block ratio ratio-16x9">
                                <img class="card-img-top" src="{{ $prestasi['image'] }}" x-bind:alt="data.title">
                            </div>
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ $prestasi['title'] }}</h5>
                                <p class="card-text">{{ $prestasi['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('prestasi') }}" class="p-3 rounded text-center text-decoration-none"
                    style="color:black; border: 3px solid #3348BB;">
                    <b>Tampilkan Semua Prestasi</b>
                </a>
            </div>
    </section>

    <section class="pt-5" id="agenda" data-aos="fade-right">
        <div class="container py-0 mb-5 my-5">
            <div class="d-flex flex justify-content-center">
                <span class="p-3 rounded-pill text-center text-white fw-bold" style="background-color: #3348BB">
                    Agenda Kegiatan
                </span>
            </div>

            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style=" width: 4%"></div>

            <br>

            <iframe
                src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&ctz=Asia%2FJakarta&showTitle=0&showNav=1&showDate=1&showPrint=0&showTabs=0&showCalendars=0&showTz=0"
                style="border: 0; width: 100%; height: 500px;" frameborder="0" scrolling="no"></iframe>

            <div class="d-flex ms-3 gap-5 align-items-center mb-3 mt-5">
                <div class="row align-items-center p-2 rounded-pill text-white" style="background-color: #3348BB">
                    <div class="col-md-6 border-end border-white text-center border-warning">
                        20
                    </div>
                    <div class="col-md-6">
                        Agu 2024
                    </div>
                </div>
                <p class="fw-bold">Melakukan Gladi Bersih Di sekolah bersama anak kelas 8 </p>
            </div>
            <div class="d-flex ms-3 gap-5 align-items-center mb-3">
                <div class="row align-items-center p-2 rounded-pill text-white" style="background-color: #3348BB">
                    <div class="col-md-6 border-end border-white text-center border-warning">
                        20
                    </div>
                    <div class="col-md-6">
                        Agu 2024
                    </div>
                </div>
                <p class="fw-bold">Melakukan Gladi Bersih Di sekolah bersama anak kelas 8 </p>
            </div>
            <div class="d-flex ms-3 gap-5 align-items-center mb-3">
                <div class="row align-items-center p-2 rounded-pill text-white" style="background-color: #3348BB">
                    <div class="col-md-6 border-end border-white text-center border-warning">
                        20
                    </div>
                    <div class="col-md-6">
                        Agu 2024
                    </div>
                </div>
                <p class="fw-bold">Melakukan Gladi Bersih Di sekolah bersama anak kelas 8 </p>
            </div>
        </div>
    </section>
    <section class="pt-5" id="saran" data-aos="fade-up">
        <div class="container py-5 mb-5">
            <div class="d-flex justify-content-center">
                <span class="p-3 rounded-pill text-center text-white fw-bold" style="background-color: #3348BB">
                    Kotak Saran
                </span>
            </div>

            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>

            <div class="row flex justify-content-center mx-4">
                <h2 class="font-bold text-center">Kami ingin mendengar saran Anda!</h2>
                <div class="col-md-8 mt-4">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" id="nama"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukan Email" id="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" placeholder="Masukan Nomor Telepon"
                                id="telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Masukan Pesan " required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full"
                            style="background-color: #3348BB; border-color: #3348BB;">
                            Kirim Pesan <i class="fa-solid fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        const swiper = new Swiper('.mySwiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            autoplay: {
                delay: 3000,
            },
        });
    </script>
@endpush
