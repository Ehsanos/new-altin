@extends('layouts.master')
@section('content')



    <main>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-center"><img class="img-fluid" src="{{$post->getFirstMediaUrl('posts')}}">
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="text-dark">{{getTrans($post,'tilte')}}</h1>
                        <p class="text-dark"><span
                                style="font-weight: normal !important; font-style: normal !important; color: rgb(122, 122, 122);">
                             {{getTrans($post,'body')}}
                            </span><br><br></p>
                    </div>
                </div>
                <div class=" mt-2">
                    @foreach($post->tags as $tag)
                        <a href="#" class="badge badge-dark tag-div py-2 px-2">{{$tag->name}}</a>
                    @endforeach

                </div>


            </div>
        </section>
    </main>

@endsection


