@extends('blog.layouts.app')

@section('title', config('blog.meta.title'))
@section('description', config('blog.meta.description'))

@section('content')
    @include('blog.partials.header')

    <div class="w-full mt-2 mb-10">
        <main class="container mx-auto">
            <div class="flex flex-col md:flex-row px-3 md:px-0">
                <!-- Latest Posts Section -->
                <section class="w-full md:w-2/3 mr-4">

                    @foreach($data['posts'] as $post)
                        <article class="w-full py-2 bg-white py-4 px-8 my-8 shadow-md">
                            <!-- Timestamp & Category -->
                            <div class="flex items-center justify-between pt-4 pb-6 text-gray-700 border-b">
                                <span>{{ Carbon\Carbon::parse($post->published_at)->format('M d') }} @if($post->pinned) - Pinned @endif</span>
                                <span class="text-gray-700">
                                    {{ getReadTime($post->body) }}
                                </span>
                            </div>
                            <!-- Title & Excerpt -->
                            <div class="flex flex-col items-center py-6">
                                <a href="{{ route('blog.post', $post->slug) }}" class="font-bold text-2xl hover:underline">{{ $post->title }}</a>
                                <a href="{{ route('blog.post', $post->slug) }}" class="text-lg pt-4">{{ $post->summary }}</a>
                            </div>
                            <!-- Read More Button & Reaction Count -->
                            <!-- <div class="flex items-center justify-between py-4 text-gray-700">
                                <a href="{{ route('blog.post', $post->slug) }}" class="rounded-full outline py-2 px-3 hover:bg-black hover:text-white border border-gray-700 hover:border-transparent transition duration-100 ease-in">Read More</a>
                                <button class="text-lg hover:text-red-600"><i class="far fa-heart"></i> 187</button>
                            </div> -->
                        </article>
                    @endforeach

                    {{ $data['posts']->links('vendor.pagination.default') }}
                </section>
                
                @include('blog.partials.sidebar')
            </div>
        </main>
    </div>

    @include('blog.partials.footer')
@endsection
