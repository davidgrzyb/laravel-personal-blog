@extends('blog.layouts.app')

@section('title', config('blog.meta.title'))
@section('description', config('blog.meta.description'))

@section('content')
    <div class="container col-md-6">
        @include('blog.partials.navbar')

        {{--
            @if($data['topics']->isNotEmpty())
                <div class="nav-scroller py-1 mb-5 border-bottom">
                    <nav class="nav d-flex justify-content-between">
                        @foreach($data['topics'] as $topic)
                            <a class="p-2 nav-item" href="{{ route('blog.topic', $topic->slug) }}">{{ $topic->name }}</a>
                        @endforeach
                    </nav>
                </div>
            @endif
        --}}

        <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark"
            style="background: linear-gradient(rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url(''); background-size: cover">
            <div class="col-md-8 px-0">
                <h1 class="display-4 font-italic"><a href="#"
                                                        class="text-white text-decoration-none">Featured</a>
                </h1>
                <p class="lead my-3"><a href="#"
                                        class="text-white text-decoration-none">featured text</a></p>
                <p class="lead mb-0"><a href="#"
                                        class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div> -->
    </div>

    <main role="main" class="container col-md-6 pl-4">
        <div class="row">
            <div class="col blog-main pt-5">
                <!-- <h3 class="pb-4 mb-4 font-italic border-bottom">
                    {{ __('canvas::blog.posts.label') }}
                </h3> -->
                @if(count($data['posts']) > 0)
                    @foreach($data['posts'] as $post)
                        <div class="blog-post">
                            <h2 class="blog-post-title"><a href="{{ route('blog.post', $post->slug) }}" class="text-decoration-none">{{ $post->title }}</a></h2>
                            <p class="blog-post-meta small">{{ $post->published_at->format('M d') }} — {{ $post->read_time }}</p>
                            <p><a href="{{ route('blog.post', $post->slug) }}" class="summary text-decoration-none">{{ $post->summary }}</a></p>
                        </div>
                    @endforeach

                    {{ $data['posts']->links() }}
                @else
                    <h5 class="text-center summary pb-5 pt-5" style="font-weight:400;">Oops! Looks like I don't have any posts here yet 😢</h5>
                @endif
            </div>
        </div>

        @include('blog.partials.footer')
    </main>
@endsection
