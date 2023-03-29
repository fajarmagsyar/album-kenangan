@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Selamat Datang</h6>
                                    <h4><em>Album </em> KENANGAN PKN II ANGKATAN XXIX</h4>
                                    <div class="main-button">
                                        <a href="#jelajahi">Lihat Para Alumni</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section mb-4">
                                    <h4 style="margin-bottom: 0px">
                                        <em>Peserta</em> PKN II Angkatan XXIX
                                    </h4>
                                    <span class="text-muted text-xs">Klik untuk melihat detail peserta dan Perancangan
                                        Rencana
                                        Perubahan</span>
                                </div>

                                {{-- <div class="search-input">
                                    <form id="search" action="#">
                                        <input type="text" placeholder="Tuliskan nama..." class="form-control"
                                            id="searchText" name="searchKeyword" onkeypress="handle" />
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div> --}}
                                <div class="row gy-0">

                                    @foreach ($peserta as $r)
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="item">
                                                <img src="{{ $r->foto == null ? '/assets/images/no-pics.jpg' : '/assets/images/' . $r->foto }}"
                                                    alt="" />

                                                <h4>
                                                    <div class="badge bg-secondary">
                                                        <i class="fa fa-list" style="color: white"></i> {{ $r->ndh }}
                                                    </div>
                                                    {{ $r->nama_lengkap }}<br />
                                                    <span>NIP. {{ $r->nip }}</span><br />
                                                    <span>{{ $r->jabgol }}</span>

                                                </h4>
                                                <div class="main-button mt-4">
                                                    <a href="/detail/{{ $r->peserta_id }}"><i class="bi bi-book"></i> Lihat
                                                        Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
                </div>
            </div>
        </div>
    </div>
@endsection
