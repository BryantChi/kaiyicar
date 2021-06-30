{{-- <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/kaiyicar_main.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5"> --}}
{{-- <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1> --}}
{{-- <p style="font-size: 1.3rem;padding:10px;margin-bottom:50px;">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p> --}}
{{-- rgba(79,79,79,0.7);border-radius:5px; --}}
<!-- <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="ion-ios-play"></span>
                  </div>
                  <div class="heading-title ml-5">
                      <span>Easy steps for renting a car</span>
                  </div>
              </a> -->
{{-- </div>
          <div class="container text-center">
            <a href="{{ url('/catalog') }}" class="btn btn-outline-warning btn-lg" style="font-size:1.3rem">前往精選車款</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

<style>
    @media (max-width:768px) {
        #carousel-item01 {
            background-position-x: 65% !important;
        }
    }

</style>

<div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" id="carousel-item01"
                style="background: url({{ asset('images/home01.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item"
                style="background: url({{ asset('images/kaiyi03.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item"
                style="background: url({{ asset('images/kaiyi02.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item"
                style="background: url({{ asset('images/kaiyi01.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item"
                style="background: url({{ asset('images/home02.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item"
                style="background: url({{ asset('images/kaiyicar_main.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">精選車款
                        </h2>
                        <p class="animate__animated animate__fadeInUp">楷懿國際-Kaiyi Car 主要經營國外新、舊車進口代辦、接單訂購及現車出售
                            將有效率、有保障、專業的為您服務 並且提供代辦國外進口車輛檢測服務 楷懿國際將合法為您代辦所有流程，讓您愛車入手，合法有保障。</p>
                        <div>
                            <a href="{{ url('/catalog') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                            {{-- {{Route('Featured')}} --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            {{-- <div class="carousel-item"
                style="background: url({{ asset('images/background/exotic_car_bg.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"
                            style="/*letter-spacing:0.1rem !important;*/font-family: 'Helvetica Neue', sans-serif;">
                            自辦外匯車（Choose Your Own）</h2>
                        <p class="animate__animated animate__fadeInUp">如果您在我們的美洲精選找不到適合的車輛，美國原廠的系統車源資料庫將是您的不二選擇
                            ，或者您想要自己選車進口全程參與<br>Select from our inventory of certified Mercedes-Benz; Choose what best
                            suits your needs.</p>
                        <div>
                            <a href="{{ Route('ChooseOwn') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">前往</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Slide 3 -->
            {{-- <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg);">
                <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                            Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                        <div>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
