@extends('layouts.app')

@section('title')
    Guru | SMP 6 Temanggung
@endsection

@section('content')
    <div x-data="guruPage">
        <div class="container" data-aos="fade-up">
            <div class="py-5 my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="text-center">Guru</h2>
                        </div>
                        <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                        <br>
                    </div>
                </div>
                <div class="row justify-content-center" x-ref="guru-section">
                    @php
                        $teachers = [
                            [
                                'name' => 'AGUS BUDI SUSILO, S.Pd., M.Pd.',
                                'nip' => '196707251990031008',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'Agus B.jpg',
                            ],
                            [
                                'name' => 'Drs. SUDIRMAN, M.Pd.',
                                'nip' => '196502181995121002',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'sudirman.jpg',
                            ],
                            [
                                'name' => 'Drs. FA. SUPRAPTO MN.,M.Pd.',
                                'nip' => '196510021994121002',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'suprapto.jpg',
                            ],
                            [
                                'name' => 'MUJIONO, A.Ma.Pd',
                                'nip' => '196311201988031007',
                                'education' => 'D2 / Sederajat',
                                'subject' => 'Guru Mata Pelajaran Matematika',
                                'image' => 'mujiono.jpg',
                            ],
                            [
                                'name' => 'Drs. DARKO MANGUNTORO, M.Si',
                                'nip' => '196603131995121002',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran Bahasa Indonesia',
                                'image' => 'darko.jpg',
                            ],
                            [
                                'name' => 'TRI SUEDI, S.Pd.',
                                'nip' => '196707111995121006',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran PPKn',
                                'image' => 'edi.jpg',
                            ],
                            [
                                'name' => 'Dra. SOIMAH',
                                'nip' => '196403261988032006',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran IPS',
                                'image' => 'soimah.jpg',
                            ],
                            [
                                'name' => 'Dra. SRI RATIH',
                                'nip' => '196509051997022003',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran IPS',
                                'image' => 'ratih.jpg',
                            ],
                            [
                                'name' => 'Dra. YAYUK MASRURIYAH, M.Pd.',
                                'nip' => '196801181997022001',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran Pendidkan Agama Islam & Budi Pekerti',
                                'image' => 'yayuk.jpg',
                            ],
                            [
                                'name' => 'Dra. ELFIRA DEWI KUNCORO RINI',
                                'nip' => '196802241995122003',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran PPKn',
                                'image' => 'elfira.jpg',
                            ],
                            [
                                'name' => 'INDRASWATI, S.Pd.',
                                'nip' => '196911202007012017',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Indonesia',
                                'image' => 'indraswati.jpg',
                            ],
                            [
                                'name' => 'SRI MULYANI, S.Pd.',
                                'nip' => '196906301997022004',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Prakarya',
                                'image' => 'sriMulyani.jpg',
                            ],
                            [
                                'name' => 'SRI MURTINI, S.Pd., M.Si',
                                'nip' => '196905231992032005',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'murtini.jpg',
                            ],
                            [
                                'name' => 'TITIK SUBANDIYAH, S.Pd.',
                                'nip' => '196902281995122002',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Inggris',
                                'image' => 'titikS.jpg',
                            ],
                            [
                                'name' => 'NUNG ROHIMATUL FARIDA, S.Pd',
                                'nip' => '197005251991032009',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Jawa',
                                'image' => 'nung.jpg',
                            ],
                            [
                                'name' => 'SRI HARYATI, S.Pd',
                                'nip' => '197004052006042013',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Indonesia',
                                'image' => 'sriHaryati.jpg',
                            ],
                            [
                                'name' => 'TRI HARTININGSIH, S.Pd.',
                                'nip' => '197005111995122002',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'triHar.jpg',
                            ],
                            [
                                'name' => 'ERMA ZULIASTUTI, S.Pd.',
                                'nip' => '197111051997022001',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Matematika',
                                'image' => 'erma.jpg',
                            ],
                            [
                                'name' => 'ETI SUSI ROCHJATI, S.Pd., M.Pd.',
                                'nip' => '197110172006042006',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran IPS',
                                'image' => 'eti.jpeg',
                            ],
                            [
                                'name' => 'ANI TURMIYATI, S.Pd',
                                'nip' => '197204181999032010',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran BK',
                                'image' => 'ani.jpg',
                            ],
                            [
                                'name' => 'AMBARWATI, S.Pd., M.M.Pd.',
                                'nip' => '197609172007012013',
                                'education' => 'Pendidikan S2',
                                'subject' => 'Guru Mata Pelajaran Bahasa Indonesia',
                                'image' => 'ambarwati.jpg',
                            ],
                            [
                                'name' => 'ANDRI RINI WAHYUNI, S.Pd',
                                'nip' => '197604182007012007',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Inggris',
                                'image' => 'andri.jpg',
                            ],
                            [
                                'name' => 'ROSANILA EKAWATI M.,S.Pd.',
                                'nip' => '197809212008012016',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Inggris',
                                'image' => 'rosanila.jpg',
                            ],
                            [
                                'name' => 'NIKEN LUKITANINGTYAS, S.Pd.',
                                'nip' => '197907132008012013',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Indonesia',
                                'image' => 'niken.jpg',
                            ],
                            [
                                'name' => 'WIWI PRISTIWATI, S.Pd',
                                'nip' => '197903032006042031',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Seni dan Budaya',
                                'image' => 'wiwi.jpg',
                            ],
                            [
                                'name' => 'WINARTI, S.Pd.',
                                'nip' => '198003052008012015',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Matematika',
                                'image' => 'winarti.jpg',
                            ],
                            [
                                'name' => 'DIAH HAYU CATURINGTYAS, S.Psi',
                                'nip' => '198011092010012012',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran BK',
                                'image' => 'diah.jpg',
                            ],
                            [
                                'name' => 'LENI WAHYU CAHYANINGRUM, S.Pd.',
                                'nip' => '198111012006042013',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran IPS',
                                'image' => 'leni.jpg',
                            ],
                            [
                                'name' => 'MUHAMMAD GHUFRAN MUJAB, S.Pd.I.',
                                'nip' => '198705172010011014',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Agama Islan & Budi Pekerti',
                                'image' => 'gufron.jpg',
                            ],
                            [
                                'name' => 'PUTUT JATMIKO,S.Pd.Kom.',
                                'nip' => '198708302019031004',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bimbingan Teknologi Informasi dan Komunikasi',
                                'image' => 'putut.jpg',
                            ],
                            [
                                'name' => 'ENI LESTIANA, S.Pd.',
                                'nip' => '198205012022212022',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran BK',
                                'image' => 'eni.jpg',
                            ],
                            [
                                'name' => 'PRIYO ANDWI UTOMO, S.Pd.Jas.',
                                'nip' => '198108142022211005',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Penjasorkes',
                                'image' => 'priyo.jpg',
                            ],
                            [
                                'name' => 'SUWARNYOTO, S.Pd.',
                                'nip' => '-',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Jawa',
                                'image' => 'suwarnyoto.jpg',
                            ],
                            [
                                'name' => 'SARWESTI DIAH PRIYANTINI, S.Pd.',
                                'nip' => '-',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Inggris',
                                'image' => 'sarwesti.jpg',
                            ],
                            [
                                'name' => 'AGESTI EKASARI, S.Pd',
                                'nip' => '199308202022212010',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Seni dan Budaya',
                                'image' => 'agesti.jpg',
                            ],
                            [
                                'name' => 'ALFIYAN BUDI PRASTIYO, S.Or.',
                                'nip' => '199509302022211005',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Penjasorkes',
                                'image' => 'alfian.jpg',
                            ],
                            [
                                'name' => 'BUDIYANTO, S.Pd.I.',
                                'nip' => '198601202022211013',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Agama Islam & Budi Pekerti',
                                'image' => 'budiyanto.jpg',
                            ],
                            [
                                'name' => 'FEBTIKA WULANINGRUM, S.Pd.',
                                'nip' => '1199202292023212019',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran IPA',
                                'image' => 'febtika.jpeg',
                            ],
                            [
                                'name' => 'HENING WISMISARI, S.Pd.',
                                'nip' => '198608012023212014',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Bahasa Inggris',
                                'image' => 'hening.jpeg',
                            ],
                            [
                                'name' => 'KHANIF RAMADLANI, S.Pd.',
                                'nip' => '198605202022211018',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran PPKn',
                                'image' => 'khanif.jpg',
                            ],
                            [
                                'name' => 'MAULITA EKA YULIASTUTI, S.Pd.',
                                'nip' => '199707272022212011',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran BK',
                                'image' => 'maulita.jpeg',
                            ],
                            [
                                'name' => 'MUDIYANTO, S.Pd.',
                                'nip' => '199509162023211003',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Matematika',
                                'image' => 'mudiyanto.png',
                            ],
                            [
                                'name' => 'SRI FATMAWATI, S.Pd',
                                'nip' => '197510132023212001',
                                'education' => 'Pendidikan S1',
                                'subject' => 'Guru Mata Pelajaran Matematika',
                                'image' => 'sri.jpeg',
                            ],
                        ];
                    @endphp
                    <template x-for="data in paginatedDatas()" :key="data.id">
                        <div class="col-md-3  mb-4">
                            <div class="card shadow-sm" style="height: 100%">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="avatar avatar-xl rounded-circle">
                                            <img alt="..." :src="`{{ asset('assets/images/guru') }}/${data.image}`"
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
            Alpine.data('guruPage', () => ({
                init() {
                    this.datas = this.initDatas(this.guru);
                },
                datas: [],
                currentPage: 1,
                perPage: 16,
                guru: @json($teachers),

                //dummy data
                initDatas: (guru) => {
                    const guruTemp = guru.map((data, index) => {
                        return {
                            id: index + 1,
                            ...data
                        }
                    });
                    return guruTemp;
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
