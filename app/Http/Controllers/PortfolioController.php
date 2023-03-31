<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
use App\Models\Portfolio;
use App\Models\Category;

use Auth;
use Image;

class PortfolioController extends Controller
{
    
    // This Is Multiple Image Upload Method
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PortfolioImage ()
    {
        $portfolioes = Portfolio::latest()->Paginate(4);
        
        return view('admin/portfolio/index',compact('portfolioes',));
    }

    public function AddPortfolio()
    {
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('admin/portfolio/add_portfolio',compact('categories'));

    }

    public function StorePortfolio (Request $request)
    {
        // $validatedData = $request->validate([

        //     'image' => 'required|mimes:jpg,jpeg,png',
          
        // ] );

        // Image Intervansion use

        $images = $request->file('image');
        
        foreach($images as $image){

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200, 1200)->save('image/portfolio/'.$name_gen);
        $last_img = 'image/portfolio/'.$name_gen;

        // $portfolio = new Portfolio;
        // $portfolio->category_name = $request->category_name;
        // $portfolio->category_id = Category::portfolio()->id;
        // $portfolio->save();

        Portfolio::insert([
            
            
            'category_id' => $request->category_id,
            'portfolio_name' => $request->portfolio_name,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' =>Carbon::now()
            ]);
        } 
        
        $notification = array(
            'message' => 'Portfolio  inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('portfolio/all')->with($notification);
        
    }


    public function EditePortfolio ($id)
    {
        $portfolio_up = Portfolio::find($id);
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('admin/portfolio/edite',compact('portfolio_up','categories'));
    }

    public function UpdatePortfolio (Request $request,$id)
    {
        $validatedData = $request->validate([
            
            'image' => 'image|mimes:jpeg,png,jpg',
            ]);

        
        $change_image = $request->old_image;
        $portfolio_image = $request->file('image');

        if($portfolio_image){ 
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($portfolio_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/portfolio/';
        $last_img = $up_location.$img_name;
        $portfolio_image->move($up_location,$img_name);

        unlink($change_image);
        
        Portfolio::find($id)->update([
            'category_id' => $request->category_id,
            'portfolio_name' => $request->portfolio_name,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'description' => $request->description,
            'image' =>$last_img,
            'created_at' =>Carbon::now()
            ]);
            
            $notification = array(
                'message' => 'Portfolio  Updated Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->route('portfolio/all')->with($notification);

        }else{
            Portfolio::find($id)->update([
                'category_id' => $request->category_id,
                'portfolio_name' => $request->portfolio_name,
                'client_name' => $request->client_name,
                'project_date' => $request->project_date,
                'project_url' => $request->project_url,
                'description' => $request->description,
                'created_at' =>Carbon::now()
            ]);
        
            $notification = array(
                'message' => 'Portfolio  Updated Successfully', 
                'alert-type' => 'success'
            );
            
            return redirect()->route('portfolio/all')->with($notification);
        }
    }


    public function DeletePortfolio($id)
    {
        $image = Portfolio::find($id);
        $delete_image =$image->image;
        unlink($delete_image);

        Portfolio::find($id)->delete();

        $notification = array(
            'message' => 'Profolio Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
