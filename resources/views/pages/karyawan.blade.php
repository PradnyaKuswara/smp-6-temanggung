@extends('layouts.app')

@section('title')
    Karyawan | SMP 6 Temanggung
@endsection

@section('content')
    <div x-data="karyawanPage">
        <div class="container" data-aos="fade-up">
            <div class="py-5 my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="text-center">Karyawan</h2>
                        </div>
                        <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                        <br>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @php
                        $teachers = [
                            [
                                'name' => 'REGIAWANTI , S.M.',
                                'nip' => '197009202000032003',
                                'education' => 'Pendidikan S1 Tata Usaha',
                                'subject' => '',
                                'image' => 'regiwati.jpg',
                            ],
                            [
                                'name' => 'AMINI',
                                'nip' => '-',
                                'education' => 'Pendidikan SMA / Sederajat Tata Usaha',
                                'subject' => '',
                                'image' => 'amini.jpg',
                            ],
                            [
                                'name' => 'TANTI DARINA KUMALASARI',
                                'nip' => '-',
                                'education' => 'Pendidikan SMA / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'tanti.jpg',
                            ],
                            [
                                'name' => 'KUNTARTI, S.I.Pust.',
                                'nip' => '-',
                                'education' => 'S1 Tenaga Administrasi',
                                'subject' => '',
                                'image' => 'kuntarti.jpg',
                            ],
                            [
                                'name' => 'WINDA RIZKI',
                                'nip' => '-',
                                'education' => 'Pendidikan SMA / Sederajat Tata Usaha',
                                'subject' => '',
                                'image' => 'winda.jpg',
                            ],
                            [
                                'name' => 'Ema Laily Noor, A.Md.',
                                'nip' => '1199902112022022002',
                                'education' => 'Pendidikan D3 / Sederajat Tata Usaha',
                                'subject' => '',
                                'image' => 'ema.jpeg',
                            ],
                            [
                                'name' => 'Firamia Dyah Pawestri, S.Hum',
                                'nip' => '199803102022022001',
                                'education' => 'Pendidikan S1 Pustakawan',
                                'subject' => '',
                                'image' => 'firamia.jpeg',
                            ],
                            [
                                'name' => 'SARWOTO',
                                'nip' => '-',
                                'education' => 'Pendidikan SMP / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'sarwoto.jpg',
                            ],
                            [
                                'name' => 'SURANTO',
                                'nip' => '-',
                                'education' => 'Pendidikan SMA / Sederajat Tenaga Administrasi',
                                'subject' => '',
                                'image' => 'suranto.jpeg',
                            ],
                            [
                                'name' => 'SUYONO',
                                'nip' => '-',
                                'education' => 'Pendidikan SMP / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'suyono.jpg',
                            ],
                            [
                                'name' => 'SUSANTO',
                                'nip' => '-',
                                'education' => 'Pendidikan SMP / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'susanto.jpg',
                            ],
                            [
                                'name' => 'SUTIARTO',
                                'nip' => '-',
                                'education' => 'Pendidikan SD / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'sutiarto.jpg',
                            ],
                            [
                                'name' => 'Anggeria Alfi Karima, A.Md. S.I.',
                                'nip' => '-',
                                'education' => 'Pendidikan D3 / Sederajat Laboran',
                                'subject' => '',
                                'image' => 'rima.jpg',
                            ],
                            [
                                'name' => 'FRISKI FEBRIYANTO',
                                'nip' => '-',
                                'education' => 'Pendidikan SMA / Sederajat Bagian Umum',
                                'subject' => '',
                                'image' => 'friski.jpg',
                            ],
                        ];
                    @endphp

                    <template x-for="data in paginatedDatas()" :key="data.id">
                        <div class="col-md-3  mb-4">
                            <div class="card shadow-sm" style="height: 100%">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="avatar avatar-xl rounded-circle">
                                            <img alt="..." :src="`{{ asset('assets/images/karyawan') }}/${data.image}`"
                                                style="width: 120px; height: 120px;">
                                        </a>
                                    </div>
                                    <div class="text-center my-6">
                                        <!-- Title -->
                                        <a href="#" class="d-block h6 mt-2 mb-0" x-text="data.name"></a>
                                        <!-- Subtitle -->
                                        <span class="d-block text-sm text-muted mt-2" -text="data.nip"></span>
                                    </div>
                                    <!-- Stats -->
                                    <div class="d-flex flex-column">
                                        <p class="card-text"
                                            style="font-size: 0.85rem; border-top: 2px solid #ccc; padding-top: 10px;"
                                            x-text="data.education">
                                            <b></b>
                                        </p>
                                        <p class="card-text" style="font-size: 0.85rem;" x-text="data.subject"><b></b> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="my-5" x-show="totalPages() != 1">
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
            Alpine.data('karyawanPage', () => ({
                init() {
                    this.datas = this.initDatas(this.karyawan);
                },
                datas: [],
                currentPage: 1,
                perPage: 16,
                karyawan: @json($teachers),

                //dummy data
                initDatas: (karyawan) => {
                    const karyawanTemp = karyawan.map((data, index) => {
                        return {
                            id: index + 1,
                            ...data
                        }
                    });
                    return karyawanTemp;
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
                        this.$refs['guru-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['guru-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['guru-section'].scrollIntoView({
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
