@extends('layouts.master')

<style>
    #page ul li a,
    #page ul li span {
        border-radius: 50%;
        width: 40px;
        margin: 2px;
    }

    .featured-img {
        cursor: pointer !important;
        height: 16.45rem !important;
        vertical-align: middle !important;
        display: table-cell !important;
        /* width: 20rem !important; */
        text-align: center !important;
    }

    .featured-img img {
        /* max-height: 15rem !important; */
    }

</style>
@section('content_section')

    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Catalog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">上架型錄&nbsp;Catalog</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>上架型錄&nbsp;Catalog</h2>
            <ol>
            <li><a href="{{ Route('index') }}">Home</a></li>
            <li>Catalog</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2 style="text-transform:capitalize !important;">精選現車（Catalog）</h2>
                {{-- <h1 style="font-size: 24px!important;">美洲精選外匯車</h1> --}}
                <p>Our vehicles are only provided by official dealers and must pass Richful Motor's rigorous standard operating procedure (SOP) inspections.</p>
            </div>

            <div id="page" class="overflow-auto text-center">
                {{ $catalogCarInfo->onEachSide(1)->links() }}
            </div>
            <div class="row portfolio-container" id="portfolio-container">
                @foreach ($catalogCarInfo as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        {{-- <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset('uploads/' . $item->carFrontCover) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="car-single.html">{{ $item->carName }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ '年份&nbsp;' . $item->carManufactureYear }}</span>
                                    <p class="price ml-auto">{{ $item->milage }}
                                        <span>{{ ucfirst($item->milageUnit) }}</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"> <a href="{{ 'catalog/' . $item->id }}"
                                        class="btn btn-secondary py-2 mx-auto"
                                        style="background: #bf42f5 !important;border: 1px solid #bf42f5 !important;">詳細資訊</a>
                                </p>
                            </div>
                        </div> --}}


                        <div class="portfolio-wrap featured-img" onclick="">
                            <img src="{{ asset('uploads/'.$item->carFrontCover) }}" class="img-fluid img-centered" alt="{{ $item->carName }}">
                            {{-- {{ asset('upload/'.$item->carFrontCover) }} --}}
                            {{-- https://richfulmotors.com/upload/ --}}
                            {{-- defaultFeatured --}}
                            <div class="portfolio-info">
                                <h4>{{ $item->carName }}</h4>
                                <p>{{ date("Y",strtotime($item->carManufactureYear)) }}</p>
                                {{-- <div class="portfolio-links">
                                    <a href="{{'https://richfulmotors.com/upload/'.$item->carFrontCover}}" data-gall="portfolioGallery" class="venobox" title="{{ $item->carName }}"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        <div>
                            <h3>{{ $item->carName }}</h3>
                            <p style="font-size: 2rem;"><strong>{{  ($item->priceShow == "0")?'':' '.$item->price.' 萬' }}</strong></p>
                            <p style="font-size: 1.5rem;">{{  $item->milage .' '. ucfirst($item->milageUnit) }}</p>
                        </div>


                    </div>
                @endforeach
            </div>
            {{-- <div class="row mt-5">  <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

@endsection
