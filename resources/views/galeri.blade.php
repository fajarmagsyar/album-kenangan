@extends('layouts.main')
@push('custom-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css"
        integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('custom-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"
        integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
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

                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
                                            data-lightbox="image-1" data-title="My caption">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
                                                alt="Table Full of Spices" class="rounded" />
                                        </a>
                                    </div>
                                </div>

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
