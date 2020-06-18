@extends('blog.layouts.app')

@section('title', $data['post']->meta['title'])

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

    @include('blog.partials.header')

    <div class="w-full mt-8">
        <main class="container mx-auto bg-white rounded shadow md:pt-4 pb-12 px-6 md:px-10">
            <div class="flex items-center justify-between py-6 border-b">
                <span class="text-gray-500">{{ \Carbon\Carbon::parse($data['post']->published_at)->format('M d, Y') }}</span>
                <!-- <span class="py-2 px-3 text-blue-500">Laravel</span> -->
            </div>
            <h1 class="text-4xl font-bold mt-8 mb-2">{{ $data['post']->title }}</h1>

            @isset($data['post']->featured_image)
                <img src="{{ $data['post']->featured_image }}" class="rounded-lg pt-12"
                        @isset($data['post']->featured_image_caption) alt="{{ $data['post']->featured_image_caption }}"
                        title="{{ $data['post']->featured_image_caption }}" @endisset>
                @isset($data['post']->featured_image_caption)
                    <p class="text-sub-header-gray font-rubik text-base text-center pt-6">{!! $data['post']->featured_image_caption !!}</p>
                @endisset
            @endisset

            <div class="text-post-content-gray font-rubik text-base leading-loose pt-6">{!! $data['post']->body !!}</div>

            <!-- <div class="flex justify-between pt-6">
                <a href="#" class="w-1/2 md:w-1/3">
                    <div class="flex flex-col py-4 px-3 md:px-10">
                        <div class="flex items-center justify-between text-gray-600">
                            <i class="fa fa-chevron-left"></i>
                            <p>Previous</p>
                        </div>
                        <h5 class="text-right text-lg mt-2 overflow-x-hidden">Deno vs. Node.js</h5>
                    </div>
                </a>
                <a href="#" class="w-1/2 md:w-1/3">
                    <div class="py-4 px-3 md:px-10">
                        <div class="flex items-center justify-between text-gray-600">
                            <p>Next</p>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                        <h5 class="text-lg mt-2 overflow-x-hidden">Laravel 7: What's New</h5>
                    </div>
                </a>
            </div> -->
        </main>
    </div>

    <div class="container mx-auto py-12 px-3">
        <h3 class="text-2xl font-bold">Comments</h3>
        <div id="disqus_thread" class="mt-6"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
            *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
            *  PLATFORM OR CMS.
            *  
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
            *  https://disqus.com/admin/universalcode/#configuration-variables
            */
            /*
            var disqus_config = function () {
                // Replace PAGE_URL with your page's canonical URL variable
                this.page.url = PAGE_URL;  
                
                // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                this.page.identifier = PAGE_IDENTIFIER; 
            };
            */
            
            (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                var d = document, s = d.createElement('script');
                
                // IMPORTANT: Replace EXAMPLE with your forum shortname!
                s.src = 'https://EXAMPLE.disqus.com/embed.js';
                
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                comments powered by Disqus.
            </a>
        </noscript>
    </div>

    @include('blog.partials.footer')

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
