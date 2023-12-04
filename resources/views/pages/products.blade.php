@extends('layouts.master')
@section('content')
    <header >
        @if(Session::has('message'))

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 1500)" x-show="show">
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            </div>
        @endif
        <div class="top-content">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($slider as $slide)
                        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"
                            @if($loop->first) class="active" @endif></li>
                    @endforeach
                    {{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
                    {{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
                </ol>
                <div class="carousel-inner">

                    @foreach($slider as $slide)
                        <div class="carousel-item @if($loop->first)active @endif">

                            <div class="h-100 w-100 img-div"
                                 style="background: url('{{$slide->getFirstMediaUrl('slider')}}') center / cover no-repeat;">

                                <div class="h-100 w-100 ">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                {{--                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>--}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
        </div>
    </header>

    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 m-0">
                            <div
                                class="d-flex flex-row justify-content-start align-items-center align-content-center pt-3">
                                <div class="div-hr"></div>
                                <h5 class="text-dark mx-2">{{lang('search_cat')}}</h5>
                            </div>
                            <div class="row padMar">
                                <div class="col padMar">
                                    <form action="{{route('langs.search')}}">
                                        @csrf
                                        <div class="input-group ">
                                            <div class="input-group-prepend"></div>
                                            <input class="form-control autocomplete" type="text"
                                                   placeholder="{{lang('search_cat')}}">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm search-btn btn-outline-dark"
                                                        type="submit"><i
                                                        class="fa fa-search"></i></button>

                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12 alfeat-head">
                        <div class="p-2">
                            <h3 class="text-dark font-weight-bolder m-0">{{lang('cats')}}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-group">
                            @foreach($cats as $cat)
                                <a class="list-group-item list-group-item-action font-weight-bolder"
                                   href="{{route('langs.products', ["catId"=>$cat->id])}}">{{getTrans($cat,'name')}}</a>
                            @endforeach

                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12 alfeat-head">
                            <div class="p-2">
                                <h3 class="text-dark font-weight-bolder m-0">{{lang('sections')}}</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="list-group">
                                @foreach($departments as $dep )
                                    <a class="list-group-item list-group-item-action font-weight-bolder"
                                       href="{{route("langs.products",["catId"=>$dep->category_id,"depId"=>"$dep->id"])}}">{{$dep->name}}</a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="row p-3">
                    <div class="col p-0">
                        <div class="d-flex flex-row justify-content-end align-items-center bg-gray">
                            <div class="px-3">
                                {{--                                       x--}}
                            </div>
                            <div class="div-left"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $product )


                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <a class="text-decoration-none" href="{{route('langs.product_details',[$product])}}">
                                <div class="p-2 card product-main">
                                    <div class="text-center">
                                        <h5 class="text-truncate font-weight-bolder">{{getTrans($product,'name')}}</h5>
                                    </div>
                                    <div class="div-hr-w"></div>
                                    <div>
                                        <div class="text-center card-img p-2"><img class="img-fluid"
                                                                                   src="{{$product->getFirstMediaUrl('products')}}">
                                        </div>
                                        <div class="px-3">
                                            <p class="text-dark font-weight-bold">{{$product->department->name ?? 'None'}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        {{--Tags bar--}}


        </div>
        <div class=" mt-2 container">
            @foreach($tags as $tag)

                <a href="#" class="badge badge-dark tag-div py-2 px-2 mb-1">{{$tag->name['ar']}}</a>

            @endforeach

            {{--                <a href="#" class="badge badge-dark tag-div py-2 px-2 mb-1">Dark</a>--}}


        </div>
    </section>
@endsection


