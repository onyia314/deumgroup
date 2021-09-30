<div class="featured_property_widget mt-5">
    <h4 class="mt-5 mb-4 text-secondary">Featured Property</h4>
    <div class="owl-carousel featured-property">

        @foreach ($lands as $land)
            <div class="featured-thumb hover-zoomer mb-4 bg-gray">
                <div class="overflow-hidden position-relative"> <img src="{{'/uploads' .'/' .$land->image_path}}" alt="">
                    <div class="featured bg-primary text-white">Featured</div>
                    {{-- <div class="sale bg-secondary text-white">For Sale</div>
                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                    <div class="starmark text-white"><i class="far fa-star"></i></div> --}}
                </div>
                <div class="featured-thumb-data">
                    <div class="p-4">
                        <h5 class="text-secondary hover-text-primary mb-2"><a href="{{route('lands.show' , $land->id)}}">Deum Realestate</a></h5>
                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> {{$land->location}}</span> </div>
                </div>
            </div>    
        @endforeach
        
    </div>
</div>