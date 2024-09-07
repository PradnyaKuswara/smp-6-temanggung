<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $news = [];
    $prestasis = [];

    array_push($news, [
        'id' => 1,
        'title' => 'Latihan Massal Aubade HUT Ke 79 RI Kabupaten Temanggung 2024',
        'date' => '13-08-2024',
        'image' => asset('assets/images/Aubade.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 1]),
    ]);
    array_push($news, [
        'id' => 2,
        'title' => 'MbaGus Meriahkan HUT Ke-79 Republik Indonesia',
        'date' => '20-08-2024',
        'image' => asset('assets/images/berita/IMG-0257.jpg'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 2]),
    ]);
    array_push($news, [
        'id' => 3,
        'title' => 'Upacara Bendera HUT Ke-79 Republik Indonesia',
        'date' => '17-08-2024',
        'image' => asset('assets/images/berita/Capture.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 3]),
    ]);

    array_push($prestasis, [
        'id' => 1,
        'title' => 'Juara 1 UMUM Sepak Bola',
        'date' => '20 Februari 2022',
        'image' => asset('assets/images/juaraSepakBola.jpeg'),
        'description' => 'Juara 1 UMUM Sepak Bola adalah sebuah tim sepak bola yang memenangkan pertandingan sepak bola MGMP PIOK CUP XX Liga SMP/MTS 2022.
                                Gambar menunjukkan tim sepak bola yang tampak bersama-sama setelah memenangkan kompetisi tersebut.
                                Mereka mengenakan seragam biru dan menunjukkan ekspresi senang atas kemenangan mereka.',
        'url' => '#',
    ]);

    array_push($prestasis, [
        'id' => 2,
        'title' => 'Lomba Tari Juara 1',
        'date' => '12 Maret 2024',
        'image' => asset('assets/images/juaraTari.jpg'),
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
        'url' => '#',
    ]);

    array_push($prestasis, [
        'id' => 3,
        'title' => 'Lomba Festival Tunas Bahasa Ibu (FTBI)',
        'date' => '12 Maret 2024',
        'image' => asset('assets/images/lombafestival.jpg'),
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
        'url' => '#',
    ]);


    return view('index', [
        'news' => $news,
        'prestasis' => $prestasis,
    ]);
})->name('home');

Route::get('/download-area', function () {
    return view('pages.download-area');
})->name('download-area');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/berita', function () {
    $news = [];

    array_push($news, [
        'id' => 1,
        'title' => 'Latihan Massal Aubade HUT Ke 79 RI Kabupaten Temanggung 2024',
        'date' => '13-08-2024',
        'image' => asset('assets/images/Aubade.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 1]),
    ]);
    array_push($news, [
        'id' => 2,
        'title' => 'MbaGus Meriahkan HUT Ke-79 Republik Indonesia',
        'date' => '20-08-2024',
        'image' => asset('assets/images/berita/IMG-0257.jpg'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 2]),
    ]);
    array_push($news, [
        'id' => 3,
        'title' => 'Upacara Bendera HUT Ke-79 Republik Indonesia',
        'date' => '17-08-2024',
        'image' => asset('assets/images/berita/Capture.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 3]),
    ]);
    array_push($news, [
        'id' => 4,
        'title' => 'Gerakan Pembagian Bendera Merah Putih 2024',
        'date' => '01-08-2024',
        'image' => asset('assets/images/berita/spenasix.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 4]),
    ]);
    array_push($news, [
        'id' => 5,
        'title' => 'Penutupan MPLS SMP Negeri 6 Temanggung 2024',
        'date' => '01-08-2024',
        'image' => asset('assets/images/berita/penutupan.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 5]),
    ]);
    array_push($news, [
        'id' => 6,
        'title' => 'Hari Ke - 2 MPLS SMP Negeri 6 Temanggung 2024.2025',
        'date' => '23-07-2024',
        'image' => asset('assets/images/berita/s-MPN-6-TEMANGGUNG-1.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 6]),
    ]);


    return view('pages.berita', [
        'news' => $news,
    ]);
})->name('berita');

Route::get('/berita/{id}', function ($id) {
    $news = [];

    array_push($news, [
        'id' => 1,
        'title' => 'Latihan Massal Aubade HUT Ke 79 RI Kabupaten Temanggung 2024',
        'date' => '13-08-2024',
        'image' => asset('assets/images/Aubade.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia. Latihan yang berlangsung hari ini di alun-alun Kabupaten Temanggung tersebut diikuti dengan penuh semangat oleh para siswa yang mengenakan seragam sekolah lengkap.
                                Dengan membawa bendera merah putih, para siswa melatih keterampilan vokal dan koreografi mereka sebagai persiapan untuk tampil dalam upacara resmi pada 17 Agustus mendatang. Kegiatan Aubade ini merupakan bagian dari tradisi tahunan di Kabupaten Temanggung, di mana paduan suara siswa menjadi salah satu highlight dalam perayaan kemerdekaan.
                                    Latihan ini juga dihadiri oleh para guru dan pelatih, yang memastikan para siswa dapat memberikan penampilan terbaik mereka pada hari puncak peringatan. Partisipasi siswa dalam latihan massal ini mencerminkan semangat nasionalisme dan kebersamaan yang tinggi di kalangan generasi muda Kabupaten Temanggung.
                                        Perayaan HUT RI ke-79 di Kabupaten Temanggung diperkirakan akan berlangsung meriah dengan berbagai acara, termasuk upacara bendera, parade, dan penampilan Aubade yang telah dipersiapkan secara matang oleh para siswa ini',
        'url' => route('berita-detail', ['id' => 1]),
    ]);

    array_push($news, [
        'id' => 2,
        'title' => 'MbaGus Meriahkan HUT Ke-79 Republik Indonesia',
        'date' => '20-08-2024',
        'image' => asset('assets/images/berita/IMG-0257.jpg'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 2]),
    ]);
    array_push($news, [
        'id' => 3,
        'title' => 'Upacara Bendera HUT Ke-79 Republik Indonesia',
        'date' => '17-08-2024',
        'image' => asset('assets/images/berita/Capture.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 3]),
    ]);
    array_push($news, [
        'id' => 4,
        'title' => 'Gerakan Pembagian Bendera Merah Putih 2024',
        'date' => '01-08-2024',
        'image' => asset('assets/images/berita/spenasix.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 4]),
    ]);
    array_push($news, [
        'id' => 5,
        'title' => 'Penutupan MPLS SMP Negeri 6 Temanggung 2024',
        'date' => '01-08-2024',
        'image' => asset('assets/images/berita/penutupan.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 5]),
    ]);
    array_push($news, [
        'id' => 6,
        'title' => 'Hari Ke - 2 MPLS SMP Negeri 6 Temanggung 2024.2025',
        'date' => '23-07-2024',
        'image' => asset('assets/images/berita/s-MPN-6-TEMANGGUNG-1.png'),
        'description' => 'Temanggung, 13 Agustus 2024 — Ratusan siswa dari berbagai sekolah di Kabupaten Temanggung turut serta
                                dalam latihan massal Aubade untuk menyambut Hari Ulang Tahun ke-79 Republik Indonesia ....',
        'url' => route('berita-detail', ['id' => 6]),
    ]);

    $new = collect($news)->firstWhere('id', $id);

    return view('pages.detail-berita', ['new' => $new]);
})->name('berita-detail');

Route::get('/ekstra', function () {
    return view('pages.ekstra');
})->name('ekstra');

Route::get('/osis', function () {
    return view('pages.osis');
})->name('osis');

Route::get('/presensi', function () {
    return view('pages.presensi');
})->name('presensi');

// Route::get('/login', function () {
//     return view('pages.login');
// })->name('login');

Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');

Route::get('/prestasi', function () {
    return view('pages.prestasi');
})->name('prestasi');

Route::get('/sarana', function () {
    return view('pages.sarana');
})->name('sarana');

Route::get('/guru', function () {
    return view('pages.guru');
})->name('guru');

Route::get('/karyawan', function () {
    return view('pages.karyawan');
})->name('karyawan');

Route::get('/foto', function () {
    return view('pages.foto');
})->name('foto');

Route::get('/video', function () {
    return view('pages.video');
})->name('video');