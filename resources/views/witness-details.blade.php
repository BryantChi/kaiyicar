@extends('layouts.master')

@section('content_section')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $show->title }}</h2>
          <ol>
            <li><a href="{{ Route('index') }}">Home</a></li>
            <li><a href="{{ url('/witnessCar') }}">Witness</a></li>
            <li>Witness Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @if (isset($show->path))
              @foreach ($show->path as $item)
              <img src="{{ url('uploads/'.$item) }}" class="img-fluid img-thumbnail text-center" style="max-height:40rem !important;width: auto !important;" alt="{{ $show->title }}">
              {{-- {{ asset('upload/'.$item) }} --}}
              @endforeach
            @endif

            {{-- <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt=""> --}}
          </div>

          {{-- <a class="carousel-control-prev owl-prev" href="#portfolio-details" role="presentation" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="false"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next owl-next" href="#portfolio-details" role="presentation" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="false"></span>
            <span class="sr-only">Next</span>
          </a> --}}

          {{-- <div class="portfolio-info">
            <h3>{{ $show->carName }}</h3>
            <ul>
              <li><strong>年式：</strong>{{ date('Y', strtotime($show->carManufactureYear)) }}</li>
              <li><strong>里程數：</strong>{{  $show->milage.' Miles' }}</li>
              <li><strong>型號：</strong>{{ \DB::table('car_model_infos')->where('id', $show->carModel)->first()->modelName }}</li>
              <li><strong>價格：</strong><b style="font-size: 1.2rem;">{{ ($show->priceShow == "0")?'電洽':'約 '.$show->price.' 萬起' }}</b></li>
            </ul>
          </div> --}}

        </div>

        <div class="portfolio-description">
            <h2 class="w-100">{{ $show->title }}</h2>
            <div class="container">
                {!! $show->content !!}
            </div>
        </div>



      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
