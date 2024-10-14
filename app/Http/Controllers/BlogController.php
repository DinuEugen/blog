<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
public function index()
{
    $blogs=Blogs::latest()->get();
    return view('blog.index') ->with('blogs',$blogs);
}
public function create(){

    return view('blog.create');
}
public function store(Request $request)
{
    $request->validate([
        'title'=>'required',
        'description'=>'required',

        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max
        :2048',
        ]);
    $newImageName=time().'-'.$request->title.'.'.$request->image->extension();
$request->image->move(public_path('images'),$newImageName);
$blog=new Blogs();
$blog->title=$request->title;
$blog->description=$request->description;
$blog->content=$request->content;
$blog->image=$newImageName;
$blog->save();
return redirect()->route('blog.index')->with('success','Blog created successfully');

    }
public function edit(Blogs $blog){
        return view('blog.edit')->with('blog',$blog);

    }
    public function update(Request $request ,Blogs $blog){
         $blog->title=$request->title;
         $blog->description=$request->description;
         $blog->content=$request->content;
         if($request->image){
            $request->validate([
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max
                :2048',
                ]);
                $newImageName=time().'-'.$request->title.'.'.$request->image->extension();
                $blog->image=$newImageName;
                $request->image->move(public_path('images'),$newImageName);
                };
                $blog->save();
                return redirect()->route('blog.index')->with('success','Blog updated successfully');
         }
         public function show(Blogs $blog){
            return view('blog.show')->with('blog',$blog);

         }
         public function destroy(Blogs $blog){
            $blog->delete();
            return redirect()->route('blog.index')->with('success','Blog deleted successfully');


         }





    }


