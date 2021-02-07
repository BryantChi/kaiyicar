@extends('layouts.master')

@section('content_section')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_3.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>News <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">最新消息&nbsp;News</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col">
                    <h2>{{ $newsInfo->title }}</h2>
                </div>

            </div>

            <div class="container mt-3">
                <div class="row">
                    {!! $newsInfo->content !!}
                </div>
            </div>
        </div>
    </section>

@endsection
