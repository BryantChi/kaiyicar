@extends('layouts.master')

@section('content_section')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Process <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">購車流程&nbsp;Process</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol>
                        <li>
                            <p>國外汽車取得流程約20天，包含車款銀行清償、title取得、內陸運輸、第三方檢測(PSI)。</p>
                        </li>
                        <li>
                            <p>從美加地區 船運約25天-30天，歐洲地區則需約45天，台灣拆櫃報關約5天(不含假日)。</p>
                        </li>
                        <li>
                            <p>車測安排以車測中心實際安排為主，到可領牌約1個月。</p>
                        </li>
                        <li>
                            <p>臨時牌申請天數為五天，最多可延長兩次次共計15天。</p>
                        </li>
                    </ol>

                    <p class="p-4">
                        ※請特別注意<br>如您於上架型錄有看見心儀的車輛，歡迎直接與楷懿的專員聯絡。<br><br>購車專線-(06)262-8699
                    </p>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide w-100 col-md-6" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.kaiyi-car.com.tw/home/cache/widgetkit/gallery/36/01-dcaee6f3ec.jpg"
                                class="d-block w-100 img-thumbnail" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.kaiyi-car.com.tw/home/cache/widgetkit/gallery/36/02-6bda9037b0.jpg"
                                class="d-block w-100 img-thumbnail" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.kaiyi-car.com.tw/home/cache/widgetkit/gallery/36/03-b7091d1fce.jpg"
                                class="d-block w-100 img-thumbnail" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
