<div class="property_list_widget mt-5">
    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Latest Property</h4>
    <ul>
        @foreach ($lands as $land)
            <li>
                <a href="#"><img src="{{'/uploads' .'/' .$land->image_path}}" alt=""></a>
                <div class="thumb-body">
                    <h6 class="text-secondary hover-text-primary"><a href="property-single-1.html">Deumgroup Realestate</a></h6>
                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> {{$land->location}}</span>
                    <div class="mt-2 d-flex">
                        <span class="text-primary h6">{{$land->area}}</sub></span>
                        <span class="mx-2">|</span>
                        <span class="text-secondary">{{$land->price}}</span>
                    </div>
                </div>
            </li>    
        @endforeach
        
    </ul>
</div>