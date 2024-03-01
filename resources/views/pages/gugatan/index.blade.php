<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perdata Gugatan | SIPP</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- More Fontawesome Icon --}}
    <script src="https://kit.fontawesome.com/e632a4a2d6.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"
        media="screen">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('./partials/_sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('./partials/_topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow d-sm-flex p-3 justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perdata Gugatan</h1>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ Session::get('success') }}
                        </div>
                    @endif

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Gugatan - Belum Selesai -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Data Perkara Gugatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $gbs }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-gavel fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                    <p>Status : <span class="text-warning">Belum Selesai</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Gugatan - Selesai -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Data Perkara Gugatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $gs }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-gavel fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                    <p>Status : <span class="text-success">Selesai</span></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 style="color: #b8791a;" class="m-0 font-weight-bold">Data Perkara Gugatan -
                                            Belum Selesai</h6>
                                        <a class="btn btn-sm btn-warning">Belum Selesai</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="TABLE_1" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>No Perkara</th>
                                                    <th>Tanggal Register</th>
                                                    <th>Klasifikasi Perkara</th>
                                                    <th>Para Pihak</th>
                                                    <th>Status Perkara</th>
                                                    <th>Lama Proses</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($data as $d)
                                                @if ($d->status_perkara == 'belum selesai')
                                                <tr>
                                                    <td class="text-gray-900">{{ $d->id }}</td>
                                                    <td class="text-gray-900">{{ $d->nomor_perkara }}</td>
                                                    <td>{{ date('d-m-y', strtotime($d->created_at)) }}</td>
                                                    <td>{{ Str::ucfirst($d->klasifikasi_perkara) }}</td>
                                                    <td>
                                                        <p>Penggugat : {{ Str::ucfirst($d->penggugat) }}</p>
                                                        <p>Tergugat : {{ Str::ucfirst($d->tergugat) }}</p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-warning">Belum Selesai</a>
                                                    </td>
                                                    <td>{{ $d->lama_proses }}</td>
                                                    <td>
                                                        <form action="{{ route('gugatan.destroy', $d->id) }}" method="post">
                                                            <a target="_blank" href="{{ route('gugatan.show', $d->id) }}" class="btn btn-md btn-secondary">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a target="_blank" href="{{ route('gugatan.edit', $d->id) }}" class="btn btn-md btn-primary">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>

                                                            @csrf
															@method('DELETE')
                                                            <button type="submit" class="btn btn-md btn-danger">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                                @empty
                                                    
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <a class="btn btn-sm btn-secondary d-block" target="_blank" href="{{ route('gugatan.create') }}">Tulis Perkara</a>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 style="color: #b8791a;" class="m-0 font-weight-bold">Data Perkara Gugatan -
                                            Selesai</h6>
                                        <a class="btn btn-sm btn-success">Selesai</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="TABLE_2" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>No Perkara</th>
                                                    <th>Tanggal Register</th>
                                                    <th>Klasifikasi Perkara</th>
                                                    <th>Para Pihak</th>
                                                    <th>Status Perkara</th>
                                                    <th>Lama Proses</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($data as $d)
                                                @if ($d->status_perkara == 'selesai')
                                                <tr>
                                                    <td class="text-gray-900">{{ $d->id }}</td>
                                                    <td class="text-gray-900">{{ $d->nomor_perkara }}</td>
                                                    <td>{{ date('d-m-y', strtotime($d->created_at)) }}</td>
                                                    <td>{{ Str::ucfirst($d->klasifikasi_perkara) }}</td>
                                                    <td>
                                                        <p>Penggugat : {{ Str::ucfirst($d->penggugat) }}</p>
                                                        <p>Tergugat : {{ Str::ucfirst($d->tergugat) }}</p>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-success">Selesai</a>
                                                    </td>
                                                    <td>{{ $d->lama_proses }}</td>
                                                    <td>
                                                        <form action="{{ route('gugatan.destroy', $d->id) }}" method="post">
                                                            <a target="_blank" href="{{ route('gugatan.show', $d->id) }}" class="btn btn-md btn-secondary">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a target="_blank" href="{{ route('gugatan.edit', $d->id) }}" class="btn btn-md btn-primary">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>

                                                            @csrf
															@method('DELETE')
                                                            <button type="submit" class="btn btn-md btn-danger">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                                @empty
                                                    
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('./partials/_footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script type="text/javascript" defer="defer">
        $(document).ready(function () {
            $("table[id^='TABLE']").DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "searching": false,
                "paging": false
            });
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>