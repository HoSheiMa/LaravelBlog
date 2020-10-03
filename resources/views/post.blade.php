@extends('layouts.frontend.frontapp')

@php
    $meta_title = $post->meta_title;
    $meta_description = $post->meta_description;
@endphp

@push('css')
<link href="{{ asset('public/assets/frontend/css/post.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container post-container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-9">

            <div class="single-post-container">

                    <div class="single-post-content">
                        <div class="single-post-title-container">
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>
                        </div>
                        <div class="single-post-body">
                            {!! $post->body !!}
                        </div>
                    </div><!-- /.single-post-content -->

                <div class="single-post-share">
                    <p>SHARE: </p>
                </div>

            </div>

            <!-- NEWSLETTER AREA START -->
            <div class="subscription-form-area">
                <div class="subscription-title">
                    <h3>Subscribe to our newsletter!</h3>
                    <p>Get the latest tutorials and articles right into your inbox!</p>
                </div>
                <div class="subscription-form">
                    <form action="https://avrasys.net/subscribe" method="POST" accept-charset="utf-8">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name" id="name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email address" aria-label="Email address" name="email" id="email">
                            </div>
                        </div>
                        <div style="display:none;">
                            <label for="hp">HP</label><br/>
                            <input type="text" name="hp" id="hp"/>
                        </div>
                        <input type="hidden" name="list" value="YKQWdykUfx5qAQTrSXgflg"/>
                        <input type="hidden" name="subform" value="yes"/>
                        <input type="submit" name="submit" id="submit" class="btn btn-comment mt-4" value="Subscribe" />

                    </form>
                </div>

            </div>

            <!-- COMMENT AREA START -->
            @php
                $commentLength = 0;
                for ($k=0; $k < sizeof($post->comments); $k++) {
                    $commentLength++;
                    for ($v = 0; $v < sizeof($post->comments[$k]->reply); $v++) {
                    $commentLength++;
                    }
                }
            @endphp
            <blockquote>
                @if($commentLength <= 1)
                    {{ $commentLength }} comment
                @else
                    {{ $commentLength }} comments
                @endif
            </blockquote>

            @if(session('successMsg'))
                <div class="alert alert-success">
                    {{ session('successMsg') }}
                </div>
            @endif

            <div class="comment-area">

                <div class="comment-form">
                    <div class="comment-form-title">
                        <h4>HOZZÁSZÓLOK A CIKKHEZ</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>

                    @guest
                    <div class="alert alert-info" role="alert">
                        Only logged in users are allowed to post comments. Log in <a href="{{ route('login') }}">here</a>.
                    </div>
                    @else
                    <form action="{{ route('comment.store', $post->id) }}" method="post" class="row g-3">
                    @csrf
                        <div class="col-12">
                            <label for="comment" class="form-label">Comment*</label>
                            <textarea class="form-control" id="comment" rows="6" name="comment" required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-comment">Submit</button>
                        </div>
                    </form>
                    @endguest

                </div>


                <div id="comments" class="comments-container">
                    @foreach($post->comments as $comment)
                        <div class="thecomment">
                            <div class="author-img">
                                <img src="{{ asset('public/assets/frontend/images/avatar.jpg') }}" width="80" height="80" alt="{{ $comment->user->name }}">
                            </div>
                            <div class="comment-text">
                                <span class="author">
                                    <span>
                                        <a class="url" href="#">{{ $comment->user->name }}</a>
                                    </span>

                                </span>
                                <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
                                <div class="comment-content">
                                    {{ $comment->comment }}
                                </div>(
                                <span class="reply">
                                    <a onclick="$('#replyForm-{{$comment->id}}').toggle()" class="comment-reply-link">Reply</a>
                                </span>
                            </div>

                          @foreach ($comment->reply as $reply)
                          <div class="thecomment replied">
                            <div class="author-img">
                                <img src="{{ asset('public/assets/frontend/images/avatar.jpg') }}" width="80" height="80" alt="">
                            </div>
                            <div class="comment-text">
                                <span class="author">
                                    <span>
                                        <a class="url" href="#">{{ $reply->name }}</a>
                                    </span>

                                </span>
                                <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
                                <div class="comment-content">
                                    <p>
                                        {{$reply->comment}}
                                    </p>
                                </div>
                                <span class="reply">
                                    <a onclick="$('#replyForm-{{$comment->id}}').toggle()"  class="comment-reply-link">Reply</a>
                                </span>
                            </div>
                        </div>
                          @endforeach

                          @guest
                          <div class="alert alert-info" role="alert">
                              Only logged in users are allowed to post comments. Log in <a href="{{ route('login') }}">here</a>.
                          </div>
                          @else
                          <form style="display:none" id="replyForm-{{$comment->id}}" action="{{ route('comment.reply',[ "post" => $post->id , "CommentId" =>$comment->id] ) }}" method="post" class="row g-3">
                          @csrf
                          <div class="col-12" >
                                  <label for="comment" class="form-label">Comment*</label>
                                  <textarea class="form-control" id="comment" rows="6" name="comment" required></textarea>
                              </div>

                              <div class="col-12">
                                  <button type="submit" class="btn btn-comment">Submit</button>
                              </div>
                          </form>
                          @endguest
                        </div>
                    @endforeach


                </div>

            </div> <!-- /.comment-area -->

        </div><!-- /.col-md-8 -->

        @include('layouts.frontend.partials.sidebar')

    </div><!-- /.row -->
</div> <!-- /.container -->

@endsection

@push('js')
@endpush
