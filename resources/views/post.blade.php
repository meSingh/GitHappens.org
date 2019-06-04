@extends('layouts.app')

@section('meta')
    <meta property="og:url"                content="{{ url()->current() }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->summary_short }}" />
    <meta property="og:image"              content="{{ $post->preview_image }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ '@'. config('me.social.twitter') }}" />
    <meta name="twitter:title" content="{{ $post->title }}" />
    <meta name="twitter:description" content="{{ $post->summary_short }}" />
    <meta name="twitter:image" content="{{ $post->preview_image }}" />
@endsection

@section('content')

    <section class="post">
        <article class="mb-6">
            @include('post-content', ['type' => 'single'])
        </article>
    </section>

    <section class="max-w-5xl mx-auto bg-gray-200 shadow-theme mt-6 mb-10 max-w-5xl rounded py-3 px-6">
        <h3 class="mb-0">Want to Contribute?</h3>

        <p class="mb-4">Send me an <a href="mailto:{{ config('me.email') }}?Subject={{ config('me.name') }}">Email</a>, ping me on <a href="https://twitter.com/{{ config('me.social.twitter') }}" class="text-blue-500 hover:text-blue-300">Twitter</a> or submit a pull request on <a href="https://github.com/{{ config('me.social.github') }}/pulls" class="text-orange-400 hover:text-orange-300">Github</a>.</p>

    </section>


    <section class="max-w-5xl mx-auto">

        <div class="flex flex-col md:flex-row text-xl px-3 md:px-0">
            <div class="w-full md:w-1/2 border-0 md:border-r border-gray-200 border-solid">
                @if($post->previous)
                    <h3><a href="{{ route('post', $post->previous->slug) }}" class="text-gray-800 hover:text-purple-500 no-underline">
                    <span class="block text-sm text-gray-500">&laquo; Previous Article</span> {{ $post->previous->title }}</a></h3>
                @endif
            </div>
            <div class="w-full md:w-1/2 text-right">
                @if($post->next)
                    <h3><a href="{{ route('post', $post->next->slug) }}" class="text-gray-800 hover:text-purple-500 no-underline"><span class="block text-sm text-gray-500">Next Article &raquo;</span>{{ $post->next->title }} </a></h3>
                @endif
            </div>
        </div>


    </section>



@endsection