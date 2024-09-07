@extends('layouts.app')

@section('title')
    Kontak | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="text-center">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
            <br>
            <div class="row">
                <div class="col-md-6 order-md-first">
                    <div class="mb-5 w-full">
                        <h3 class="fw-bold mb-4">Denah Lokasi</h3>
                        <iframe class="w-full "
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3753572107707!2d110.17390147476095!3d-7.311661092696256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7078784a92f89b%3A0xa18de862a62004f2!2sSMP%20N%206%20Temanggung!5e0!3m2!1sen!2sid!4v1709730672397!5m2!1sen!2sid"
                            height="500px" style="border: 1px solid #ccc; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);"
                            style="border: 1px solid #ccc; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 order-md-last">
                    <div class="mb-5">
                        <h3 class="fw-bold mb-4">Kontak</h3>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex flex-column gap-2 contact-info">
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>Email</span>
                                        <p>smpt6temanggung@gmail.com</p>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fa-solid fa-crosshairs"></i>
                                        <span>Kode Pos</span>
                                        <p>56213</p>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>No Telepon</span>
                                        <p>(0293) 491587</p>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Alamat</span>
                                        <p>Jl. Dr. Sutomo No. 32 Temanggung</p>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-id-card"></i>
                                        <span>NSS</span>
                                        <p>201036204002</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
