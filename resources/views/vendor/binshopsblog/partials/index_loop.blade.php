{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.binshops.com for how to copy these files to your /resources/views/ directory--}}
{{--https://binshops.binshops.com/laravel-blog-package--}}


<div class="col-lg-4 col-md-6">
    <div class="blog-item mt-40">

        <div class="blog-thumb">
            <a href="{{$post->url($locale)}}">
                <img src="{{$post->image_url()}}" height="100px" width="100px" class="rounded-circle">
            </a>
        </div>

        <div class="blog-content">
            <h3 class="blog-title">
                <a href="{{$post->url($locale)}}">{{$post->title}}</a>
            </h3>
            @if (config('binshopsblog.show_full_text_at_list'))
            <p>{!! $post->post_body_output() !!}</p>
            @else
            <p>{!! mb_strimwidth($post->post_body_output(), 0, 600, "...") !!}</p>
            @endif
        </div>
    </div>
</div>