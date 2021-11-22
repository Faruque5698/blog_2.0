@extends('frontend.master')


@section('body')
    <header class="masthead" style="background-image: url('{{asset('assets')}}/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Laravel Blog</h1>
                        <span class="subheading">Blog websites powered by Ashaduzzaman</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{route('post_details',['id'=>$post->id])}}">
                        <h2 class="post-title">{{$post->title}}</h2>

                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="">{{$post->user->name}}</a>
                        on {{date('F d, Y', strtotime($post->created_at))}}
                            |
                        <i class="fa fa-comment" aria-hidden="true"></i>{{$post->comment->count()}}

                    </p>



                </div>

                <!-- Divider-->
                <hr class="my-4" />
            @endforeach

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>

    @endsection
