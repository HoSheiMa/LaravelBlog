@extends('layouts.frontend.frontapp')

@push('css')
<link href="{{ asset('public/assets/frontend/css/blog.css') }}" rel="stylesheet">
@endpush

@section('content')

<section id="main-blog">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Category: {{ $category->name }}</h1>
            </div>
        </div>
    </div>

</section>

<section id="recent-posts">

    <div class="container">
    
        <div class="row">
        
        @if($category->posts->count() > 0)
            @foreach($category->posts as $post)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="post-container">
                    <div class="featured-image">
                        <a href="{{ route('post.details', $post->slug) }}">
                        <figure><img src="{{ route('home') . '/' . $post->image }}" alt="{{ $post->title }}" class="img-fluid" lazy="loading"></figure>
                        </a>
                        <span class="post-cat">category name</span>
                    </div>
                </div>
                <div class="post-meta d-flex justify-content-between">
                    <div class="post-date">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" style="margin-top: -5px;" class="bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg> {{ $post->created_at->diffForHumans() }}
                    </div>
                    <div class="post-comments">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" class="bi bi-chat-left-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg> {{ $post->comments->count() }}
                    </div>
                </div>
                <div class="post-title">
                    <h3><a href="{{ route('post.details', $post->slug) }}">{{ $post->title }}</a></h3>
                </div>
                <div class="post-excerpt">
                    {!! str_limit($post->body, 150) !!}
                </div>
            </div>
            @endforeach

        @else 
            <div class="col-lg-12">
                <h4 class="text-center">No posts in this category!</h4>
            </div>
        @endif
        
        </div> <!-- /.row -->
    
    </div>

</section>

@endsection

@push('js')

@endpush
