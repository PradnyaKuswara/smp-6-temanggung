@extends('layouts.app')

@section('title')
    Download | SMP 6 Temanggung
@endsection

@push('css')
    <!-- Ensure you have the Font Awesome library included in your project -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
        .table {
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        .table thead.thead-dark th {
            background-color: #6779df;
            color: #fff;
            border: none;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .table td,
        .table th {
            vertical-align: middle;
            border: none;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .dataTables_filter input {
            border-radius: 20px;
            border: 1px solid #ccc;
            padding: 5px 10px;
            width: 250px;
            margin-bottom: 15px;
        }

        .dataTables_filter {
            text-align: right;
        }

        .dataTables_filter label {
            font-weight: bold;
        }

        .custom-scrollbar {
            overflow: auto;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: rgb(51, 72, 187);
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:window-inactive {
            background: rgb(51, 72, 187);
        }
    </style>
@endpush

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="py-5 my-5">
            <div class="d-flex justify-content-center">
                <h2>Download</h2>
            </div>
            <div class="mx-auto my-3 border-bottom border-2 border-dark fw-bold" style="width: 4%"></div>

            <div class="table-responsive rounded-full mt-4">
                <table id="downloadTable"
                    class="table table-hover table-sm table-striped table-bordered text-center w-full"
                    style="width: 60%; margin: 0 auto;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15-12-2021</td>
                            <td>Logo SMP Negeri 6 Temanggung</td>
                            <td><a href="/downloads/alumni_report_2023.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>06-09-2021</td>
                            <td>BTIK KELAS 9 SEMESTER 1 MATERI 2 - SISTEM JARINGAN INTERNET</td>
                            <td><a href="/downloads/alumni_directory.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>06-09-2021</td>
                            <td>BTIK KELAS 9 SEMESTER 1 MATERI 1 - PENGERTIAN DAN SEJARAH INTERNET</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>07-09-2020</td>
                            <td>BTIK KELAS 7 SEMESTER 1 MATERI 4 - DAMPAK POSITIF DAN NEGATIF TIK</td>
                            <td><a href="/downloads/event_highlights.pdf" class="btn btn-sm btn-success" download>
                                    <i class="fas fa-download"></i>
                                </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Include jQuery and DataTables CSS/JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#downloadTable').DataTable({
                "paging": false,
                "searching": true,
                "lengthChange": false,
                "info": false,
                "scrollY": "400px",
                "scrollCollapse": true,
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Cari Judul"
                },
                "initComplete": function(settings, json) {
                    $('body').find('.dataTables_scrollBody').addClass("custom-scrollbar");
                },
            });
        });
    </script>
@endpush
