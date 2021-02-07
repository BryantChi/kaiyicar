@extends('layouts.master')

@section('content_section')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Friendlink <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">友善連結&nbsp;Friends Link</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($friendlinkInfo as $item)
                    <div class="col-md-4">
                        <p>
                            <a class="px-3 py-2 list-group-item list-group-item-action list-group-item-light text-center"
                        href="{{ $item->linkUrl }}" target="_blank">{{ $item->linkName }}</a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
