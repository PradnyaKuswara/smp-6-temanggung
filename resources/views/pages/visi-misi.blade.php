@extends('layouts.app')

@section('title')
    Visi & Misi | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">Visi & Misi</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                </div>
            </div>
            <div style="text-align: center;">
                <img src="{{ asset('assets/images/smp6.png') }}" alt="..." class="img-fluid" style="width: 75%; height: auto; margin-left: auto; margin-right: auto;">
            </div>

            <br>
            <h3 class="mt-3 text-center"><strong>Visi & Misi SMP Negeri 6 Temanggung</strong></h3>
            <br>
            <div style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; background-color: #ffffff;">
                <h3 style="margin-bottom: 10px; color: #333; text-transform: uppercase;">Visi</h3>
                <ul style="text-align: justify; list-style-type: none; padding-left: 0;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Religius, berkarakter, unggul dalam prestasi, dan berwawasan lingkungan dalam tatanan global</li>
                </ul>
            </div>
            <br>
            <div style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; background-color: #ffffff;">
                <h3 style="margin-bottom: 10px; color: #333; text-transform: uppercase;">Misi</h3>
                <ul style="text-align: justify; list-style-type: none; padding-left: 0;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Membina dan mengembangkan kehidupan beragam untuk meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Membina dan melestarikan budaya bangsa untuk membentuk peserta didik yang berakakter.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Melaksanakan pembelajaran efektif dan efisien dengan mengutamakan pengembangan potensi peserta didik secara optimal untuk mencapai prestasi yang gemilang.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Mengembangkan ilmu pengetahuan dan teknologi agar peserta didik menguasai IPTEK.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Melaksanakan pembinaan dan pengembangan bakat olahraga untuk memperoleh prestasi dan kesehatan jasmani.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Menumbuhkembangkan ketrampilan berbahasa, seni, dan budaya agar dapat berperan di era globalisasi.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Melatih dan mengembangkan ketrampilan berwirausaha agar terbentuk insan yang mandiri.</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Menumbuhkan kegemaran membaca dan atau menulis untuk mendukung Gerakan Literasi Sekolah (GLS).</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #4CAF50; margin-right: 10px;"></i>Menumbuh dan melaksanakan pelestarian fungsi, pencegahan pencemaran, dan kerusakan lingkungan untuk membentuk warga sekolah yang peduli lingkungan.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
