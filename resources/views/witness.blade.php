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

            <div class="" id="witness-items">
                @include('witness-items')
            </div>

        </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<script>

    // $(function(){

    // });

    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    });
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {;
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });
    function getPosts(page, query = null) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('#witness-items').html(data);
            location.hash = page;
        }).fail(function () {
            alert('witness-items could not be loaded.');
        });
    }

    function detail(src) {
        window.location.href = src;
    }

</script>

@endsection
