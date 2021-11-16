@extends('layouts.main')

@section('container')
{{-- karena datanya banyak, mengambil dari array, maka kita looping menggunakan foreach --}}
    @foreach ($posts as $post)
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>

        <a href="/post/{{ $post['slug'] }}">read more...</a>
    @endforeach
@endsection

