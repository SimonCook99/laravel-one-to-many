@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div>
            <h1>Visualizza post</h1>
            <h3>Titolo: {{$post->title}}</h3>
            <h3>Contenuto: {!! $post->content !!}</h3>
            <h3>Slug: {{$post->slug}}</h3>
            <h3>Categoria: {{$post->category->name}}</h3>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna alla lista</a>
        </div>
    </div>
@endsection