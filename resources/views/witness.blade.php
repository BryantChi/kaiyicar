@extends('layouts.master')

<style>
    .witness-img {
        cursor: pointer !important;
        height: 16.45rem !important;
        vertical-align: middle !important;
        display: table-cell !important;
        /* width: 20rem !important; */
        text-align: center !important;
    }

    .witness-img img {
        max-height: 100% !important;
    }
</style>

@section('content_section')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>購車見證&nbsp;Witness</h2>
            <ol>
            <li><a href="{{ Route('index') }}">Home</a></li>
            <li>Witness</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->

    {{-- <div class="container text-center"><img class="img-fluid img-thumbnail" src="{{asset('images/witnessImg_inside.jpg')}}" alt=""></div> --}}
    <!-- ======= Portfolio Section ======= -->
    <section id="FeaturedCar" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>購車見證</h2>
                <p></p>
            </div>

            <div>
                {{-- <h3>精選</h3> --}}
                <hr>
            </div>

            <div class="overflow-auto">
                {{ $witnessInfo->onEachSide(1)->links() }}
            </div>

            <div class="row portfolio-container" id="portfolio-container">

                @foreach ($witnessInfo as $item)

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap witness-img" onclick="detail('{{ url('witnessCar/'.$item->id) }}')">
                        <img src="{{ url('uploads/'.$item->witnessFrontCover) }}" class="img-fluid img-centered" alt="{{ $item->title }}">
                        {{-- {{ asset('upload/'.$item->carFrontCover) }} --}}
                        <div class="portfolio-info">
                            <h4>{{ $item->title }}</h4>
                            <p>{{ date("Y-m-d",strtotime($item->created_at)) }}</p>
                            {{-- <div class="portfolio-links">
                                <a href="{{'https://richfulmotors.com/upload/'.$item->carFrontCover}}" data-gall="portfolioGallery" class="venobox" title="{{ $item->carName }}"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div>
                        <h3>{{ $item->title }}</h3>
                        {{-- <p style="font-size: 1.5rem;">{{  date("Y-m-d",strtotime($item->created_at)) }}</p> --}}
                    </div>
                </div>

                @endforeach

            </div>

            {{-- <div class="" id="witness-items">
                @include('witness-items')
            </div> --}}

        </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<script>

    // $(function(){

    // });

    // $(window).on('hashchange', function() {
    //     if (window.location.hash) {
    //         var page = window.location.hash.replace('#', '');
    //         if (page == Number.NaN || page <= 0) {
    //             return false;
    //         } else {
    //             getPosts(page);
    //         }
    //     }
    // });
    // $(document).ready(function() {
    //     $(document).on('click', '.pagination a', function (e) {;
    //         getPosts($(this).attr('href').split('page=')[1]);
    //         e.preventDefault();
    //     });
    // });
    // function getPosts(page, query = null) {
    //     $.ajax({
    //         url : '?page=' + page,
    //         dataType: 'json',
    //     }).done(function (data) {
    //         $('#witness-items').html(data);
    //         location.hash = page;
    //     }).fail(function () {
    //         alert('witness-items could not be loaded.');
    //     });
    // }

    function detail(src) {
        window.location.href = src;
    }

</script>

@endsection
