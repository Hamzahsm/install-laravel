@extends('layouts.main')

@section('container')
    <div class="text-center">
        <h1>{{ $name }}</h1>
        <h2>{{ $kampus }}</h2>
        <h4>{{ $jurusan }}</h4>
        <img src="img/{{ $image }}" alt="" class="img-thumbnail rounded-circle">
    </div>


@endsection

