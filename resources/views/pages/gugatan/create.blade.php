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
                        <h1 class="h3 mb-0 text-gray-800">Perdata Gugatan - Tulis Perkara</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow px-3 py-2">
                                <form action="{{ route('gugatan.store') }}" method="post">
                                    @csrf 

                                    <div class="form-group mb-3">
                                        <label for="nomor_perkara" class="text-gray-900">Nomor Perkara</label>
                                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="klasifikasi_perkara" class="text-gray-900">Klasifikasi Perkara</label>
                                        <input type="text" class="form-control" id="klasifikasi_perkara" name="klasifikasi_perkara" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="penggugat" class="text-gray-900">Penggugat</label>
                                        <input type="text" class="form-control" id="penggugat" name="penggugat" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kuasahukum_penggugat" class="text-gray-900">Kuasa Hukum Penggugat</label>
                                        <input type="text" class="form-control" id="kuasahukum_penggugat" name="kuasahukum_penggugat" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tergugat" class="text-gray-900">Tergugat</label>
                                        <input type="text" class="form-control" id="tergugat" name="tergugat" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kuasahukum_tergugat" class="text-gray-900">Kuasa Hukum Tergugat</label>
                                        <input type="text" class="form-control" id="kuasahukum_tergugat" name="kuasahukum_tergugat" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="status_perkara" class="text-gray-900">Status Perkara</label>
                                        <select name="status_perkara" id="status_perkara" class="form-control">
                                            <option value="belum selesai">Belum Selesai</option>
                                            <option value="selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="lama_proses" class="text-gray-900">Lama Proses</label>
                                        <input type="text" class="form-control" id="lama_proses" name="lama_proses" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal_sidang" class="text-gray-900">Tanggal Sidang</label>
                                        <input type="date" class="form-control" id="tanggal_sidang" name="tanggal_sidang" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jam" class="text-gray-900">Jam</label>
                                        <input type="text" class="form-control" id="jam" name="jam" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="agenda" class="text-gray-900">Agenda</label>
                                        <input type="text" class="form-control" id="agenda" name="agenda" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="ruangan" class="text-gray-900">Ruangan</label>
                                        <input type="text" class="form-control" id="ruangan" name="ruangan" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="hasil_sidang" class="text-gray-900">Hasil Sidang</label>
                                        <textarea type="text" class="form-control" name="hasil_sidang" id="hasil_sidang" required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-md btn-success">Kirim</button>
                                </form>
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

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('hasil_sidang')
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