@extends('blog.layouts.app')

@section('title', $data['post']->title)

@push('meta')
    <meta name="description" content="{{ $data['meta']['description'] }}">
    <meta property="og:type" content="article">

    @isset($data['meta']['canonical_link'])
        <link rel="canonical" href="{{ $data['meta']['canonical_link'] }}" />
    @endisset
    
    @isset($data['post']->featured_image)
        <meta name="og:image" content="{{ url($data['post']->featured_image) }}">
        <meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
    @endisset
@endpush

@section('content')
    <div class="container col-md-6">
        @include('blog.partials.navbar')

        @if($data['topics']->isNotEmpty())
            <div class="nav-scroller py-1 border-bottom">
                <nav class="nav d-flex justify-content-between">
                    @foreach($data['topics'] as $topic)
                        <a class="p-2 nav-item" href="{{ route('blog.topic', $topic->slug) }}">{{ $topic->name }}</a>
                    @endforeach
                </nav>
            </div>
        @endif

        <div class="row justify-content-md-center">
            <div class="col col">
                <h1 class="content-title pt-5 mb-2 @unless($data['post']->summary) mb-4 @endif">{{ $data['post']->title }}</h1>
                <span class="text-muted">{{ \Carbon\Carbon::parse($data['post']->published_at)->format('M d, Y') }} — {{ $data['post']->read_time }}</span>
                <div class="pb-3"></div>

                @isset($data['post']->featured_image)
                    <img src="{{ $data['post']->featured_image }}" class="w-100 pt-4"
                         @isset($data['post']->featured_image_caption) alt="{{ $data['post']->featured_image_caption }}"
                         title="{{ $data['post']->featured_image_caption }}" @endisset>
                    @isset($data['post']->featured_image_caption)
                        <p class="text-muted text-center pt-3" style="font-size: 0.9rem">{!! $data['post']->featured_image_caption !!}</p>
                    @endisset
                @endisset

                <div class="content-body serif mt-4">{!! $data['post']->body !!}</div>
            </div>
        </div>

        <div id="disqus_thread"></div>
                            
        @include('blog.partials.footer')
    </div>
@endsection

@push('scripts')
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://dgrzyb-me.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endpush
