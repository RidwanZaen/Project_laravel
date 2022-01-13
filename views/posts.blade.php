
@extends('layouts/main')
@section('container')
    <article class="mb-5">
    @foreach ($posts as $post)
    <h2> {{ $post["title"] }} </h2>
    <h5> By : {{ $post["author"] }} </h5>
    <p> {{ $post["body"] }}
</article>
    @endforeach

@endsection