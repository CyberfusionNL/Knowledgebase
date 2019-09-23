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
                    <div>
                        <h2>Update <strong>artikel</strong></h2>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <ul>
                                    <li>{{$error}}</li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
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
                                    <input placeholder="Moderne hosting-technieken..." class="form-control" value="{{old('title') ?: $article['title']}}" type="text" id="title" name="title"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label for="slug"><h5>Slug</h5></label>
                                    <input placeholder="moderne-hosting-technieken" class="form-control" value="{{old('slug') ?: $article['slug']}}" maxlength="64" type="text" id="slug" name="slug"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label for="status"><h5>Publicatie status</h5></label>
                                    <select name="state" id="status" class="form-control">
                                        <option {{ selected($article['state'], 'draft') }} value="draft">Draft</option>
                                        <option {{ selected($article['state'], 'review') }} value="review">Ter review</option>
                                        <option {{ selected($article['state'], 'planned') }} value="planned">Gepland</option>
                                        <option {{ selected($article['state'], 'published') }} value="published">Gepubliceerd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="summary"><h5>Korte samenvatting</h5></label>
                                    <input class="form-control" maxlength="128" type="text" name="summary" id="summary" value="{{ old('summary') ?: $article['short_summary'] }}" />
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="category"><h5>Categorie</h5></label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach(\App\Category::where('parent_id', 0)->where('hidden', 0)->get() as $parent)
                                            <optgroup label="{{$parent->name}} ({{$parent->type}})">
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
                                <textarea name="body" id="body">{{ old('body') ?: $article['body']  }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4 justify-content-end">
                                <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer-scripts')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
        });
    </script>
@endsection
