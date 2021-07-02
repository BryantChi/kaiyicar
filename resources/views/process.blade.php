@extends('layouts.master')

@section('content_section')

    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
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
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>購車流程&nbsp;Process</h2>
            <ol>
            <li><a href="{{ Route('index') }}">Home</a></li>
            <li>Process</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->

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
                        ※請特別注意<br>如您於精選現車有看見心儀的車輛，歡迎直接與楷懿的專員聯絡。<br><br>購車專線-(06)262-8699
                    </p>
                </div>

                {{-- <div id="carouselExampleCaptions" class="carousel slide w-100 col-md-6" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/process-01.jpeg') }}" class="d-block w-100 img-thumbnail" alt="">
                            <div class="carousel-caption d-none d-md-block text-left">
                                <h5>First slide label</h5>
                                <div class="p-2"
                                    style="background-color: rgba(79,79,79,0.7);border-radius:5px;max-height:16rem;overflow-y:scroll;">
                                    一、接單引進:
                                    <ol>
                                        <li>聯絡我們→與楷懿的服務專員聯絡，我們會向您做進一步的說明，並了解您購 車的需求。</li>
                                        <li>簽定尋車委託書→簽定委託書並收取訂金。</li>
                                        <li>國外尋車→楷懿會依照您所提供的車輛需求，找尋車況良好且無事故的車輛，亦會將車輛的相關資料、車身照片以及價格提供給您，如果您願意訂購，則另外簽訂接單合約書，反之，如果在2個星期內我們無法找尋到您的理想車輛，楷懿會將全數訂金退還給您。
                                        </li>
                                        <li>簽訂接單合約書→雙方簽定合約書後，我們會向買方收取購車訂金，接著由楷懿將您的愛車購入。</li>
                                        <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                        <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天。</li>
                                        <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                        <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                        <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                        <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日買方付清車輛尾款及相關費用後，由服務專員親自將您的愛車交付給您。</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/process-02.jpeg') }}" class="d-block w-100 img-thumbnail" alt="">
                            <div class="carousel-caption d-none d-md-block text-left">
                                <h5>Second slide label</h5>
                                <div class="p-2"
                                    style="background-color: rgba(79,79,79,0.7);border-radius:5px;max-height:16rem;overflow-y:scroll;">
                                    二、車輛預購:
                                    <ol>
                                        <li>聯絡我們→與楷懿的服務專員聯絡，我們會不定期提供部分車型的預購。</li>
                                        <li>說明/溝通→服務專員會向您說明預購的方式，以及提供相關資料讓您參考，您也可以讓我們了解對於車輛的需求</li>
                                        <li>簽訂預購合約書→選定您滿意的車輛後，雙方簽訂合約書，楷懿會向買方收取購車訂金。</li>
                                        <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                        <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天。</li>
                                        <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                        <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                        <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                        <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日買方付清車輛尾款及相關費用後，由服務專員親自將您的愛車交付給您。</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/process-03.jpeg') }}" class="d-block w-100 img-thumbnail" alt="">
                            <div class="carousel-caption d-none d-md-block text-left">
                                <h5>Third slide label</h5>
                                <div class="p-2"
                                    style="background-color: rgba(79,79,79,0.7);border-radius:5px;max-height:16rem;overflow-y:scroll;">
                                    三、代辦進口:
                                    <ol>
                                        <li>聯絡我們→與楷懿的服務專員聯絡，讓我們了解您需要我們協助的地方。</li>
                                        <li>報價說明→楷懿會依照您所提供的車輛進行報價以及代辦的費用，並說明個人需負擔的風險。</li>
                                        <li>簽訂代辦委託合約書→簽訂合約書，楷懿會向您收取全額費用，包含國內、外車輛辦理所需支付之費用，則國內監理站領牌之相關費用，委託人則於交車當日給付。</li>
                                        <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                        <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天</li>
                                        <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                        <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                        <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                        <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日由服務專員親自將您的愛車交付給您。</li>
                                    </ol>
                                </div>
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
                </div> --}}

                <div class="accordion col-md-6" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    一、接單引進:
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ol>
                                    <li>聯絡我們→與楷懿的服務專員聯絡，我們會向您做進一步的說明，並了解您購 車的需求。</li>
                                    <li>簽定尋車委託書→簽定委託書並收取訂金。</li>
                                    <li>國外尋車→楷懿會依照您所提供的車輛需求，找尋車況良好且無事故的車輛，亦會將車輛的相關資料、車身照片以及價格提供給您，如果您願意訂購，則另外簽訂接單合約書，反之，如果在2個星期內我們無法找尋到您的理想車輛，楷懿會將全數訂金退還給您。
                                    </li>
                                    <li>簽訂接單合約書→雙方簽定合約書後，我們會向買方收取購車訂金，接著由楷懿將您的愛車購入。</li>
                                    <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                    <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天。</li>
                                    <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                    <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                    <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                    <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日買方付清車輛尾款及相關費用後，由服務專員親自將您的愛車交付給您。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    二、車輛預購:
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ol>
                                    <li>聯絡我們→與楷懿的服務專員聯絡，我們會不定期提供部分車型的預購。</li>
                                    <li>說明/溝通→服務專員會向您說明預購的方式，以及提供相關資料讓您參考，您也可以讓我們了解對於車輛的需求</li>
                                    <li>簽訂預購合約書→選定您滿意的車輛後，雙方簽訂合約書，楷懿會向買方收取購車訂金。</li>
                                    <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                    <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天。</li>
                                    <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                    <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                    <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                    <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日買方付清車輛尾款及相關費用後，由服務專員親自將您的愛車交付給您。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    三、代辦進口:
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ol>
                                    <li>聯絡我們→與楷懿的服務專員聯絡，讓我們了解您需要我們協助的地方。</li>
                                    <li>報價說明→楷懿會依照您所提供的車輛進行報價以及代辦的費用，並說明個人需負擔的風險。</li>
                                    <li>簽訂代辦委託合約書→簽訂合約書，楷懿會向您收取全額費用，包含國內、外車輛辦理所需支付之費用，則國內監理站領牌之相關費用，委託人則於交車當日給付。</li>
                                    <li>陸運/出口→安排國外當地的陸運及相關出口手續。</li>
                                    <li>海運→安排裝船及船運日期，美國船運時間約22天，德國船運時間約45天</li>
                                    <li>報關及關稅相關費用繳納→車輛到港後，楷懿會委託專業報關單位，處理車輛拆櫃、報關手續和相關費用繳納。</li>
                                    <li>車輛檢測安排→楷懿會將您的愛車安排至車測中心做測試，測試項目主要有汙染、噪音、燈光、耗能四大項，排測日期則以車測中心實際安排為主。</li>
                                    <li>檢測資料核可→車輛檢測後，車輛報告須上傳至各相關單位，並由承辦人員審閱核可。</li>
                                    <li>監理站領牌/交車→楷懿委託專人至監理站辦理車輛領牌之手續，則交車當日由服務專員親自將您的愛車交付給您。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
