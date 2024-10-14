@extends('layout')

@section('content')

<div id="form-wrapper">
    <form action="{{route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="hidden" name="id" value="{{$blog->id}}">

           <div>
             <label for="title">Title</label>
             <input type="text" id="title" name="title" value={{ $blog->title }}>
          </div>

           <div>
             <label for="description">Description</label>
             <input type="text" id="description" name="description" value={{ $blog->description }}>
           </div>

           <div>
             <textarea name="content" id="content" cols="30" rows="10">{{ $blog->content }}</textarea>
           </div>

           <div>
             <input type="file" name="image" id="file">
           </div>
           <button type="submit">Submit</button>
   </form>
</div>



@endsection
