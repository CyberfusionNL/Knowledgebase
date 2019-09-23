@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <!-- header -->
    <section class="jumbotron-fluid restyle d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><strong>{{env('APP_NAME', 'Knowledgebase')}}</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-around">
                    <h2>Artikelen</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End header -->

    <section class="jumbotron-fluid d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <a href="{{route('admin.new_article')}}" class="btn btn-outline-primary float-roght">Nieuw artikel</a>
                </div>
            </div>
            <hr />
            @foreach($articles as $article)
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="float-left">
                            <a target="_blank" href="{{route('admin.preview_article', ['id' => $article['id']])}}"><h5>{{$article['title']}}</h5></a>
                            <span>{{ $article['short_summary'] }}</span>
                        </div>
                        <div class="float-right">
                            <form method="post" class="d-block" action="{{route('admin.delete_article', ['id' => $article['id']])}}">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-outline-primary">Verwijderen</button>
                            </form>
                            <a class="btn btn-outline-primary mt-1" href="{{ route('admin.article', ['id' => $article['id']]) }}">Bewerken</a>
                        </div>
                    </div>
                </div>
                <hr />
            @endforeach
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
