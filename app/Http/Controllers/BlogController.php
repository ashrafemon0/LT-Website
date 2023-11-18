<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\HtmlParserService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function AllBlog(){
        $blogs = Blog::latest()->paginate(5);
        return view('admin.Blogs.index', compact('blogs'));
    }

    public function StoreBlog(Request $request){
        $request->validate([
            'blog_title' => 'required',
            'blog_des' => 'required',
            'blog_author' => 'required',
            'blog_react' => 'required',
            'blog_comment' => 'required',
            'blog_img' => 'required',

        ],
            [
                'info_title.required' => 'Please Input Blog Title',
                'blog_des.required' => 'Please Input Blog Des',
                'blog_author.required' => 'Please Input Blog Author Name',
                'blog_img.required' => 'Please Input Blog Image',

            ]);

        $Blog_image =  $request->file('blog_img');


        $name_gen = hexdec(uniqid()).'.'.$Blog_image->getClientOriginalExtension();
        Image::make($Blog_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        Blog::insert([
            'blog_title' => $request->blog_title,
            'blog_des' => $request->blog_des,
            'blog_author' => $request->blog_author,
            'blog_react' => $request->blog_react,
            'blog_comment' => $request->blog_comment,
            'blog_img' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Blog Post Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
    public function Edit($id){

        $blog = Blog::findOrFail($id);
        return view('admin.Blogs.edit',compact('blog'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'blog_title' => 'required',
            'blog_des' => 'required',
            'blog_author' => 'required',
            'blog_react' => 'required',
            'blog_comment' => 'required',


        ],
            [
                'info_title.required' => 'Please Input Blog Title',
                'blog_des.required' => 'Please Input Blog Des',
                'blog_author.required' => 'Please Input Blog Author Name',
            ]);


        $blog_id = $request->id;


        if ($request->file('blog_img')) {

            $image = $request->file('blog_img');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(740,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_title' => $request->blog_title,
                'blog_des' => $request->blog_des,
                'blog_author' => $request->blog_author,
                'blog_react' => $request->blog_react,
                'blog_comment' => $request->blog_comment,
                'blog_img' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Campus Info Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            Blog::findOrFail($blog_id)->update([

                'blog_title' => $request->blog_title,
                'blog_des' => $request->blog_des,
                'blog_author' => $request->blog_author,
                'blog_react' => $request->blog_react,
                'blog_comment' => $request->blog_comment,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Blog Post Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method

    public function Delete($id){

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Post Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method
    public function show($id, HtmlParserService $htmlParserService)
    {
        // Retrieve the blog content from the database
        $blog = Blog::findOrFail($id);

        // Parse and limit the HTML content
        $limitedContent = $htmlParserService->parseAndLimitParagraph($blog->blog_des, 10);

        return view('Blogs.show', compact('limitedContent'));
    }
}
