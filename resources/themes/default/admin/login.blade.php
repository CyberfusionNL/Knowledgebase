@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <section class="jumbotron-fluid d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <h2><strong>{{env('APP_NAME', 'Knowledgebase')}}</strong></h2>
                    @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="col-12 d-flex align-items-start justify-content-center">
                    <form method="post" action>
                        <h4 style="color: #ff6464">Inloggen</h4>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Cyberfusion" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="**********" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
                        </div>
                    </form>
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
