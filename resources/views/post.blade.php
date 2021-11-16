@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post["title"] }}</h2>
    <p>By : {{ $post["author"] }}</p>
    <p> {{ $post["body"] }}</p>
</article>

<a href="/blog">Back to Blog</a>

@endsection