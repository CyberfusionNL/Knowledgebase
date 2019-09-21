<div class="col-3 px-0">
    @foreach(\App\Category::where('hidden', 0)->where('parent_id', 0)->get() as $category)
        <div class="collapse-container mb-4">
            <a class="btn sidebar-link">{{$category->name}}</a>
            <div class="collapse sidebar">
                <ul class="pl-0">
                    @foreach(\App\Category::where('hidden', 0)->where('parent_id', $category->id)->get() as $subcategory)
                        <li style="list-style-image: none">
                            <svg style="height: 1em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 99 99"><defs><linearGradient id="Naamloos_verloop_2" x1="-48.98" y1="149.51" x2="-47.99" y2="149.51" gradientTransform="matrix(0, -99.09, -99.09, 0, 14863.62, -4754.79)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00dada"/><stop offset="1" stop-color="#3c92ff"/></linearGradient></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Laag_1" data-name="Laag 1"><path d="M49.5,81.59A40.3,40.3,0,1,0,49.5,1V0a41.3,41.3,0,1,1,0,82.59v-1Zm0-64.18A40.3,40.3,0,1,0,49.5,98v1a41.3,41.3,0,1,1,0-82.59v1ZM82.09,49.5h.5A33.09,33.09,0,1,1,49.5,16.41,33.08,33.08,0,0,1,82.59,49.5h-1A32.09,32.09,0,1,0,49.5,81.59,32.13,32.13,0,0,0,81.59,49.5Zm16.41,0H99A49.5,49.5,0,0,1,49.5,99h0A49.5,49.5,0,1,1,99,49.5H98A48.5,48.5,0,1,0,49.5,98,48.56,48.56,0,0,0,98,49.5Z" style="fill:url(#Naamloos_verloop_2)"/></g></g></svg>
                            <a class="btn collapse sub sidebar-link d-inline-block pb-2">{{$subcategory->name}}</a>
                            <div class="collapse sidebar">
                                <ul>
                                    @foreach($subcategory->public_articles as $item)
                                        <li style="list-style-image: none; list-style-type: disc; color:#2e2e6e;font-size: .8em"><a href="">{{$item->title}}</a></li>
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
