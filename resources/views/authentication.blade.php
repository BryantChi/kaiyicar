@extends('layouts.master')

@section('content_section')

    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Authenticate<i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">安心認證&nbsp;Authenticate</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>安心認證&nbsp;Authenticate</h2>
                <ol>
                    <li><a href="{{ Route('index') }}">Home</a></li>
                    <li>Authenticate</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="aboutus" class="about">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl pl-0 pl-lg pr-lg-1 d-flex align-items-stretch mx-5">
                    <div class="content d-flex flex-column justify-content-center"> --}}
                        @foreach ($authenticationInfo as $item)
                            <div class="col-md-3">
                                {{-- <a href="{{ $item->authenticate_path }}" data-lightbox="roadtrip">{{ $item->authenticate_name }}</a> --}}
                                <a href="{{ asset('uploads/' . $item->authenticate_path) }}"
                                    data-lightbox="{{ $item->id }}" title="{{ $item->authenticate_name }}" s>
                                    <img class="img-fluid img-thumbnail"
                                        src="{{ asset('uploads/' . $item->authenticate_path) }}">
                                </a>
                                <p class="text-center mt-3">{{ $item->authenticate_name }}</p>
                            </div>
                        @endforeach
                    {{-- </div>
                </div> --}}
            </div>
        </div>
    </section>

    <script>
        lightbox.option({
            'resizeDuration': 500,
            'wrapAround': true,
            'alwaysShowNavOnTouchDevices': true
        })

    </script>

@endsection
