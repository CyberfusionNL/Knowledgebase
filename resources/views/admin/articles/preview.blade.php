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
                    <div class="article-information-box align-items-center justify-content-between d-flex p-3 mb-3">
                        <span>Heeft dit artikel je geholpen?
                            @if(!hasVoted($article['id']))
                                <span class="vote ml-2"><a href="{{getVoteUrl($article)}}">Ja</a> / <a href="{{getVoteUrl($article, 'down')}}">Nee</a></span>
                            @else
                                <span class="vote ml-2">{{getVote($article['id']) == 'up' ? 'Ja' : 'Nee'}}</span>
                            @endif
                        </span>
                        <span class="vote-up-arrow"></span>
                    </div>
                    <div class="row">
                        @if(!is_null($next))
                            <div class="col-12">
                                <ul>
                                    <li>
                                        <h5 class="text-uppercase mb-0">Volgend Artikel</h5>
                                        <a href="{{route('article', ['type' => $next->type, 'slug' => $next->slug])}}" style="color: #2e2e6e">{{ $next->title }}</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                    <hr class="article-separator" />
                    <div class="mt-5">
                        <h5 style="color: #2e2e6e">Kies een andere categorie:</h5>
                    </div>
                    <div class="row ml-0">
                        @foreach(getCategories(3) as $cat)
                            @include('partials.boxes.' . $cat)
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $('span.vote-up-arrow').after().click(function () {
                $("html, body").animate({ scrollTop: 0 }, "slow");
            })
        });
    </script>
@endsection
