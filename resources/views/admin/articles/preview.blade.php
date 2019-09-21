@extends('layouts.master')

@section('title')
    <h1 style="font-weight: 400"><strong>Aan de slag</strong> met <br/>de <strong>Cyberfusion-tutorials</strong></h1>
@endsection

@section('header')
    @include('partials.articles.header')
@endsection

@section('content')
    <section>
        <div class="container px-0">
            <div class="row m-0 ml-sm--4">
                @include('partials.articles.sidebar')
                <div class="col-12 col-sm-9 article-content">
                    <h2>{{$article['title']}}</h2>
                    <hr class="title-separator" />
                    {!! $article['body'] !!}
                    <div class="article-information-box align-items-center justify-content-between d-flex p-3">
                        <span>Heeft dit artikel je geholpen?
                            <span class="vote ml-2"><a href>Ja</a> / <a href>Nee</a></span>
                        </span>
                        <span class="vote-up-arrow"></span>
                    </div>
                    <hr class="article-separator" />
                    <div class="mt-5">
                        <h5 style="color: #2e2e6e">Kies een andere categorie:</h5>
                    </div>
                    <div class="row ml-0">
                        @foreach(getCategories() as $cat)
                            @include('partials.boxes.' . $cat)
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
