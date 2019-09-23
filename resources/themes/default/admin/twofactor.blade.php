@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <section class="jumbotron-fluid d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <h2><strong>{{env('APP_NAME', 'Knowledgebase')}}</strong></h2>
                    @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="col-md-6">
                    <form method="post" action="{{route('2fa')}}">
                        <h4 style="color: #ff6464">2FA</h4>
                        <div class="form-group">
                            {{ csrf_field() }}
                            <input class="form-control" type="number" name="cyberfusion_twofactor" placeholder="xxxxxx" required>
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
