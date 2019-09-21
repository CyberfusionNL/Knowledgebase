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
            <div class="row">
                @include('partials.articles.sidebar')
                <div class="col-8">
                    {!! $article['body'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection
