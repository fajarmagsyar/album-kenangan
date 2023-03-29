@extends('admin.layouts.main')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Peserta</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pesertaTotal }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
                        <a href="/dash-admin/peserta/tambah" class="btn btn-primary">Tambah data</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr class="bg-dark text-white">
                                    <th class="text-xs text-center">NDH</th>
                                    <th class="text-xs text-center">Foto</th>
                                    <th class="text-xs text-center">Nama Lengkap</th>
                                    <th class="text-xs text-center">Alamat</th>
                                    <th class="text-xs text-center">Judul Laporan</th>
                                    <th class="text-xs text-center">Pesan/Kesan</th>
                                    <th class="text-xs text-center">*</th>
                                </tr>
                                @foreach ($peserta as $r)
                                    <tr>
                                        <td class="text-xs text-center">{{ $r->ndh }}</td>
                                        <td class="text-xs align-middle"><a
                                                href="{{ $r->foto != null ? $r->foto : '/assets/images/no-pics.jpg' }}"
                                                target="_blank"><img
                                                    src="{{ $r->foto != null ? '/' . $r->foto : '/assets/images/no-pics.jpg' }}"
                                                    class="img-fluid rounded" alt=""></a></td>
                                        <td class="text-xs"><b>{{ $r->nama_lengkap }} </b><br> NIP.{{ $r->nip }}
                                            <br><b>Jabatan/Gol : </b><br>{{ $r->jabgol }}
                                        </td>
                                        <td class="text-xs">{{ $r->alamat }} <br><b>No HP:</b> {{ $r->hp }} <br>
                                            <b>Instasi: </b>{{ $r->instansi }}
                                        </td>
                                        <td class="text-xs">{{ $r->judul_laporan }} <br> <a
                                                href="{{ $r->file_laporan }}">Unduh</a></td>
                                        <td class="text-xs">
                                            <b>Pesan</b> :<br>
                                            {{ $r->pesan }} <br>
                                            <b>Kesan</b> :<br>
                                            {{ $r->kesan }}
                                        </td>
                                        <td class="text-xs align-middle">
                                            <a href="/dash-admin/peserta/{{ $r->peserta_id }}/hapus"
                                                onclick="return confirm('Anda yakin?')" class="text-danger"><i
                                                    class="fas fa-trash"></i></a>
                                            <a href="/dash-admin/peserta/{{ $r->peserta_id }}/edit"><i
                                                    class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
