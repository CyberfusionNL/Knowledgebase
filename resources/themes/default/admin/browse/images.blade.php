@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <!-- header -->
    <section class="jumbotron-fluid restyle d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><strong>{{ env('APP_NAME', 'Knowledgebase') }}</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-around">
                    <h2>Zoek <strong>afbeeldingen</strong></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End header -->

    <section class="jumbotron-fluid form restyle grid d-flex align-items-center">
        <div class="container">
            <div class="row d-flex">
                @foreach($images as $image)
                <div class="col-4">
                    <img style="max-height: 140px" onclick="returnFileUrl(this.src)" src="{{ route('asset.image', $image) }}" />
                </div>
                @endforeach
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

@section('footer-scripts')
    <script>
        function getUrlParam( paramName ) {
            var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' );
            var match = window.location.search.match( reParam );

            return ( match && match.length > 1 ) ? match[1] : null;
        }
        function returnFileUrl(file) {

            var funcNum = getUrlParam( 'CKEditorFuncNum' );
            window.opener.CKEDITOR.tools.callFunction( funcNum, file );
            window.close();
        }
    </script>
@endsection
