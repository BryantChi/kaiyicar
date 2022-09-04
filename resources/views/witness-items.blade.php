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
                {{-- <p>{{ date("Y-m-d",strtotime($item->created_at)) }}</p> --}}
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
