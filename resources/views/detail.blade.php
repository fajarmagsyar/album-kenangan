@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{ $peserta->foto == null ? '/assets/images/no-pics.jpg' : '/assets/images/' . $pesertaZ->foto }}"
                                            alt="" style="border-radius: 23px" />
                                    </div>
                                    <div class="col-lg-8 align-self-center">
                                        <div class="main-info header-text">
                                            <span>NDH. {{ $peserta->ndh }}</span>
                                            <h4>
                                                {{ $peserta->nama_lengkap }}
                                                <div style="color: white;font-size: 12px;font-weight: 300;">
                                                    NIP. {{ $peserta->nip }}
                                                </div>
                                            </h4>
                                            <p>
                                                {{ $peserta->alamat }}
                                            </p>
                                        </div>
                                        <div class="main-border-button">
                                            <a href="#">{{ $peserta->hp }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-6 align-self-center">
                                        <ul>
                                            <li>
                                                <h4>Pesan</h4>
                                            </li>
                                            <li class="text-white">
                                                {{ $peserta->pesan }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <ul>
                                            <li>
                                                <h4>Kesan</h4>
                                            </li>
                                            <li class="text-white">
                                                {{ $peserta->kesan }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <div class="gaming-library profile-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Laporan </em>Rencana Aksi</h4>
                            </div>
                            <div class="item">
                                <h6>{{ $peserta->judul_laporan }}</h6>
                                <span class="text-muted">{{ $peserta->nama_lengkap }}</span>
                                <div class="main-border-button border-active mt-4">
                                    <a href="{{ $peserta->file_laporan }}">Unduh</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>
@endsection
