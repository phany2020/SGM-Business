@extends('layouts.app')

@section('content')
    <h1> Liste des articles</h1> 
    @if($posts->count() >0)    
        @foreach($posts as $post)
            <h2><a href={{ route('posts.show', ['id' => $post->id])}}>{{ $post->title}}</a></h2>
            <h2>{{ $post->content}}</h2>
        @endforeach
    @else
        <span> Aucun post créé </span>
    @endif
@endsection