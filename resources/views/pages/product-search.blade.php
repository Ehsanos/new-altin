@extends('layouts.master')
@section('content')
    <main>

        <div class="container w-100 py-0 py-md-3 py-lg-5 mt-1 mt-md-5" >
            <i class="fas fa-folder-plus open-cats d-lg-none mt-2 " id="open-cats">
                <span class="words-cat">{{lang('cats').' + '.lang('sections')}}</span>
            </i>

            <div class="row">
                @foreach($products as $product )

                    <div class="col-12 col-md-6 col-lg-3 mb-2">
                        <a class="text-decoration-none" href="{{route('langs.product_details',[$product->id])}}">
                            <div class="p-2 card product-main">
                                <div class="text-center">
                                    <h5 class="text-truncate font-weight-bolder">{{$product->code ?? 'code'}}</h5>
                                </div>
                                <div class="div-hr-w"></div>
                                <div>
                                    <div class="text-center card-img p-2"><img class="img-fluid" src="{{$product->getFirstMediaUrl('products')}}">
                                    </div>
                                    <div class="px-3">
                                        <p class="text-dark font-weight-bold">{{getTrans($product,'name')
                                         ??
                                        'None'}}</p>
                                        @if(app()->getLocale()=='ar')
                                            <p class="text-dark font-weight-bold">{{$product->department->name  ??
                                        'None'}}</p>
                                        @elseif(app()->getLocale()=='en')
                                            <p class="text-dark font-weight-bold">{{$product->department->name_en  ??
                                        'None'}}</p>

                                        @elseif(app()->getLocale()=='tr')
                                            <p class="text-dark font-weight-bold">{{$product->department->name_tr  ??
                                        'None'}}</p>

                                        @endif

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </main>
@endsection


