@extends('layouts.frontend.frontapp')

@push('css')
<link href="{{ asset('public/assets/frontend/css/home.css') }}" rel="stylesheet">
@endpush

@section('content')

<section id="hero">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="main-title">
                    <h1>Egyedi honlapkészítés</h1>
                </div>
                <div class="description">
                    <p>WordPress alapú Honlap és Webáruház készítés <br>Rövid határidő, megengedhető árak, <br>profit orientált design!</p>
                </div>
                <div class="offer-btn">
                    <a href="#" class="btn btn-offer">Ajánlatot Kérek</a>
                </div>


            </div>

        </div>

    </div>

</section>

<section id="services">

    <div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>Szolgáltatásaink</h2>
            </div>
        </div>
    </div>

        <div class="row">

            <div class="col-lg-4">
                <a href="#">
                    <div class="service-box">
                        <div class="icon d-flex justify-content-center">
                            <svg width="50px" height="50px" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                                <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                            </svg>
                        </div>
                        <div class="service-title">
                            <h3>WordPress Honlapkészítés</h3>
                        </div>
                        <div class="service-desc">
                            <p>Ma már minden vállalkozásnak szüksége van honlapra. Mi elvállaljuk céges weboldalának teljes körű tervezését és fejlesztését rövid határidővel és megengedhető áron.</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="service-box">
                        <div class="icon d-flex justify-content-center">
                            <svg width="50px" height="50px" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </div>
                        <div class="service-title">
                            <h3>WordPress Webáruház</h3>
                        </div>
                        <div class="service-desc">
                            <p>Amennyiben szeretné termékét vagy szolgáltatását weboldalán keresztül értékesíteni, mi ebben is tudunk segíteni. Az általunk fejlesztett webáruházak keresőoptimalizáltak és profit orientált szemlélettel készülnek.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#">
                    <div class="service-box">
                        <div class="icon d-flex justify-content-center">
                            <svg width="50px" height="50px" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                            </svg>
                        </div>
                        <div class="service-title">
                            <h3>Egyedi Fejlesztés</h3>
                        </div>
                        <div class="service-desc">
                            <p>Komplexebb, egyedi fejlesztésű megoldásra van szüksége? Mi ebben is tudunk segíteni.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

</section>

<section id="recent-posts">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Blog Bejegyzéseink</h2>
                </div>
            </div>
        </div>

        <div class="row">

        @foreach($posts as $post)
            <div class="col-lg-4">
                <div class="post-container">
                    <div class="featured-image">
                        <a href="{{ route('post.details', $post->slug) }}">
                        <figure><img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid" lazy="loading"></figure>
                        </a>
                    <span class="post-cat">{{$post->category_name}}</span>
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
                    {!! str_limit($post->body, '150') !!}
                </div>
            </div>
        @endforeach

        </div>

    </div>

</section>

@endsection

@push('js')
@endpush
