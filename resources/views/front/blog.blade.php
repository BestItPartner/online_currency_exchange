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


    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-sm-12 col-lg-8">
                    <div class="blog-left-side">
                        @if(count($blogs) >0)
                        @foreach($blogs as $data)
                            <div class="single-blog">
                                <div class="part-img">
                                    <img src="{{asset('assets/images/post/'.$data->image)}}" alt="{{$data->title}}">
                                </div>
                                <div class="part-summary">
                                    <a href="javascript: void(0)" class="no-text-decoration cursor-default"><i
                                            class="far fa-clock"></i>{{date('d M Y',strtotime($data->created_at))}}</a>
                                </div>
                                <div class="part-text">
                                    <h2><a href="{{route('blog.details',[$data->id,str_slug($data->title)])}}">
                                            {{$data->title}}
                                        </a></h2>
                                    <p>{{str_limit(strip_tags($data->details),320)}}</p>
                                </div>
                            </div>
                        @endforeach


                        <div class="post-navigation ">
                            {{ $blogs->links('partials.pagination') }}
                        </div>

                            @else

                            <div class="single-blog">

                                <div class="part-text">
                                    <h2><a href="javascript:void(0)" class="no-text-decoration cursor-default">
                                           No Blogs Found !!
                                        </a></h2>
                                </div>
                            </div>


                        @endif
                    </div>


                </div>


                <div class="col-xl-4 col-sm-12 col-lg-4">
                    <div class="blog-right-side">

                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-md-6 col-lg-12">

                               @include('partials.follow-us')

                                @include('partials.category-list')
                            </div>

                            @include('partials.latest-blog')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
@section('js')
@endsection
