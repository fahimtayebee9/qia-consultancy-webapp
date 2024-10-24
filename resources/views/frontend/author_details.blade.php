@extends('layouts.frontend')
@section('content')
<style>
    #blog_content ul {
        list-style: disc;
        margin: 0 0 1.5em 3em;
    }
</style>
<div class="qia-breadcrumbs img4" style="background-image: url({{ asset('storage/blog/'. $blog->bg_photo) }})" >
    <div class="breadcrumbs-inner text-center" style="padding: 50px 0px;">
        <h1 class="page-title new-title pb-10">{{ $blog->name }}</h1>
        <ul>
            <li title="QIA">
                <a class="active" href="{{ URL::to('/') }}">Home</a>
            </li>
            <li title="Go to Blog"><a class="active" href="{{ URL::to('learning-center') }}">Author</a></li>
            <li>{{ $blog->name }}</li>
        </ul>
    </div>
</div>

<div class="qia-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Latest Posts</h3>
                        </div>
                        @foreach ($relatedPosts as $post)
                            <div class="recent-post-widget">
                                <div class="post-img">
                                    <a href="{{ $post->slug }}"><img src="{{ asset('storage/blog/'. $post->cover_photo) }}" alt="{{ $post->cover_photo_alter_tag }}"></a>
                                </div>
                                <div class="post-desc">
                                    <a href="{{ $post->slug }}">{{ $post->header }} </a>
                                    <span class="date">
                                        <i class="fa fa-calendar"></i>
                                        {{ date('d F, Y', strtotime($post->created_at)) }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="categories mb-50">
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="categories mb-50" style="padding: 20px 180px 20px 60px;">
                      <section id="media_image-2" class="widget widget_media_image loaded" style=""><a href="https://qi-a.com/document-control/"><img data-no-retina="" sizes="(max-width: 160px) 100vw, 160px" srcset="https://www.qi-a.com/storage/upload/are-you-looking-for-document-control-software_1660198551.jpg 160w, https://www.qi-a.com/storage/upload/are-you-looking-for-document-control-software_1660198551.jpg 80w" style="max-width: 100%; height: auto;" loading="lazy" alt="Are you looking for Document Control software?" src="https://www.qi-a.com/storage/upload/Are-you-looking-for-document-control-software_1660198032.jpg" height="600" width="180" padding="0px"></a></section>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details">
                            <div class="blog-full">

                                <div id="blog_content">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endSection