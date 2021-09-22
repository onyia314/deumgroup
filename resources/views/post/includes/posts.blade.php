<div class="recent_post_widget mt-5">
    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent Post</h4>
    <ul>

        @foreach ($posts as $post)
        <li>
            <a href="#"><img src="{{'/uploads' .'/' .$post->image_path}}" alt=""></a>
            <div class="post-info">
                <h6 class="text-secondary hover-text-primary"><a href="#">{{$post->title}}</a></h6>
                <span>{{$post->created_at->format('d/m/Y')}}</span> 
            </div>
        </li>    
        @endforeach
        
    </ul>
</div>