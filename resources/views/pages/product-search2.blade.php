@extends('layouts.master')
@section('content')

    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
        <div class="container" >
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
                <div class="row" >
                    @foreach($products as $product )


                        <div class="col-12 col-md-6 col-lg-4 mb-2 ">
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


        </div>
    </section>
@endsection


