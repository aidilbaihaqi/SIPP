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
                        <h1 class="h3 mb-0 text-gray-800">Perdata Gugatan - Details</h1>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 mb-4">
                        <table class="table table-bordered bg-white">
                          <thead style="background-color: #b8791a;" class="text-white">
                            <tr>
                              <th>Nomor Perkara</th>
                              <th>Penggugat</th>
                              <th>Tergugat</th>
                              <th>Status Perkara</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{{ Str::ucfirst($data->nomor_perkara) }}</td>
                              <td>{{ Str::ucfirst($data->penggugat) }}</td>
                              <td>{{ Str::ucfirst($data->tergugat) }}</td>
                              <td>{{ Str::ucfirst($data->status_perkara) }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div style="background-color: #b8791a;" class="px-3 pt-2 pb-1 text-white">
                          <h6 style="font-weight: bold;">Data Umum</h6>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 mb-4">
                        <table class="table table-bordered bg-white">
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Tanggal Pendaftaran</td>
                            <td>{{ date('d M Y', strtotime($data->created_at)) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Klasifikasi Perkara</td>
                            <td>{{ Str::ucfirst($data->klasifikasi_perkara) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Nomor Perkara</td>
                            <td>{{ Str::ucfirst($data->nomor_perkara) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Penggugat</td>
                            <td>{{ Str::ucfirst($data->penggugat) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Kuasa Penggugat</td>
                            <td>{{ Str::ucfirst($data->kuasahukum_penggugat) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Tergugat</td>
                            <td>{{ Str::ucfirst($data->tergugat) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 250px; background-color: #b8791a;" class="text-white">Kuasa Hukum Tergugat</td>
                            <td>{{ Str::ucfirst($data->kuasahukum_tergugat) }}</td>
                          </tr>
                        </table>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div style="background-color: #b8791a;" class="px-3 pt-2 pb-1 text-white">
                          <h6 style="font-weight: bold;">Jadwal Sidang</h6>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 mb-4">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead style="background-color: #b8791a;" class="text-white">
                              <tr>
                                <th>Tanggal Sidang</th>
                                <th>Jam</th>
                                <th>Agenda</th>
                                <th>Ruangan</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white">
                              <tr>
                                <td>{{ $data->tanggal_sidang }}</td>
                                <td>{{ $data->jam }}</td>
                                <td>{{ $data->agenda }}</td>
                                <td>{{ $data->ruangan }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div style="background-color: #b8791a;" class="px-3 pt-2 pb-1 text-white">
                          <h6 style="font-weight: bold;">Hasil Sidang</h6>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="p-3 bg-white">
                          <p class="text-gray-900">{!! $data->hasil_sidang !!}</p>
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