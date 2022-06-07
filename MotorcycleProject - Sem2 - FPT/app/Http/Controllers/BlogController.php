<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(50);
        return view('blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function home(){
        $blogs = Blog::latest()->get();
        return view('home',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);
    }





    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'blogCode' => 'required',
            'title'  => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'createdBy' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Blog::create($input);
        return redirect()->route('blogs.index')->with('success','Created Successful.');
    }


    public function show(Blog $blog )
    {
        return view('blogs.show',compact('blog'));
    }


    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }


    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blogCode' => 'required',
            'title'  => 'required',
            'description' => 'required',
            'content' => 'required',
            'createdBy' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $blog->update($input);
        return redirect()->route('blogs.index')->with('success','Updated Successful');
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success','Blog has been deleted');
    }

    public function wordExport( Blog $blog,$id){
        $blog = Blog::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/blog.docx');
        $templateProcessor->setValue('title',$blog->title);
        $templateProcessor->setValue('description',$blog->description);
        $templateProcessor->setValue('content',$blog->content);
        $templateProcessor->setValue('createdBy',$blog->createdBy);
        $filename = $blog->title;
        $templateProcessor->saveAs($filename.'.docx');
        return response()->download($filename.'.docx')->deleteFileAfterSend(true);
    }

}
