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
        <div class="flex justify-center">
            <div class="md:w-3/5">
                @include('blog.partials.navbar')
            </div>
        </div>

        <main role="main" class="flex justify-center pl-8 pr-8">
            <div class="w-full md:w-3/5 border-gray border-t pb-8">
                <h1 class="text-post-title-link-gray font-rubik text-3xl font-medium pt-12 pb-2">
                    {{ $data['post']->title }}
                </h1>
                <span class="text-sub-header-gray font-rubik text-base">
                    {{ \Carbon\Carbon::parse($data['post']->published_at)->format('M d, Y') }} — {{ $data['post']->read_time }}
                </span>

                @isset($data['post']->featured_image)
                    <img src="{{ $data['post']->featured_image }}" class="rounded-lg pt-12"
                         @isset($data['post']->featured_image_caption) alt="{{ $data['post']->featured_image_caption }}"
                         title="{{ $data['post']->featured_image_caption }}" @endisset>
                    @isset($data['post']->featured_image_caption)
                        <p class="text-sub-header-gray font-rubik text-base text-center pt-6">{!! $data['post']->featured_image_caption !!}</p>
                    @endisset
                @endisset

                <div class="text-post-content-gray font-rubik text-base leading-loose pt-6">{!! $data['post']->body !!}</div>
                
            </div>
        </main>

        <div class="flex justify-center pl-10 pr-10">
            <div class="w-full md:w-3/5 pt-3 pb-1">
                <div id="disqus_thread"></div>
            </div>
        </div>
                            
        <div class="flex justify-center pl-10 pr-10">
            <div class="md:w-3/5 border-gray border-t pt-6 pb-4">
                @include('blog.partials.footer')
            </div>
        </div>
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
