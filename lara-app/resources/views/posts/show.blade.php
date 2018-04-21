@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Back</a>
    <h1>{{$post->title}}</h1> 
<div>
    {!!$post->body!!}  {{--use this instead of that{{$post->body}} for the html markup in the ckeditor--}}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>  
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default bc-grey-1">Edit</a>
@endsection