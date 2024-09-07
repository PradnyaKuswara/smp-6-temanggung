@extends('layouts.app')

@section('title')
    Sarana | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" x-data="saranaPage" data-aos="fade-right">
        <div class="py-5 my-5">
            <div class="d-flex justify-content-center">
                <h2>Sarana</h2>
            </div>
            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
            <br>

            {{-- @php
                $facilities = [
                    ['image' => 'perpus.jpg', 'name' => 'Perpustakaan SMP Negeri 6 Temanggung'],
                    ['image' => 'kelas.jpg', 'name' => 'Ruang Kelas VII'],
                    ['image' => 'aula.jpg', 'name' => 'Aula SMP Negeri 6 Temanggung'],
                    ['image' => 'gapura.jpg', 'name' => 'Gapura SMP Negeri 6 Temanggung'],
                    ['image' => 'greenHouse.jpg', 'name' => 'Green House'],
                    ['image' => 'taman.jpg', 'name' => 'Taman SMP Negeri 6 Temanggung'],
                    ['image' => 'gedungVII.jpg', 'name' => 'Gedung Pembelajaran Kelas VII'],
                    ['image' => 'kamarMandiGuru.jpg', 'name' => 'Kamar Mandi Guru'],
                    ['image' => 'Toserba.jpg', 'name' => 'Toko Serba Ada'],
                    ['image' => 'rakBukuPerpus.jpg', 'name' => 'Rak Buku "Perpustakaan Ki Hajar Dewantoro"'],
                    ['image' => 'Toserda.jpg', 'name' => 'Toserda SMP Neger 6 Temanggung'],
                    ['image' => 'laboraturium.jpg', 'name' => 'Laboraturium Komputer'],
                    ['image' => 'aulaIndraprasta.jpg', 'name' => 'Aula Indraprasta'],
                    ['image' => 'ruangPks.jpg', 'name' => 'Ruang UKS'],
                    ['image' => 'mushola.jpg', 'name' => 'Mushola SMP Negeri 6 Temanggung'],
                    ['image' => 'karawitan.jpg', 'name' => 'Ruang Karawitan'],
                    ['image' => 'musik.jpg', 'name' => 'Ruang Musik'],
                    ['image' => 'labIPA.jpg', 'name' => 'Laboraturium IPA'],
                    ['image' => 'lapFutsal.jpg', 'name' => 'Lapangan Futsal'],
                    ['image' => 'lapBasketdanTenis.jpg', 'name' => 'Lapangan Basket dan Tenis'],
                    ['image' => 'lapVolly.jpg', 'name' => 'Lapangan Volly'],
                ];

                $perPage = 6;
                $total = count($facilities);
                $pages = ceil($total / $perPage);
                $currentPage = request()->get('page', 1);
                $offset = ($currentPage - 1) * $perPage;
                $paginatedItems = array_slice($facilities, $offset, $perPage);
            @endphp --}}

            {{-- <div class="row">
                @foreach ($paginatedItems as $facility)
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-lg">
                            <img src="{{ asset('assets/images/sarana/' . $facility['image']) }}"
                                style="height: 250px; object-fit: cover; width: 100%;" class="card-img-top"
                                alt="{{ $facility['name'] }}">
                            <div class="card-body text-center">
                                <p class="card-text"><b>{{ $facility['name'] }}</b></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            <div class="row" x-ref="sarana-section">
                <template x-for="data in paginatedDatas()" :key="data.id">
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm">
                            <a :href="data.image" data-lightbox="sarana-gallery" :data-title="data.name">
                                <img :src="data.image" style="height: 250px; object-fit: cover; width: 100%;" class="card-img-top" :alt="data.name">
                            </a>
                            <div class="card-body text-center">
                                <p class="card-text" x-text="data.name"><b></b></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <!-- Menampilkan link pagination -->
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
    </div>
@endsection

@push('scripts')
    <script class="text/javasript">
        document.addEventListener('alpine:init', () => {
            Alpine.data('saranaPage', () => ({
                init() {
                    this.datas = this.initDatas();
                },
                datas: [],
                currentPage: 1,
                perPage: 6,

                //dummy data
                initDatas: () => {
                    return [{
                            id: 1,
                            image: '/assets/images/sarana/perpus.jpg',
                            name: 'Perpustakaan'
                        },
                        {
                            id: 2,
                            image: '/assets/images/sarana/kelas.jpg',
                            name: 'Ruang Kelas VII'
                        },
                        {
                            id: 3,
                            image: '/assets/images/sarana/aula.jpg',
                            name: 'Aula SMP Negeri 6 Temanggung'
                        },
                        {
                            id: 4,
                            image: '/assets/images/sarana/gapura.jpg',
                            name: 'Gapura SMP Negeri 6 Temanggung'
                        },
                        {
                            id: 5,
                            image: '/assets/images/sarana/greenHouse.jpg',
                            name: 'Green House'
                        },
                        {
                            id: 6,
                            image: '/assets/images/sarana/taman.jpg',
                            name: 'Taman SMP Negeri 6 Temanggung'
                        },
                        {
                            id: 7,
                            image: '/assets/images/sarana/gedungVII.jpg',
                            name: 'Gedung Pembelajaran Kelas VII'
                        },
                        {
                            id: 8,
                            image: '/assets/images/sarana/kamarMandiGuru.jpg',
                            name: 'Kamar Mandi Guru'
                        },
                        {
                            id: 9,
                            image: '/assets/images/sarana/Toserba.jpg',
                            name: 'Toko Serba Ada'
                        },
                        {
                            id: 10,
                            image: '/assets/images/sarana/rakBukuPerpus.jpg',
                            name: 'Rak Buku "Perpustakaan Ki Hajar Dewantoro"'
                        },
                        {
                            id: 11,
                            image: '/assets/images/sarana/Toserda.jpg',
                            name: 'Toserda SMP Neger 6 Temanggung'
                        },
                        {
                            id: 12,
                            image: '/assets/images/sarana/laboraturium.jpg',
                            name: 'Laboraturium Komputer'
                        },
                        {
                            id: 13,
                            image: '/assets/images/sarana/aulaIndraprasta.jpg',
                            name: 'Aula Indraprasta'
                        },
                        {
                            id: 14,
                            image: '/assets/images/sarana/ruangPks.jpg',
                            name: 'Ruang UKS'
                        },
                        {
                            id: 15,
                            image: '/assets/images/sarana/mushola.jpg',
                            name: 'Mushola SMP Negeri 6 Temanggung'
                        },
                        {
                            id: 16,
                            image: '/assets/images/sarana/karawitan.jpg',
                            name: 'Ruang Karawitan'
                        },
                        {
                            id: 17,
                            image: '/assets/images/sarana/musik.jpg',
                            name: 'Ruang Musik'
                        },
                        {
                            id: 18,
                            image: '/assets/images/sarana/labIPA.jpg',
                            name: 'Laboraturium IPA'
                        },
                        {
                            id: 19,
                            image: '/assets/images/sarana/lapFutsal.jpg',
                            name: 'Lapangan Futsal'
                        },
                        {
                            id: 20,
                            image: '/assets/images/sarana/lapBasketdanTenis.jpg',
                            name: 'Lapangan Basket dan Tenis'
                        },
                        {
                            id: 21,
                            image: '/assets/images/sarana/lapVolly.jpg',
                            name: 'Lapangan Volly'
                        }
                    ];
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
                        this.$refs['sarana-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['sarana-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['sarana-section'].scrollIntoView({
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
