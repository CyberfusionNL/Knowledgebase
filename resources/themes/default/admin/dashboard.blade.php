@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <section class="jumbotron-fluid restyle d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><strong>{{ env('APP_NAME', 'Knowledgebase') }}</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-start">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
