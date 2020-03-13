@extends('layout')

@section('css')
@endsection
@section('content')



    <div class="page-title-area">
        <div class="container">
            <div class="page-title">
                <h1>{{$page_title}}</h1>
            </div>
        </div>
    </div>


    <div class="about-area">
        <div class="container">
            <div class="row d-flex">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-img">
                        <img src="{{asset('assets/images/about-video-image.jpg')}}" alt="about image">
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 d-flex align-items-center">
                    <div class="part-content">
                        <h2>{{$basic->about_title}}</h2>
                        <p>{!! $basic->about !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="area-title">
                        <h2>{{$basic->service_heading}}</h2>
                        <p>{{$basic->service_para}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($service as $data)
                    <div class="col-xl-4 col-lg-4 col-sm-12 col-md-6">
                        <div class="single-service">
                            <div class="part-icon">
                                {!! $data->icon !!}
                            </div>
                            <div class="part-text">
                                <h3>{{$data->title}}</h3>
                                <p>{{str_limit($data->details,90)}}</p>
                                <a href="{{route('serve',[$data->id, str_slug($data->title)])}}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
@section('js')
@endsection
