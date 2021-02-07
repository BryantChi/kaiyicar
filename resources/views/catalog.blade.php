@extends('layouts.master')

<style>
    #page ul li a,
    #page ul li span {
        border-radius: 50%;
        width: 40px;
        margin: 2px;
    }

</style>
@section('content_section')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
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
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div id="page" class="overflow-auto text-center">
                {{ $catalogCarInfo->onEachSide(1)->links() }}
            </div>
            <div class="row">
                @foreach ($catalogCarInfo as $item)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset('uploads/'.$item->carFrontCover) }});">
                            </div>
                            <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">{{ $item->carName }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ '年份&nbsp;'.$item->carManufactureYear }}</span>
                                    <p class="price ml-auto">{{ $item->milage }} <span>{{ ucfirst($item->milageUnit) }}</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"> <a
                                        href="{{ 'catalog/' . $item->id }}" class="btn btn-secondary py-2 mx-auto" style="background: #bf42f5 !important;border: 1px solid #bf42f5 !important;">詳細資訊</a></p>
                            </div>
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
