<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Auth;
use Image;

class BlogController extends Controller
{
    // Blog Category related

    public function AllBlogCategory()
    {
        $blog_category_items = BlogCategory::latest()->paginate(5);
        return view('admin/blog_category/index', compact('blog_category_items'));
    }


    public function AddBlogCategory()
    {
        return view('admin/blog_category/add_blog_category');
    }


    public function StoreBlogCategory(Request $request)
    {
        
        BlogCategory::insert([
                
                'blog_category_title' => $request->blog_category_title,
                 'created_at' => Carbon::now()
            ]);
        return redirect()->route('all/blog/category')->with('success','Blog Category Added Successfully');
    }

    public function EditBlogCategory($id)
    {
        $edit_blogcategory = BlogCategory::find($id);
        return view('admin/blog_category/edit_blog_category',compact('edit_blogcategory'));
    }

    public function UpdateBlogCategory(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        // Image Intervansion use
        

        $update = BlogCategory::find($id)->update([
                
                'blog_category_title' => $request->blog_category_title,
                'created_at' => Carbon::now()
            ]);
               
        return redirect()->route('all/blog/category')->with('success','Blog Category Updated Successfully');
        
    
    }

    public function DeleteBlogCategory($id)
    {
        

        BlogCategory::find($id)->delete();
        return redirect()->back()->with('success','Blog Category Deleted Successfully');
    }


    // Blog post related
    public function BlogAll()
    {
        
        $blog_post_items = BlogPost::latest()->Paginate(5); 
        return view('admin/blog/index',compact('blog_post_items',));
    }

    public function AddBlogPost()
    {
        $categories = BlogCategory::orderBy('blog_category_title','ASC')->get();
        return view('admin/blog/add_blog_post',compact('categories'));
    }
    

    public function StoreBlogPost(Request $request)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        $blog_post_image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$blog_post_image->getClientOriginalExtension();
        Image::make($blog_post_image)->resize(1024, 768)->save('image/blogpost/'.$name_gen);
        $last_img = 'image/blogpost/'.$name_gen;

        BlogPost::insert([
                'user_id' => Auth::user()->id,
                'blog_category_id' => $request->blog_category_id,
                'blog_post_title' => $request->blog_post_title,
                'blog_description' => $request->blog_description,
                'tags' => $request->tags,
                'blog_image' =>$last_img,
                
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Blog Post Added Successfully', 
                'alert-type' => 'success'
            );

        return redirect()->route('blog/all')->with($notification);
    }
    

    public function EditBlogPost($id)
    {
        
        $edit_blogpost = BlogPost::find($id);
        $categories = BlogCategory::orderBy('blog_category_title','ASC')->get();
        return view('admin/blog/edit',compact('edit_blogpost','categories'));
    }

    public function UpdateBlogPost(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        // Image Intervansion use
        $change_blogpost_image = $request->old_blogpost_image;
        $blogpost_image = $request->file('blog_image');
        if ($blogpost_image) {
            $blogpost_image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$blogpost_image->getClientOriginalExtension();
            Image::make($blogpost_image)->resize(1024, 768)->save('image/blogpost/'.$name_gen);
            $last_imgUp = 'image/blogpost/'.$name_gen;

            // $img_name = $name_gen.'.'.$img_ext;
            // $up_location = 'image/blogpost/';
            // $last_imgUp = 'image/blogpost/'.$name_gen;
            // $blogpost_image->move($last_imgUp);
            // // $blogpost_image->move($up_location,$img_name);

            unlink($change_blogpost_image);

            $update = BlogPost::find($id)->update([
                'user_id' => Auth::user()->id,
                'blog_category_id' => $request->blog_category_id,
                'blog_post_title' => $request->blog_post_title,
                'blog_description' => $request->blog_description,
                'tags' => $request->tags,
                'blog_image' =>$last_imgUp,
                'created_at' => Carbon::now()
            ]);
            

            $notification = array(
                'message' => 'Blog Post Updated Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->route('blog/all')->with($notification);

            }else{

            $update = BlogPost::find($id)->update([
                'user_id' => Auth::user()->id,
                'user_id' => $request->blog_category_id,
                'blog_post_title' => $request->blog_post_title,
                'blog_description' => $request->blog_description,
                'tags' => $request->tags,
                'created_at' => Carbon::now()
            ]);
            
            $notification = array(
                'message' => 'Blog Post Updated Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->route('blog/all')->with($notification);

        }
    
    }


    public function DeleteBlogPost($id)
    {
        $delete_blogpost_image = BlogPost::find($id);
        $delete_image =$delete_blogpost_image->blog_image;
        unlink($delete_image);

        BlogPost::find($id)->delete();

        $notification = array(
            'message' => 'Blog Post Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

   
    public function CategoryBlogSingle($id)
    {
        $category_post = BlogPost::where('blog_category_id',$id)->orderBy('id','DESC')->get();
        $categories_all = BlogCategory::orderBy('blog_category_title','ASC')->get();
        return view('pages/cat_post_all',compact('category_post','categories_all'));
    }


}
