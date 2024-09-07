@extends('layouts.auth')

@section('title')
    Presensi | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">Presensi Online</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-9 mx-auto">
                    <div class="card shadow-sm text-white mb-4 rounded-bottom" style="background-color: #3348BB;">
                        <div class="card-body text-center">
                            <p class="mb-1 text-white" id="currentDate"></p>
                            <h1 class="display-4 mb-3 text-white" id="currentTime"></h1>
                            <div class="d-flex justify-content-around">
                                <div class="text-center">
                                    <p class="mb-0 text-white">Jam Masuk</p>
                                    <h2 class="text-white">--:--</h2>
                                    <button class="btn btn-success animate__animated animate__pulse animate__infinite"><i
                                            class="fas fa-check-circle"></i> Absen Masuk</button>
                                </div>
                                <div class="text-center">
                                    <p class="mb-0 text-white">Jam Keluar</p>
                                    <h2 class="text-white">--:--</h2>
                                    <button class="btn btn-danger animate__animated animate__pulse animate__infinite"><i
                                            class="fas fa-times-circle"></i> Absen Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm text-white mb-4 rounded-bottom" style="background-color: #3348BB;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <p class="mb-1 text-white">Kamis, 18 Agustus 2020</p>
                                    <i class="fas fa-check-circle text-success"></i>
                                    <span class="ms-2 text-white">--:--</span>
                                </div>
                                <span class="text-white">di SMP 6 Temanggung</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-times-circle text-danger text-white"></i>
                                    <span class="ms-2 text-white">--:--</span>
                                </div>
                                <span class="text-white">di SMP 6 Temanggung</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const isLogin = JSON.parse(localStorage.getItem('isLogin'));

        if (isLogin == false || isLogin == null) {
            window.location.href = '/';
        }

        function updateTime() {
            const currentTimeElement = document.getElementById('currentTime');
            const currentDateElement = document.getElementById('currentDate');
            const now = new Date();

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const timeString = `${hours}:${minutes}`;
            currentTimeElement.textContent = timeString;

            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            const dayName = days[now.getDay()];
            const day = String(now.getDate()).padStart(2, '0');
            const monthName = months[now.getMonth()];
            const year = now.getFullYear();
            const dateString = `${dayName}, ${day} ${monthName} ${year}`;
            currentDateElement.textContent = dateString;
        }

        setInterval(updateTime, 1000);
        window.onload = updateTime;
    </script>

    <style>
        body {
            background: linear-gradient(135deg, #3348BB, #f9d423);
            /* Gradasi biru dan kuning */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 20px;
        }

        .card {
            position: relative;
            overflow: hidden;
        }
    </style>
@endsection
