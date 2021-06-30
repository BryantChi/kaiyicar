@extends('layouts.master')

@section('content_section')
    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_3.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span><a href="{{ url('/catalog') }}">Catalog <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Introduction <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">車款介紹&nbsp;Introduction</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>車款介紹&nbsp;Introduction</h2>
            <ol>
            <li><a href="{{ Route('index') }}">Home</a></li>
            <li><a href="{{ url('/catalog') }}">Catalog</a></li>
            <li>Introduction</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="ftco-section bg-light">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        @if (count($catalogCarInfo->carImageUrl) == 0)
                        <div class="img rounded" style="background-image: url('{{ asset('uploads/'.$catalogCarInfo->carFrontCover) }}');"></div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="carouselExampleIndicators" class="carousel slide col-md-10 mx-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($catalogCarInfo->carImageUrl as $key => $item)
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($catalogCarInfo->carImageUrl as $key => $item)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background:rgba(75, 75, 75, 0.2);">
                                <img src="{{ $item ? asset('uploads/' . $item) : '' }}"
                                    class="img-fluid img-thumbnail d-block mx-auto" style="max-height: 40rem !important;" alt="">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div class="text text-center">
                        {{-- <span class="subheading">Cheverolet</span> --}}
                        <h2>{{ $catalogCarInfo->carName }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">配備</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">規格</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                        role="tab" aria-controls="pills-review" aria-expanded="true">簡介</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">

                                <div class="row">

                                    <div class="col-md-4">
                                        <ul class="features">
                                            @foreach ($catalogCarOptionals as $key => $item)
                                                @if ($key % 3 == 0)
                                                    <li class="check"><span
                                                            class="ion-ios-checkmark"></span>{{ $item }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            @foreach ($catalogCarOptionals as $key => $item)
                                                @if ($key % 3 == 1)
                                                    <li class="check"><span
                                                            class="ion-ios-checkmark"></span>{{ $item }}s</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            @foreach ($catalogCarOptionals as $key => $item)
                                                @if ($key % 3 == 2)
                                                    <li class="check"><span
                                                            class="ion-ios-checkmark"></span>{{ $item }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">
                                <div class="row">
                                    <ul class="mx-auto list-group list-group-flush">
                                        <li class="list-group-item" style="{{  ($catalogCarInfo->priceShow == "0")?'display: none;':'' }}"><strong>價格：</strong><b style="font-size: 1.2rem;">{{  ($catalogCarInfo->priceShow == "0")?'':' '.$catalogCarInfo->price.' 萬' }}</b></li>
                                        <li class="list-group-item"><strong>年式：</strong>{{ date('Ym', strtotime($catalogCarInfo->carManufactureYear)) }}</li>
                                        <li class="list-group-item"><strong>里程數：</strong>{{  $catalogCarInfo->milage .' '. ucfirst($catalogCarInfo->milageUnit) }}</li>
                                        <li class="list-group-item"><strong>型號：</strong>{{ \DB::table('car_model_infos')->where('id', $catalogCarInfo->carModel)->first()->modelName }}</li>
                                        <li class="list-group-item" style="{{ ($catalogCarInfo->carFileUrl == "")?'display: none;':'' }}" ><strong>認證下載：</strong><a href="{{ url('upload/'.$catalogCarInfo->carFileUrl) }}" target="_blank" download>下載</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    {!! $catalogCarInfo->carDiscription !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
