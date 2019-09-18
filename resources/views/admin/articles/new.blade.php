@extends('layouts.admin')
@include('partials.admin.header')

@section('content')
    <!-- header -->
    <section class="jumbotron-fluid restyle form grid red d-flex align-items-center" style="background-position: center 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Cyberfusion <strong>Kennisbank</strong></h2>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-around">
                    <h2>Nieuw <strong>artikel</strong></h2>
                    <svg style="height: 8em" class="d-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.21 34.31"><title>Leren</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_4" data-name="Layer 4">
                                <polygon
                                    points="25.93 3.61 10.04 3.61 10.04 30.63 25.19 30.63 25.93 30.63 31.6 30.63 31.6 9.28 25.93 3.61"
                                    style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.36" y1="8.97" x2="22.32" y2="8.97"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.37" y1="10.99" x2="19.16" y2="10.99"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.34" y1="6.96" x2="15.96" y2="6.96"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.36" y1="15.03" x2="28.19" y2="15.03"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.38" y1="17.05" x2="23.76" y2="17.05"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.34" y1="13.01" x2="30" y2="13.01"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.36" y1="21.23" x2="25.25" y2="21.23"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.38" y1="23.25" x2="29.85" y2="23.25"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.34" y1="19.21" x2="29.35" y2="19.21"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.36" y1="27.29" x2="22.6" y2="27.29"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="12.34" y1="25.27" x2="26.74" y2="25.27"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <polygon points="25.93 9.28 31.6 9.28 25.93 3.61 25.93 9.28"
                                         style="fill:#ff6464;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <rect x="7.89" y="3.61" width="2.14" height="27.02"
                                      style="fill:#ff6464;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <rect x="5.75" y="3.61" width="2.14" height="27.02"
                                      style="fill:#fff;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <rect x="3.61" y="3.61" width="2.14" height="27.02"
                                      style="fill:#ff6464;stroke:#2e2e6e;stroke-linejoin:round;stroke-width:1.1px"/>
                                <line x1="0.55" y1="6.68" x2="0.55" y2="6.13"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"/>
                                <line x1="0.55" y1="5.13" x2="0.55" y2="1.6"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px;stroke-dasharray:1.00872004032135,1.00872004032135"/>
                                <polyline points="0.55 1.09 0.55 0.55 1.09 0.55"
                                          style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"/>
                                <line x1="2.1" y1="0.55" x2="5.63" y2="0.55"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px;stroke-dasharray:1.00872004032135,1.00872004032135"/>
                                <line x1="6.13" y1="0.55" x2="6.67" y2="0.55"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"/>
                                <line x1="34.66" y1="27.64" x2="34.66" y2="28.18"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"/>
                                <line x1="34.66" y1="29.19" x2="34.66" y2="32.72"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px;stroke-dasharray:1.00872004032135,1.00872004032135"/>
                                <polyline points="34.66 33.22 34.66 33.76 34.12 33.76"
                                          style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"></polyline>
                                <line x1="33.11" y1="33.76" x2="29.58" y2="33.76"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px;stroke-dasharray:1.00872004032135,1.00872004032135"/>
                                <line x1="29.08" y1="33.76" x2="28.54" y2="33.76"
                                      style="fill:none;stroke:#2e2e6e;stroke-miterlimit:10;stroke-width:1.1px"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End header -->

    <section class="jumbotron-fluid form restyle grid d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="post" class="p-0" action>
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="title"><h5>Artikel</h5></label>
                                    <input placeholder="Moderne hosting-technieken..." class="form-control" value="{{old('title')}}" type="text" id="title" name="title"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="status"><h5>Publicatie status</h5></label>
                                    <select name="state" id="status" class="form-control">
                                        <option value="draft">Draft</option>
                                        <option value="review">Ter review</option>
                                        <option value="planned">Gepland</option>
                                        <option value="published">Gepubliceerd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="summary"><h5>Korte samenvatting</h5></label>
                                    <input class="form-control" maxlength="128" type="text" name="summary" id="summary" value="{{ old('summary') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="category"><h5>Categorie</h5></label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach(\App\Category::where('parent_id', 0)->where('hidden', 0)->get() as $parent)
                                            <optgroup label="{{$parent->name}}">
                                                @foreach(\App\Category::where('parent_id', $parent->id)->where('hidden', 0)->get() as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="body"><h5>Artikel inhoud</h5></label>
                                <textarea name="body" id="body">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4 justify-content-end">
                                <button type="submit" class="btn btn-block">Aanmaken</button>
                            </div>
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

@section('footer-scripts')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
        });
    </script>
@endsection
