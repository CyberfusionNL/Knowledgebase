@extends('layouts.master')

@section('content')
    <!-- header -->
    <section class="jumbotron-fluid restyle d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><strong>{{ env('APP_NAME', 'Knowledgebase') }}</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-around">
                    <h2>Zoekresultaten</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End header -->

    <section class="jumbotron-fluid restyle grid d-flex align-items-center">
        <div class="container">
            @empty($articles->all())
                <div class="row">
                    <div class="col-12 text-center  ">
                        <h5>Geen artikelen gevonden</h5>
                    </div>
                </div>
            @endempty
            @foreach($articles as $article)
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="float-left">
                            <a target="_blank" href="{{route('article', ['slug' => $article->slug, 'type' => $article->category->type])}}"><h5>{{$article['title']}}</h5></a>
                            <span>{{ $article['short_summary'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr />
            <div class="article-content">
                <div class="row justify-content-center">
                    @foreach(getCategories(3) as $cat)
                        @include('partials.boxes.' . $cat)
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <footer class="row no-gutters restyle d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-4">
                    <p>Cyberfusion &copy; 2019</p>
                </div>
                <div class="col-md-4 justify-content-end">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 text-right">
                            <br />
                            <br />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
@endsection
