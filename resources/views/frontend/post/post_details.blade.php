@extends('frontend.master')

@section('body')
    <header class="masthead" style="background-image: url('{{asset('assets')}}/assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>

                        <span class="meta">
                                Posted by
                                <a href="#!">{{$post->user->name}}</a>
                                on {{date('F d, Y',strtotime($post->created_at))}}
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{{$post->content}}</p>
                        Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>
                        &middot; Images by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                    </p>
                </div>
            </div>
        </div>
    </article>

    @endsection
