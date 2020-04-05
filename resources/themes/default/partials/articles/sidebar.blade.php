<div class="col-12 col-sm-3 px-0">
    @foreach(\App\Models\Category::where('hidden', 0)->where('parent_id', 0)->where('type', request()->route()->parameter('type'))->get() as $category)
        <div class="collapse-container mb-4">
            <a class="btn sidebar-link">{{$category->name}}</a>
            <div class="sidebar">
                <ul class="pl-0">
                    @foreach(\App\Models\Category::where('hidden', 0)->where('parent_id', $category->id)->where('type', request()->route()->parameter('type'))->get() as $subcategory)
                        <li style="list-style-type: none" class="ml-3">
                            <a class="btn collapse sub sidebar-link d-inline-block pb-2">{{$subcategory->name}}</a>
                            <div class="sidebar">
                                <ul>
                                    @foreach($subcategory->public_articles as $item)
                                        @if(request()->routeIs('admin.preview_article'))
                                        <li style="font-size: .8em"><a href="{{route('admin.preview_article', ['id' => $item->id])}}">{{$item->title}}</a></li>
                                        @else
                                            <li style="font-size: .8em"><a href="{{route('article', ['type' => $item->type, 'slug' => $item->slug])}}">{{$item->title}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
