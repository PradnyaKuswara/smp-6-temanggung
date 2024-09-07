@extends('layouts.app')

@section('title')
    Osis | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">OSIS</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/OSIS.jpg') }}" 
                             alt="Struktur Organisasi OSIS Candra Kirana 31 SMP Negeri 6 Temanggung 2022/2023" 
                             class="img-fluid" 
                             style="max-width: 50%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Ketua</h5>
                            <p class="card-text">
                                <strong>Nama:</strong> Intan Puji Anasti<br>
                                <strong>Kelas:</strong> 9A<br>
                                <strong>Email:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Wakil Ketua</h5>
                            <p class="card-text">
                                <strong>Nama:</strong> Septiyaning Tri Lestari<br>
                                <strong>Kelas:</strong> 9H<br>
                                <strong>Email:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris 1</h5>
                            <p class="card-text">
                                <strong>Nama:</strong> Fara Putri Artika<br>
                                <strong>Kelas:</strong> 8C<br>
                                <strong>Email:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bendahara 1</h5>
                            <p class="card-text">
                                <strong>Nama:</strong> Saenaluna Azzahra W.A.<br>
                                <strong>Kelas:</strong> 8B<br>
                                <strong>Email:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bendahara 2</h5>
                            <p class="card-text">
                                <strong>Nama:</strong> Annisa Faizatul Azahra<br>
                                <strong>Kelas:</strong> 8C<br>
                                <strong>Email:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
