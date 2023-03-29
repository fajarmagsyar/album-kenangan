@extends('admin.layouts.main')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Peserta</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="post" action="/dash-admin/peserta/tambah" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NDH</label>
                                <input type="number" name="ndh" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Peserta</label>
                                <input type="text" name="nama_lengkap" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIP</label>
                                <input type="number" name="nip" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">JAB/GOL</label>
                                <input type="text" name="jabgol" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" aria-describedby="emailHelp">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Instansi</label>
                                <input type="text" name="instansi" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul Laporan</label>
                                        <input type="text" name="judul_laporan" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">File Laporan</label>
                                        <input type="text" name="file_laporan" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pesan</label>
                                <textarea name="pesan" class="form-control" aria-describedby="emailHelp">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kesan</label>
                                <textarea name="kesan" class="form-control" aria-describedby="emailHelp">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
