@extends('layout')

@section('content')

<div id="form-wrapper">
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
           <div>
             <label for="title">Title</label>
             <input type="text" id="title" name="title">
          </div>

           <div>
             <label for="description">Description</label>
             <input type="text" id="description" name="description">
           </div>

           <div>
             <textarea name="content" id="content" cols="30" rows="10"></textarea>
           </div>

           <div>
             <input type="file" name="image" id="file">
           </div>
           <button type="submit">Submit</button>
   </form>
</div>



@endsection
