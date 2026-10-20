@extends('layouts.master')

{{-- <style>
    section a:link {
        color: #333333;
    }
    a:hover {
        color: #;
    }
</style> --}}

@section('content_section')

    {{-- <div style="display: {{ request()->routeIs('index') ? '' : 'none' }};">
        @include('layouts.hero')
    </div> --}}

    <section id="hero">
        @include('layouts.hero')
    </section>

    <section class="bg-light py-5 px-3">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	">
                    {{-- featured-top --}}
                    <div class="row no-gutters">
                        <div class="col-md-2 d-flex align-items-center">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">最新消息</h3>
                                <div class="row d-flex mb-4">
                                    <table class="w-100">
                                        {{-- <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                            @foreach ($newInfo as $item)
                                            <tr style="border-bottom:1px dashed;">
                                                <th class="px-3 pt-3 pb-2">{{ date("Y-m-d",strtotime($item->created_at)) }}</th>
                                                <td class="font-weight-bold"><a href="News/{{ $item->id }}" style="font-size:17px;">{{ $item->title }}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                {{-- <p><a href="#" class="btn btn-primary py-3 px-4"></a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    

@endsection
