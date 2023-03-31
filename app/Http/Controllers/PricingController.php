<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Pricing;
use App\Models\Feture_list;
use App\Models\Pricing_category;
use App\Models\Question;
use Auth;

class PricingController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllPriceFeture_list()
    {
         $feture_lists = Feture_list::latest()->paginate(6);
        $trashfeture_lists = Feture_list::onlyTrashed()->latest()->paginate(3);
        return view('admin/price_list/index',compact('feture_lists','trashfeture_lists'));
    }

    public function AddPriceFeture_list (Request $request)
    {
        // $validatedData = $request->validate([
        //     'category_name' => 'required|unique:feture_lists|max:255',
            
        // ],
        // [
        //     'category_name.required' => 'Please Input Category Name',
        //     'category_name.max' => 'Category Less Then 255Chars', 
        // ]);

        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,
        //      'created_at' => Carbon::now()
        // ]);

       


        $lists = new Feture_list;
        $lists->feture_list = $request->feture_list;
        $lists->save();

        $notification = array(
            'message' => 'Feture List  Added Successfully', 
            'alert-type' => 'success'
            );

            // $notification = array(
            //     'message' => 'Category Name Already Exits', 
            //     'alert-type' => 'error'
            //     );

        return redirect()->route('all/price/feture_list')->with($notification);

    }


    public function EditPriceFeture_list($id)
    {
        $lists_item = Feture_list::find($id);
        return view('admin/price_list/edite',compact('lists_item'));
    }

    public function UpdateFeture_list(Request $request, $id)
    {
        $update_feture_list = Feture_list::find($id)->update([
            'feture_list' => $request->feture_list,
            
        ]);

        $notification = array(
            'message' => 'Feture List  Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/price/feture_list')->with($notification);

    }


    public function SoftDeleteFeture_list($id)
    {
        $delete_feture_list = Feture_list::find($id)->delete();

        $notification = array(
            'message' => 'Feture List Delete Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    public function RestoreFeture_list($id)
    {
        $restore_feture_list = Feture_list::withTrashed()->find($id)->restore();

        $notification = array(
            'message' => 'Feture List Restore Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }


    public function PDeleteFeture_list($id)
    {
        $pdelete_feture_list = Feture_list::withTrashed()->find($id)->forceDelete();

        $notification = array(
            'message' => 'Feture List Permanently Deleted', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }




    // ==================================


    public function AllPrice()
    {
         $price_items = Pricing::latest()->paginate(5);
         
        return view('admin/price/index',compact('price_items'));
    }

    
    public function AddPrice ()
    {
        $categories = Pricing_category::orderBy('category_name','ASC')->get();
        $feture_list_items = Feture_list::orderBy('feture_list','ASC')->get();
        
        
        return view('admin/price/add_price',compact('categories','feture_list_items'));
    }

    public function StorePrice(Request $request)
    {
        // $validatedData = $request->validate([
        //     'category' => 'required',
        //     'amount' => 'required|numerical',
        //     'time' => 'required',
        //     'feture' => 'required',
        // // ],
        // // [
        // //     'heading.required' => 'Please Input Heading',
             
        // ]);



                Pricing::insert([
                    'category_id' => $request->category_id,
                    'featured' => $request->featured,
                    'advanced' => $request->advanced,
                    'amount' => $request->amount,
                    'time' => $request->time,
                    // 'feture_list_id' => json_encode($request->feture_list_id),
                    'feture_list_id' => implode(',', $request->feture_list_id),
                    'created_at' => Carbon::now()
                    ]);

               

            $notification = array(
                'message' => 'Price Item Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/price')->with($notification);
    }

    public function EditPrice($id)
    {
        $editprice = Pricing::find($id);
        $categories = Pricing_category::orderBy('category_name','ASC')->get();
        $price_feture_lists = Feture_list::orderBy('feture_list','ASC')->get();
        return view('admin/price/edit_price',compact('editprice','categories','price_feture_lists'));
    }

    public function UpdatePrice(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);

        Pricing::find($id)->update([
                'category_id' => $request->category_id,
                'featured' => $request->featured,
                'advanced' => $request->advanced,
                'amount' => $request->amount,
                'time' => $request->time,
                'feture_list_id' => implode(',', $request->feture_list_id),
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Price Item Updated Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/price')->with($notification);
    }

    public function DeletePrice($id)
    {
        
        Pricing::find($id)->delete();

        $notification = array(
            'message' => 'Price Items Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    // Questions Part
    public function QuestionsAll ()
    {    
        $question_items = Question::latest()->paginate(5);
        return view('admin/price/questions',compact('question_items'));
    }

    public function AddQuestions()
    {
        return view('admin/price/questions_add');
    }

    public function StoreQuestions(Request $request)
    {
        // $validatedData = $request->validate([
        //     'category' => 'required',
        //     'amount' => 'required|numerical',
        //     'time' => 'required',
        //     'feture' => 'required',
        // // ],
        // // [
        // //     'heading.required' => 'Please Input Heading',
             
        // ]);

        Question::insert([
            'question' => $request->question,
            'description' => $request->description,
             'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Question Added Successfully', 
            'alert-type' => 'success'
            );

    return redirect()->route('all/questions')->with($notification);
    }

    public function EditQuestions($id)
    {
        $editquestion = Question::find($id);
        return view('admin/price/questions_edit',compact('editquestion'));
    }

    
    public function UpdateQuestions(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'category' => 'required',
        //     'amount' => 'required|numerical',
        //     'time' => 'required',
        //     'feture' => 'required',
        // // ],
        // // [
        // //     'heading.required' => 'Please Input Heading',
             
        // ]);

        Question::find($id)->update([
            'question' => $request->question,
            'description' => $request->description,
             'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Question Updated Successfully', 
            'alert-type' => 'success'
            );

    return redirect()->route('all/questions')->with($notification);

    }

    public function DeleteQuestions($id)
    {
        Question::find($id)->delete();

        $notification = array(
            'message' => 'Question Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }










    // Price Category Part Start

   

    public function AllCategory()
    {

        $category_item = Pricing_category::latest()->paginate(5);
        $trashCat = Pricing_category::onlyTrashed()->latest()->paginate(3);

        return view('admin/price_category/index',compact('category_item','trashCat'));
    }

    public function AddPriceCat (Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:pricing_categories|max:255',
            
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

       
        $category = new Pricing_category;
        $category->category_name = $request->category_name;
        $category->save();

        $notification = array(
            'message' => 'Category name Added Successfully', 
            'alert-type' => 'success'
            );

            // $notification = array(
            //     'message' => 'Category Name Already Exits', 
            //     'alert-type' => 'error'
            //     );

        return redirect()->route('all/category')->with($notification);

    }


    public function EditPriceCategory($id)
    {
        $category_item = Pricing_category::find($id);
        return view('admin/price_category/edite',compact('category_item'));
    }

    public function Update(Request $request, $id)
    {
        $update = Pricing_category::find($id)->update([
            'category_name' => $request->category_name,
            
        ]);

        $notification = array(
            'message' => 'Category name Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/category')->with($notification);

    }


    public function SoftDelete($id)
    {
        $delete = Pricing_category::find($id)->delete();

        $notification = array(
            'message' => 'Category Delete Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    public function Restore($id)
    {
        $restore = Pricing_category::withTrashed()->find($id)->restore();

        $notification = array(
            'message' => 'Category Restore Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }


    public function PDelete($id)
    {
        $pdelete = Pricing_category::withTrashed()->find($id)->forceDelete();

        $notification = array(
            'message' => 'Category Permanently Deleted', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

}
