@extends('master')

@section('content')
    <h1>All Articles</h1>
    @foreach($articles as $article)
        ID:{{$article->id}}<br>
        Name:{{$article->name}}<br>
        Body:{{$article->body}}<br>
        Author_Id:{{$article->author_id}}<br>
    @endforeach
@endsection
