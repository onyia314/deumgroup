<div class="navigation_link_widget mt-5">
    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Categories</h4>
    <ul>
        @foreach ($categories as $category)
            <li><a href="#">{{$category->name .'(' .$category->posts->count() .')'}}</a></li>     
        @endforeach
       
    </ul>
</div>