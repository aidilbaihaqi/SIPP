<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | SIPP</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- More Fontawesome Icon --}}
    <script src="https://kit.fontawesome.com/e632a4a2d6.js" crossorigin="anonymous"></script>

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ Session::get('success') }}
                        </div>
                    @endif

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Gugatan - Selesai -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Data Perkara Gugatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dgs }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-gavel fa-2x text-gray-300"></i>
                                        </div>
                                        
                                    </div>
                                    <p>Status : <span class="text-success">Selesai</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Gugatan - Belum Selesai -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Data Perkara Gugatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dgbs }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-gavel fa-2x text-gray-300"></i>
                                        </div>
                                        
                                    </div>
                                    <p>Status : <span class="text-warning">Belum Selesai</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Permohonan - Selesai -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Data Perkara Permohonan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dps }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                        </div>
                                        
                                    </div>
                                    <p>Status : <span class="text-success">Selesai</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Permohonan - Belum Selesai -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 pt-2 py-0">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-1">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Data Perkara Permohonan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dpbs }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                        </div>
                                        
                                    </div>
                                    <p>Status : <span class="text-warning">Belum Selesai</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a style="text-underline: none; color: #b8791a;" href="#"><h6 class="m-0 font-weight-bold">Data Perkara Gugatan Terakhir</h6></a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>No Perkara</th>
                                                <th>Klasifikasi Perkara</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($gugatan as $g)
                                            <tr>
                                                <td class="text-gray-900">{{ $g->id }}</td>
                                                <td class="text-gray-900">{{ $g->nomor_perkara }}</td>
                                                <td>{{ $g->klasifikasi_perkara }}</td>
                                                <td>
                                                    @if ($g->status_perkara == 'belum selesai')
                                                        <a class="btn btn-sm btn-warning">Belum Selesai</a>
                                                    @endif
                                                    @if ($g->status_perkara == 'selesai')
                                                        <a class="btn btn-sm btn-success">Selesai</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a style="text-underline: none; color: #b8791a;" href="#"><h6 class="m-0 font-weight-bold">Data Perkara Permohonan Terakhir</h6></a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>No Permohonan</th>
                                                <th>Perkara Permohonan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($permohonan as $p)
                                            <tr>
                                                <td class="text-gray-900">{{ $p->id }}</td>
                                                <td class="text-gray-900">{{ $p->nomor_perkara }}</td>
                                                <td>{{ $p->klasifikasi_perkara }}</td>
                                                <td>
                                                    @if ($p->status_perkara == 'belum selesai')
                                                        <a class="btn btn-sm btn-warning">Belum Selesai</a>
                                                    @endif
                                                    @if ($p->status_perkara == 'selesai')
                                                        <a class="btn btn-sm btn-success">Selesai</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
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

</body>

</html>