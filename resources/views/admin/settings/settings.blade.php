@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <!-- header -->
    <section class="jumbotron-fluid restyle form grid blue-light d-flex align-items-center" style="background-position: center 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-white">Cyberfusion <strong>Kennisbank</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-around">
                    <h2 class="text-white">Instellingen</h2>

                </div>
            </div>
        </div>
    </section>
    <!-- End header -->

    <section class="jumbotron-fluid restyle grid d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <ul>
                        <li><a href>Instelling</a></li>
                        <li><a href>Categorieen</a></li>
                    </ul>
                </div>
            </div>
            <!-- Todo: Settings -->
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
