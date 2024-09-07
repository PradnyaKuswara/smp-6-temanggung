@extends('layouts.app')

@section('title')
    Video | SMP 6 Temanggung
@endsection

@section('content')
    <div x-data="videoPage" data-aos="fade-up">
        <div class="container">
            <div class="pt-5 mt-5">
                <div class="d-flex justify-content-center">
                    <h2>Galeri Video</h2>
                </div>
                <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                <br>
                <div class="col-md-12">
                    <div class="card mb-3 shadow-lg">
                        <iframe width="100%" height="320"
                            src="https://www.youtube.com/embed/Ffd4yFqovy8?si=D3rGeawCrQ8pzQCl" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body text-center">
                            <p class="card-text"><b>Siswa SMP N 6 Temanggung mengikuti Karnaval Hari Anak 2023</b></p>
                        </div>
                    </div>
                </div>
                <div class="row g-4" x-ref="video-section">
                    <template x-for="data in paginatedDatas()" :key="data.id">
                        <div class="col-md-4">
                            <div class="card mb-3 shadow-lg" style="height: 100%">
                                <div class="ratio ratio-16x9">
                                    <img x-bind:src="data.image" class="card-img-top" x-bind:alt="data.title">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text" x-text="data.title"></p>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            x-bind:data-bs-target="`#modal_${data.id}`">
                                            Lihat Video
                                        </button>

                                        <div class="modal p-0" :id="`modal_${data.id}`" tabindex="1"
                                            :aria-labelledby="`modal_${data.id}`" aria-hidden="false">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content shadow-3">
                                                    <iframe width="100%" height="320" :src="data.urlVideo"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="my-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <button class="page-link" aria-label="Previous" @click="prevPage()" :disabled="currentPage == 1">
                        <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                    </button>
                </li>
                <template x-for="page in visiblePages()" :key="page.id">
                    <li class="page-item" x-bind:class="{ active: page.text === currentPage }">
                        <a class="page-link" x-text="page.text"
                            @click="page.text != '...' ? directNumberPage(page.text) : null"></a>
                    </li>
                </template>
                <li class="page-item">
                    <button class="page-link" aria-label="Next" @click="nextPage()"
                        :disabled="currentPage == totalPages()">
                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@push('scripts')
    <script class="text/javasript">
        document.addEventListener('alpine:init', () => {
            Alpine.data('videoPage', () => ({
                init() {
                    this.datas = this.initDatas();
                },
                datas: [],
                currentPage: 1,
                perPage: 6,

                //dummy data
                initDatas: () => {
                    const tempDatas = [{
                            id: 1,
                            image: `https://img.youtube.com/vi/onuBCPC1-Dc/hqdefault.jpg`,
                            title: 'Gerakan Pembagian Bendera Merah Putih 2024',
                            urlVideo: 'https://www.youtube.com/embed/onuBCPC1-Dc?si=lQEwuapePAOTanJz'
                        },
                        {
                            id: 2,
                            image: `https://img.youtube.com/vi/bb_JngyiyHk/hqdefault.jpg`,
                            title: 'Penutupan MPLS SMP Negeri 6 Temanggung 2024.2025',
                            urlVideo: 'https://www.youtube.com/embed/bb_JngyiyHk'
                        },
                        {
                            id: 3,
                            image: `https://img.youtube.com/vi/g98AMpY8KMs/hqdefault.jpg`,
                            title: 'Pembukaan MPLS SMP Negeri 6 Temanggung 2024.2025',
                            urlVideo: 'https://www.youtube.com/embed/g98AMpY8KMs'
                        },
                        {
                            id: 4,
                            image: `https://img.youtube.com/vi/O0BQujokuMk/hqdefault.jpg`,
                            title: 'Gelar Karya P5 dan HUT Ke-32 SMP Negeri 6 Temanggung',
                            urlVideo: 'https://www.youtube.com/embed/O0BQujokuMk'
                        },
                        {
                            id: 5,
                            image: `https://img.youtube.com/vi/3uw5q2zqS2Q/hqdefault.jpg`,
                            title: 'Sketsa Ramadhan - Menjaga Kualitas Makanan dan Minuman saat Berbuka dan Sahur',
                            urlVideo: 'https://www.youtube.com/embed/3uw5q2zqS2Q'
                        },
                        {
                            id: 6,
                            image: `https://img.youtube.com/vi/iZyhsefBVCE/hqdefault.jpg`,
                            title: 'Sketsa Ramadhan - Berinteraksi Dengan Al Quran di Bulan Ramadhan',
                            urlVideo: 'https://www.youtube.com/embed/iZyhsefBVCE'
                        },
                        {
                            id: 7,
                            image: `https://img.youtube.com/vi/f5ZK25qlpdc/hqdefault.jpg`,
                            title: 'Deklarasi Gerakan Sekolah Menyenangkan Spenasix',
                            urlVideo: 'https://www.youtube.com/embed/f5ZK25qlpdc'
                        },
                        {
                            id: 8,
                            image: `https://img.youtube.com/vi/m19ucUYhZ18/hqdefault.jpg`,
                            title: 'Pengambilan Hasil PLSM 1 SMP Negeri 6 Temanggung',
                            urlVideo: 'https://www.youtube.com/embed/m19ucUYhZ18'
                        },
                        {
                            id: 9,
                            image: `https://img.youtube.com/vi/bMyBlcDCasw/hqdefault.jpg`,
                            title: 'Pelatihan PKS SMP Negeri 6 Temanggung',
                            urlVideo: 'https://www.youtube.com/embed/bMyBlcDCasw'
                        },
                        {
                            id: 10,
                            image: `https://img.youtube.com/vi/tUp37N_rFg8/hqdefault.jpg`,
                            title: "'CERMIN ANKER' Sosialisasi Anti Kekerasan",
                            urlVideo: 'https://www.youtube.com/embed/tUp37N_rFg8'
                        },
                        {
                            id: 11,
                            image: `https://img.youtube.com/vi/7Hxtq4YYfQA/hqdefault.jpg`,
                            title: 'Pelantikan OSIS & MPK Candra Kirana 2023-2024',
                            urlVideo: 'https://www.youtube.com/embed/7Hxtq4YYfQA'
                        },
                        {
                            id: 12,
                            image: `https://img.youtube.com/vi/lb2mTgh9DhU/hqdefault.jpg`,
                            title: 'Mewujudkan Pendidikan Holistik Melalui Kegiatan Ekstrakurikuler',
                            urlVideo: 'https://www.youtube.com/embed/lb2mTgh9DhU'
                        },
                        {
                            id: 13,
                            image: `https://img.youtube.com/vi/vOEfDWCfZTY/hqdefault.jpg`,
                            title: 'Pelatihan Patroli Keamanan Sekolah',
                            urlVideo: 'https://www.youtube.com/embed/vOEfDWCfZTY'
                        },
                        {
                            id: 14,
                            image: `https://img.youtube.com/vi/zcWH0cV-H0s/hqdefault.jpg`,
                            title: 'PRAMUKA SISTEM BLOK Ke 2 SMP Negeri 6 Temanggung',
                            urlVideo: 'https://www.youtube.com/embed/zcWH0cV-H0s'
                        },
                        {
                            id: 15,
                            image: `https://img.youtube.com/vi/ybdFRWz5p9A/hqdefault.jpg`,
                            title: 'Persiapan Observasi Pembelajaran SMP Negeri 6 Temanggung',
                            urlVideo: 'https://www.youtube.com/embed/ybdFRWz5p9A'
                        },
                        {
                            id: 16,
                            image: `https://img.youtube.com/vi/f5UXuV2tu-g/hqdefault.jpg`,
                            title: "Tari 'SANCANG GUGAT' Pentas ASIX 8E",
                            urlVideo: 'https://www.youtube.com/embed/f5UXuV2tu-g'
                        },
                        {
                            id: 17,
                            image: `https://img.youtube.com/vi/QKeEz0EqZ0A/hqdefault.jpg`,
                            title: "FLASHMOB DANCE Pentas ASIX 8A",
                            urlVideo: 'https://www.youtube.com/embed/QKeEz0EqZ0A'
                        },
                        {
                            id: 18,
                            image: `https://img.youtube.com/vi/eU0qheEI5d8/hqdefault.jpg`,
                            title: "SERANA Duet Akustik Pentas ASIX 8A",
                            urlVideo: 'https://www.youtube.com/embed/eU0qheEI5d8'
                        },
                        {
                            id: 19,
                            image: `https://img.youtube.com/vi/o2XLlTi1Yng/hqdefault.jpg`,
                            title: "Tari Karsa Pentas ASIX 8A",
                            urlVideo: 'https://www.youtube.com/embed/o2XLlTi1Yng'
                        },
                        {
                            id: 20,
                            image: `https://img.youtube.com/vi/s9eaaJgZrpw/hqdefault.jpg`,
                            title: "'Sesuatu di Jogja' Pentas ASIK 8A",
                            urlVideo: 'https://www.youtube.com/embed/s9eaaJgZrpw'
                        },
                        {
                            id: 21,
                            image: `https://img.youtube.com/vi/m0AQy20zyqI/hqdefault.jpg`,
                            title: "Spenasix Jalan Sehat dan Aerobik di Alun-alun Temanggung",
                            urlVideo: 'https://www.youtube.com/embed/m0AQy20zyqI'
                        },
                        {
                            id: 22,
                            image: `https://img.youtube.com/vi/vN0C6ynzxm0/hqdefault.jpg`,
                            title: "Lomba Ceramah Peringatan Isra Miraj 1445 H",
                            urlVideo: 'https://www.youtube.com/embed/vN0C6ynzxm0'
                        },
                        {
                            id: 23,
                            image: `https://img.youtube.com/vi/BSIEbiNEUAg/hqdefault.jpg`,
                            title: "SPENASIX BERSINAR, 2 Ferbruari 2024",
                            urlVideo: 'https://www.youtube.com/embed/BSIEbiNEUAg'
                        },
                        {
                            id: 24,
                            image: `https://img.youtube.com/vi/48099rIgL-c/hqdefault.jpg`,
                            title: "Kuliah Jumat Pagi, 2 Februari 2024",
                            urlVideo: 'https://www.youtube.com/embed/48099rIgL-c'
                        },
                    ];
                    return tempDatas;
                },
                paginatedDatas() {
                    const start = (this.currentPage - 1) * this.perPage;
                    const end = start + this.perPage;

                    return this.datas.slice(start, end);
                },
                totalPages() {
                    return Math.ceil(this.datas.length / this.perPage);
                },
                nextPage() {
                    if (this.currentPage < this.totalPages()) {
                        this.$refs['video-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['video-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['video-section'].scrollIntoView({
                        behavior: 'smooth'
                    });
                    this.currentPage = page;
                },
                visiblePages() {
                    const total = this.totalPages();
                    const current = this.currentPage;

                    let pages = [];

                    if (total <= 1) {
                        for (let i = 1; i <= total; i++) {
                            pages.push({
                                id: i,
                                text: i
                            });
                        }
                    } else {
                        pages.push({
                            id: 1,
                            text: 1
                        });

                        let startPage, endPage;

                        if (total <= 5) {
                            startPage = 2;
                            endPage = total - 1;
                        } else {
                            if (current <= 3) {
                                startPage = 2;
                                endPage = 4;
                            } else if (current >= total - 2) {
                                startPage = total - 3;
                                endPage = total - 1;
                            } else {
                                startPage = current - 1;
                                endPage = current + 1;
                            }
                        }

                        if (startPage > 2) {
                            pages.push({
                                id: 'ellipsis-start',
                                text: '...'
                            });
                        }

                        for (let i = startPage; i <= endPage; i++) {
                            pages.push({
                                id: i,
                                text: i
                            });
                        }

                        if (endPage < total - 1) {
                            pages.push({
                                id: 'ellipsis-end',
                                text: '...'
                            });
                        }

                        pages.push({
                            id: total,
                            text: total
                        });
                    }
                    return pages;
                }
            }));
        });

        document.addEventListener('hidden.bs.modal', function(event) {
            const iframes = event.target.querySelectorAll('iframe');
            iframes.forEach(iframe => {
                iframe.src = iframe.src;
            });
        });
    </script>
@endpush
