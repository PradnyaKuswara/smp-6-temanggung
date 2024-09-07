@extends('layouts.app')

@section('title')
    Sejarah | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">Sejarah</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                </div>
            </div>
            <div style="text-align: center;">
                <img src="{{ asset('assets/images/smp6.png') }}" alt="..." class="img-fluid" style="width: 75%; height: auto; margin-left: auto; margin-right: auto;">
            </div>
            <br>
            <h3 class="mt-3 text-center"><b>Sejarah SMP Negeri 6 Temanggung</b></h3>
            <br>
            <div style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; background-color: #ffffff;">
                <p style="text-align: justify;">Secara historis dimulai dari ST (Sekolah Teknik) yang menyelenggarakan pendidikan
                ketrampilan beroperasi sejak tahun 1965, kemudian berdasarkan SK Mendikbud RI Nomor 0241/0/1992
                tanggal 15 mei 1992, STN 1 Temanggung beralih fungsi menjadi SMP bersama - sama dengan 76 ST Negeri
                dan 32 SKKP se-indonesia.</p>

                <p style="text-align: justify;">Tiga tahun kemudian, tepatnya 1994/1995 berdasarkan SK Mendikbud RI Nomor 0259/0/1994, sekolah ini diberi tugas tambahan
                sebagai SMP penyelenggara Program Keterampilan. Memasuki Tahun 2000/20001, SMP yang tertetak di pusat kota dengan luas tanah lebih dari 15.465 m2, berubah kembali menjadi SMP umum.</p>

                <p style="text-align: justify;">Melihat perjalan waktu yang cukup lama diatas, tentunya sekolah dengan jumlah siswa lebih dari 700 peserta didik ini
                menyimpan potensi sekaligus harapan untuk lebih maju dan bermutu, terbukti dari berbagai prestasi(akademis maupun non akademis) dari tingkat
                kabupaten sampai tingkat nasional. SMP Negeri 6 Temanggung memiliki akreditasi A(Unggul) dengan nilai akreditasi sebesar 94.
                SMP Negeri 6 Temanggung memiliki guru berjumlah 39 orang guru terdiri dari 31 PNS, 8 GTT. Sebagai pendukung Tenaga Administrasi terdiri dari
                3 PNS dan 10 PTT. Guru di SMP Negeri 6 Temanggung yang memiliki gelar Magister (S2) 8 orang dan gelar sarjana (S1) berjumlah 31 orang.</p>

                <p style="text-align: justify;">SMP Negeri 6 Temanggung memiliki 24 ruang pembelajaran, 6 Ruang Laboratorium, Ruang Kesenian, Ruang Olahraga menyatu dengan fitness center,
                Ruang karawitan, Ruang multimedia, Ruang Perpustakaan. Mulai tahun 2011/2012 SMP Negeri 6 Temanggung telah ditetapkan sebagai sekolah
                Standar Nasional. Sejak tahun pelajaran 2013/2014, SMP Negeri 6 Temanggung menggunakan kurikulum tahun 2013(kurtilas).</p>
            </div>
        </div>
    </div>
@endsection
