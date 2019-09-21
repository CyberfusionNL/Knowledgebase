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
                    <hr/>
                    {!! $article['body'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection
