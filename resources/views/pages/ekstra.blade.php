@extends('layouts.app')

@section('title')
    Ekstrakuikuler | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">Ekstrakuikuler</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                </div>
            </div>

            @php
                $extras = [
                    [
                        'name' => 'Sepak Bola',
                        'day' => 'Rabu',
                        'time' => '14.00 s.d. 16.00 wib',
                        'description' =>
                            'Memperkuat fisik dan mental untuk melahirkan para juara dan pemain profesional',
                        'average' => 75,
                        'image' => asset('assets/images/ekstrakurikuler/bola.jpg'),
                    ],
                    [
                        'name' => 'Komputer Grafis',
                        'day' => 'Selasa',
                        'time' => '',
                        'description' =>
                            'Komputer Grafis bertujuan mengembangkan potensi dalam TIK terutama Desain Grafis.',
                        'average' => 80,
                        'image' => asset('assets/images/ekstrakurikuler/komputerGrafis.jpg'),
                    ],
                    [
                        'name' => 'Paduan Suara',
                        'day' => 'Sabtu',
                        'time' => '',
                        'description' => 'Melatih siswa untuk mempunyai kepekaan estetika dalam berolah vokal.',
                        'average' => 70,
                        'image' => asset('assets/images/ekstrakurikuler/suara.jpg'),
                    ],
                    [
                        'name' => 'Seni Tari dan Teater',
                        'day' => '',
                        'time' => '',
                        'description' => 'Mengembangkan bakat peserta didik dan melestarikan budaya Bangsa.',
                        'average' => 65,
                        'image' => asset('assets/images/ekstrakurikuler/tari.jpg'),
                    ],
                    [
                        'name' => 'Olimpiade (IPA, IPS, Matematika)',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Mengembangkan diri dan kemampuan siswa untuk berprestasi dalam bidang matematika',
                        'average' => 70,
                        'image' => asset('assets/images/ekstrakurikuler/olimpiade.jpg'),
                    ],
                    [
                        'name' => 'Basket',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Mengembangkan bakat siswa dalam bidang olahraga basket serta memperkuat fisik dan mental.',
                        'average' => 75,
                        'image' => asset('assets/images/ekstrakurikuler/basket.jpg'),
                    ],
                    [
                        'name' => 'Conversation',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Menekankan pada kemampuan bercakap-cakap (conversation) dan listening bahasa Inggris.',
                        'average' => 90,
                        'image' => asset('assets/images/ekstrakurikuler/conversation.jpeg'),
                    ],
                    [
                        'name' => 'Band (Seni Musik)',
                        'day' => '',
                        'time' => '',
                        'description' => 'Mengembangkan bakat siswa dalam bidang seni musik khususnya band.',
                        'average' => 80,
                        'image' => asset('assets/images/ekstrakurikuler/band.jpeg'),
                    ],
                    [
                        'name' => 'Budaya Jawa dan Karawitan',
                        'day' => '',
                        'time' => '',
                        'description' => 'Mengasah kemampuan dan bakat siwa serta melestarikan budaya.',
                        'average' => 85,
                        'image' => asset('assets/images/ekstrakurikuler/budayaJawa.jpg'),
                    ],
                    [
                        'name' => 'Pramuka',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Membentuk karakter atau kepribadian dan akhlak yang mulia para generasi muda. Menanamkan rasa cinta tanah air dan bangsa di dalam diri generasi muda.',
                        'average' => 95,
                        'image' => asset('assets/images/ekstrakurikuler/pramuka.jpg'),
                    ],
                    [
                        'name' => 'Jurnalistik',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Mengasah kemampuan di bidang fkarya tulis, mengolah informasi, mengembangkan ide serta meningkatan kreatifitas.',
                        'average' => 85,
                        'image' => asset('assets/images/ekstrakurikuler/jurnalistik.jpg'),
                    ],
                    [
                        'name' => 'Pencak Silat',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Wadah bagi peserta didik yang ingin mengenal dan yang telah memilikii kemampuan dalam beladiri pencak silat.',
                        'average' => 80,
                        'image' => asset('assets/images/ekstrakurikuler/pencak silat.jpg'),
                    ],
                    [
                        'name' => 'Palang Merah Remaja (PMR)',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Ekstrakurikuler PMR untuk membentuk karakter anggota PMR berdasarkan tribakti dan prinsip kepalangmerahan untuk menjadi relawan masa depan.',
                        'average' => 90,
                        'image' => asset('assets/images/ekstrakurikuler/pmr.jpg'),
                    ],
                    [
                        'name' => 'Seni Baca Al Quran',
                        'day' => '',
                        'time' => '',
                        'description' =>
                            'Ekstrakurikuler Seni Baca Al-Qur\'an mengajarkan Seni Tilawah dan meningkatkan kemampuan siswa melantunkan ayat-ayat suci dengan benar dan indah.',
                        'average' => 85,
                        'image' => asset('assets/images/ekstrakurikuler/alquran.jpg'),
                    ],
                ];
            @endphp
            <div class="row py-5 gy-5 ">
                @foreach ($extras as $extra)
                    <div class="col-md-3 ">
                        <div class="card  border-top border-muted border-4  card-hover-with-icon" style="height: 100%;">
                            <div class="ratio ratio-16x9">
                                <img src="{{ $extra['image'] }}" class="card-img-top" alt="{{ $extra['name'] }}">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-0 ">{{ $extra['name'] }}</h5>
                                        <p class="mb-0 text-muted mt-2 small">Hari: {{ $extra['day'] }} / jam :
                                            {{ $extra['time'] }}</p>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <div class="">
                                        <p class="card-text flex-grow-1" style="text-align: justify;">
                                            {{ $extra['description'] }}</p>
                                    </div>
                                    <div class="progress mt-4">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $extra['average'] }}%" aria-valuenow="{{ $extra['average'] }}"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-2">
                                        <p class="mb-0">Rata Rata Nilai</p>
                                        <p class="mb-0">{{ $extra['average'] }}%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
