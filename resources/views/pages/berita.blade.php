@extends('layouts.app')

@section('title')
    Berita | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container" x-data="beritaPage" data-aos="fade-up">
        <div class="pt-5 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center">Berita</h2>
                    </div>
                    <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>
                    <br>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card bg-light p-3 m-0 w-full">
                        <div class="row gy-3 gy-md-0 align-items-md-center">
                            <div class="col-md-5">
                                <img src="{{ $news[0]['image'] }}" class="img-fluid rounded-start" alt="Why Choose Us?">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-0">
                                    <h2 class="card-title h4 mb-3">{{ $news[0]['title'] }}</h2>
                                    <span
                                        class="d-block text-muted text-sm font-semibold mt-2">{{ $news[0]['date'] }}</span>
                                    <p class="card-text lead mt-4">{{ $news[0]['description'] }}</p>
                                </div>
                                <div class="card-action mt-4">
                                    <a href="{{ $news[0]['url'] }}" class="btn btn-primary mt-4">Baca Selengkapnya >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" x-ref="berita-section">
                <template x-for="data in paginatedDatas()" :key="data.id">
                    <div class="col-md-4">
                        <div class="card border-primary">
                            <div class="p-2">
                                <div class="ratio ratio-16x9">

                                    <img x-bind:src="data.image" x-bind:alt="data.title">
                                </div>
                            </div>
                            <div class="card-body ">
                                <h3 class="h4" x-text="data.title"></h3>
                                <span class="d-block text-muted text-sm font-semibold mt-2" x-text="data.date"></span>
                                <p class="mt-4 mb-6" x-text="data.description">
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <a :href="data.url"
                                            class="text-heading text-primary-hover text-sm font-semibold">Baca Selengkapnya
                                            >></a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <span class="badge badge-lg bg-primary  text-white rounded-pill">
                                            Kategori Berita
                                        </span>
                                    </div>
                                </div>
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
            Alpine.data('beritaPage', () => ({
                init() {
                    this.datas = this.initDatas();
                },
                datas: [],
                currentPage: 1,
                perPage: 3,

                //dummy data
                initDatas: () => {
                    const tempDatas = @json($news);
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
                        this.$refs['berita-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['berita-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['berita-section'].scrollIntoView({
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
