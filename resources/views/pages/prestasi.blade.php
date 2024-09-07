@extends('layouts.app')

@section('title')
    Prestasi | SMP 6 Temanggung
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
    </style>
@endpush

@section('content')
    <div class="container" x-data="prestasiPage" data-aos="fade-up">
        <div class="pt-5 mt-5">
            <div class="d-flex justify-content-center">
                <h2>Prestasi</h2>
            </div>
            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
            <br>


            <div class="row mt-10 justify-content-center g-4" x-ref="prestasi-section">
                <template x-for="data in paginatedDatas()" :key="data.id">
                    <div class="col-md-4 mb-4">
                        <div class="card profile-card-5" style="height: 100%">
                            <div class="card-img-block ratio ratio-16x9">
                                <img class="card-img-top" x-bind:src="data.image" x-bind:alt="data.title">
                            </div>
                            <div class="card-body pt-0">
                                <h5 class="card-title" x-text="data.title"></h5>
                                <p class="card-text" x-text="data.description"></p>
                            </div>
                        </div>
                    </div>
                </template>
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
                    <button class="page-link " aria-label="Next" @click="nextPage()"
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
            Alpine.data('prestasiPage', () => ({
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
                            date: '20 Februari 2022 ',
                            image: `{{ asset('assets/images/juaraSepakBola.jpeg') }}`,
                            title: 'Juara 1 UMUM Sepak Bola',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 2,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/juaraTari.jpg') }}`,
                            title: 'Lomba Tari Juara 1',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 3,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/lombafestival.jpg') }}`,
                            title: 'Lomba Festival Tunas Bahasa Ibu (FTBI)',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 4,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/speech.jpeg') }}`,
                            title: 'Lomba Speech',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 5,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/poster.jpeg') }}`,
                            title: 'Lomba Desain Poster FLS2N',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 6,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/basket.jpeg') }}`,
                            title: 'Lomba Basket Putra',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 7,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/bola.jpeg') }}`,
                            title: 'Lomba Sepak Bola Liga 1 MGMP Cup',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 8,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/puisi.jpeg') }}`,
                            title: 'Lomba Puisi',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
                        },
                        {
                            id: 9,
                            date: '12 Maret 2024',
                            image: `{{ asset('assets/images/prestasi/folk.jpeg') }}`,
                            title: 'Lomba Folk Song Putri Pramuka Penggalang',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam idultricies ante. Fusce gravida erat in quam commodo, ut egestas lectus pretium. Donec convallis quam lacinia sapien semper porttitor. Interdum et malesuada fames ac ante ipsum primis infaucibus.',
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
                        this.$refs['prestasi-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['prestasi-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['prestasi-section'].scrollIntoView({
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
