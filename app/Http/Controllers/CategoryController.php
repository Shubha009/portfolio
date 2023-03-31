<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllCat()
    {

        $category_item = Category::latest()->paginate(5);
        $trashCat = Category::onlyTrashed()->latest()->paginate(3);

        return view('admin/category/index',compact('category_item','trashCat'));
    }

    public function AddCat(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Less Then 255Chars', 
        ]);

        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,
        //      'created_at' => Carbon::now()
        // ]);

       $category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();

        $notification = array(
            'message' => 'Category name Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('category/all')->with($notification);

    }


    public function EditCat($id)
    {
        $category_item = Category::find($id);
        return view('admin/category/edite',compact('category_item'));
    }

    public function Update(Request $request, $id)
    {
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => 'Category name Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('category/all')->with($notification);

    }


    public function SoftDelete($id)
    {
        $delete = Category::find($id)->delete();

        $notification = array(
            'message' => 'Category Delete Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    public function Restore($id)
    {
        $restore = Category::withTrashed()->find($id)->restore();

        $notification = array(
            'message' => 'Category Restore Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }


    public function PDelete($id)
    {
        $pdelete = Category::withTrashed()->find($id)->forceDelete();

        $notification = array(
            'message' => 'Category Permanently Deleted', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

}
