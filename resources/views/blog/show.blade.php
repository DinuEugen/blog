@extends('layout')
@section('content')

<div class="blog-wrapper">
  <div class="show-container">
    <div class="left-content"><img src="{{ asset('images/'.$blog->image) }}" alt=""></div>
    <div class="right-content">
        <h1>{{ $blog->title }}</h1>
        <p>{{ $blog->description }}</p>
        <p>{{ $blog->content }}</p>
        <p>Posted on {{ $blog->created_at }}</p>
         <div class="button"><a href="{{ route('blog.index') }}">Go to all blogs</a></div>
    </div>


   </div>
</div>
@endsection

