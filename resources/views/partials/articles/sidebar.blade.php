<div class="col-4">
    @foreach(\App\Category::where('hidden', 0)->where('parent_id', 0)->get() as $category)
        <div class="collapse-container mb-4">
            <a class="btn sidebar-link">{{$category->name}}</a>
            <div class="collapse sidebar">
                <ul>
                    @foreach(\App\Category::where('hidden', 0)->where('parent_id', $category->id)->get() as $subcategory)
                        <li>
                            <a class="btn collapse sub sidebar-link">{{$subcategory->name}}</a>
                            <div class="collapse sidebar">
                                <ul>
                                    @foreach(\App\Category::where('hidden', 0)->where('parent_id', $subcategory->id)->get() as $supersubcategory)
                                        <li style="list-style-image: none; list-style-type: disc; color:#2e2e6e;font-size: .8em"><a style="color:#2e2e6e !important;font-weight: 400" href="">{{$supersubcategory->name}}</a></li>
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
