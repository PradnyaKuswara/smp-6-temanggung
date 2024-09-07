@extends('layouts.app')

@section('title')
    Foto | SMP 6 Temanggung
@endsection

@section('content')
    <div x-data="fotoPage" data-aos="fade-up">
        <div class="container">
            <div class="pt-5 mt-5">
                <div class="d-flex justify-content-center">
                    <h2>Galeri Foto</h2>
                </div>
                <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                <br>
                <div class="row" x-ref="foto-section">
                    <template x-for="data in paginatedDatas()" :key="data.id">
                        <div class="col-md-4 g-4">
                            <div class="card d-flex flex-column mb-3 shadow-lg" style="height: 100%;">
                                <div class="ratio ratio-16x9">
                                    <img x-bind:src="data.image" class="card-img-top" x-bind:alt="data.title">
                                </div>
                                <div class="card-body d-flex flex-grow-1 flex-column justify-content-between text-center">
                                    <p class="card-text" x-text="data.title"></p>
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
                    <button class="page-link" aria-label="Next" @click="nextPage()" :disabled="currentPage == totalPages()">
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
            Alpine.data('fotoPage', () => ({
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
                            image: `{{ asset('assets/images/galeri-foto/karnaval-hari-anak-2015.jpg') }}`,
                            title: 'Siswa SMP N 6 Temanggung mengikuti Karnaval Hari Anak 2015',
                        },
                        {
                            id: 2,
                            image: `{{ asset('assets/images/galeri-foto/2.jpg') }}`,
                            title: 'WISUDA PURNA WIYATA 2019',
                        },
                        {
                            id: 3,
                            image: `{{ asset('assets/images/galeri-foto/img-0986.jpg') }}`,
                            title: 'Lepas Sambut Kepala SMP Negeri 6 Temanggung',
                        },
                        {
                            id: 4,
                            image: `{{ asset('assets/images/galeri-foto/galeri-event-karnaval-hari-anak-nasional.jpg') }}`,
                            title: 'Keikutsertaan SMPN 6 Temanggung pada karnaval Hari Anak Nasional',
                        },
                        {
                            id: 5,
                            image: `{{ asset('assets/images/galeri-foto/img-8062.jpg') }}`,
                            title: 'WISUDA PURNA WIYATA 2019',
                        },
                        {
                            id: 6,
                            image: `{{ asset('assets/images/galeri-foto/img-2145.jpg') }}`,
                            title: 'Festival Gulai 2019',
                        },
                        {
                            id: 7,
                            image: `{{ asset('assets/images/galeri-foto/yk-1288.jpg') }}`,
                            title: 'Juara Liga 1 MGMP Cup 2023',
                        },
                        {
                            id: 8,
                            image: `{{ asset('assets/images/galeri-foto/img-9903.jpg') }}`,
                            title: 'PARADE SENI MERDEKA SMP NEGERI 6 TEMANGGUNG 2019',
                        },
                        {
                            id: 9,
                            image: `{{ asset('assets/images/galeri-foto/img-9901.jpg') }}`,
                            title: 'PARADE SENI MERDEKA SMP NEGERI 6 TEMANGGUNG 2019',
                        },
                        {
                            id: 10,
                            image: `{{ asset('assets/images/galeri-foto/img-8780.jpg') }}`,
                            title: 'Lomba Agustusan',
                        },
                        {
                            id: 11,
                            image: `{{ asset('assets/images/galeri-foto/baksos-(2).jpg') }}`,
                            title: 'Bakti Sosial',
                        },
                        {
                            id: 12,
                            image: `{{ asset('assets/images/galeri-foto/gelar-karya-dan-seni-smp-negeri-6-temanggung-tahun-2022.jpg') }}`,
                            title: 'Gelar Karya dan Seni SMP Negeri 6 Temanggung Tahun 2022',
                        },
                        {
                            id: 13,
                            image: `{{ asset('assets/images/galeri-foto/pentas-seni-hut-30-smp-negeri-6-temanggung.jpg') }}`,
                            title: 'HUT 30 SMP Negeri 6 Temanggung',
                        },
                        {
                            id: 14,
                            image: `{{ asset('assets/images/galeri-foto/hqdefault.jpg') }}`,
                            title: 'PADUAN SUARA SMP NEGERI 6 TEMANGGUNG',
                        },
                        {
                            id: 15,
                            image: `{{ asset('assets/images/galeri-foto/pentas-seni-hut-30-smp-negeri-6-temanggung (1).jpg') }}`,
                            title: 'Pentas Seni HUT 30 SMP Negeri 6 Temanggung',
                        },
                        {
                            id: 16,
                            image: `{{ asset('assets/images/galeri-foto/pemilihan-ketua-dan-wakil-ketua-osis-smp-negeri-6-temanggung-tahun-2022-(1).jpg') }}`,
                            title: 'Pemilihan Ketua dan Wakil Ketua OSIS SMP Negeri 6 Temanggung Tahun 2022',
                        },
                        {
                            id: 17,
                            image: `{{ asset('assets/images/galeri-foto/img-9788.jpg') }}`,
                            title: 'PARADE SENI MERDEKA SMP NEGERI 6 TEMANGGUNG 2019',
                        },
                        {
                            id: 18,
                            image: `{{ asset('assets/images/galeri-foto/sosis-bnn-(4).jpg') }}`,
                            title: 'SOSIALISASI BNN TEMANGGUNG',
                        },
                        {
                            id: 19,
                            image: `{{ asset('assets/images/galeri-foto/1.jpeg') }}`,
                            title: 'EVALUASI SUPERVISI AKADEMIK DALAM PENYUSUNYAN SILABUS, RPP DAN KUNJUNGAN KELAS || TANGGAL 21 OKTOBER 2020 (1)',
                        },
                        {
                            id: 20,
                            image: `{{ asset('assets/images/galeri-foto/2.jpeg') }}`,
                            title: 'EVALUASI SUPERVISI AKADEMIK DALAM PENYUSUNYAN SILABUS, RPP DAN KUNJUNGAN KELAS || TANGGAL 21 OKTOBER 2020 (2)',
                        },
                        {
                            id: 21,
                            image: `{{ asset('assets/images/galeri-foto/3.jpeg') }}`,
                            title: 'EVALUASI SUPERVISI AKADEMIK DALAM PENYUSUNYAN SILABUS, RPP DAN KUNJUNGAN KELAS || TANGGAL 21 OKTOBER 2020 (3)',
                        },
                        {
                            id: 22,
                            image: `{{ asset('assets/images/galeri-foto/dsc-0441.jpg') }}`,
                            title: 'Upacara Hari Guru Nasional',
                        },
                        {
                            id: 23,
                            image: `{{ asset('assets/images/galeri-foto/bola-basket-2.jpg') }}`,
                            title: 'Juara 2 MGMP Cup Bola Basket 2022',
                        },
                        {
                            id: 24,
                            image: `{{ asset('assets/images/galeri-foto/img-2040.jpg') }}`,
                            title: 'Gelar Karya 2-1',
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
                        this.$refs['foto-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['foto-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['foto-section'].scrollIntoView({
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
    </script>
@endpush
