@extends('layout')
@section('content')

<div class="blog-wrapper">
    @foreach($blogs as $blog)
<div class="blog-card">
    <img src="{{ asset('images/'.$blog->image) }}" alt="">
    <div class="blog-content">
        <div class="title"> {{ $blog->title }}</div>
        <div class="description">{{ $blog->description }}</div>
        <div class="date">{{ $blog->created_at }}</div>
    </div>
    <div class="button-wrapper">
     <a href="{{ route('blog.show',$blog->id) }}"><div class="button">Read more</div></a>
    </div>
    <div class="button-wrapper">

        <a href="{{ route('blog.edit',$blog->id) }}"><div class="button" style="margin-top: 2px; background-color:aqua">Edit</div></a>
        </div>
        <div class="button-wrapper">
            <form action="{{ route('blog.delete',$blog->id) }}" method="POST">
                @csrf
                @method("DELETE")
          <button type="submit" class="button">Delete</button>
        </form>
           </div>
</div>
@endforeach
</div>
@endsection

