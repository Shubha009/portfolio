<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use App\Models\About;
use App\Models\TeamHeading;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Pricing_category;
use App\Models\Pricing;
use App\Models\Service_category;
use App\Models\Service_feture_heading;
use App\Models\Service_feture;

use Auth;
use Image;


class FrontViewController extends Controller
{
    
    public function SliderDetails($id)
    {
         $sliderdetails = Slider::findOrFail($id);
        
        return view('pages/slider_details',compact('sliderdetails'));
    }
    
    
    public function AboutUs()
    {
        $abouts = DB::table('abouts')->first();
        // return view('layouts/body/about_breadcrumbs',compact('abouts'));
        return view('pages/about_us',compact('abouts'));
    }

    public function Team()
    {   $team_headings = DB::table('team_headings')->first();
        $team_membars = DB::table('about_team_membars')->get();
        return view('pages/team',compact('team_headings','team_membars'));
    }

    public function Testimonial()
    {   
        
        $testimonials = DB::table('testimonials')->get();
        return view('pages/testimonial',compact('testimonials'));
    }

    public function Portfolio()
    {
        $portfolioes = Portfolio::latest()->paginate(6);
        $categories = Category::all();
        
        return view('pages/portfolio',compact('portfolioes','categories'));
    }

    public function PortfolioDetails($id)
    {
        $portfolioes = Portfolio::findOrFail($id);
        return view('pages/portfolio_details',compact('portfolioes'));
    }


    public function Pricing()
    {
        // $price_items = DB::table('pricings')->get();
        // $price_items = DB::table('pricings')->get();
        $price_items = Pricing::latest()->limit(4)->get();
        $question_items = DB::table('questions')->get();
        
        return view('pages/pricing',compact('price_items','question_items'));
    }


    public function Blog()
    {
        $recent_blog_post = BlogPost::latest()->limit(5)->get();
        $blog_post_items = BlogPost::with("user")->latest()->Paginate(5);
        $categories = BlogCategory::orderBy('blog_category_title','ASC')->get();
        
        return view('pages/blog',compact('blog_post_items','recent_blog_post','categories'));
    }

    public function AllCategoryBlog($id)
    {
        $category_all_posts = BlogPost::where('blog_category_id',$id)->orderBy('id','DESC')->paginate(5);
        $categories_all = BlogCategory::with("postcategory")->orderBy('blog_category_title','ASC')->get();
        $recent_blog_post = BlogPost::latest()->limit(5)->get();
        
        return view('pages/category_related_all_blog',compact('category_all_posts','categories_all','recent_blog_post'));
    }


     public function BlogSingle($id)
    {
        $blog_details = BlogPost::findOrFail($id);
        $recent_blog_post_single = BlogPost::latest()->limit(5)->get();
        $single_categories = BlogCategory::with("postcategory")->orderBy('blog_category_title','ASC')->get();
        
        return view('pages/blog-single',compact('blog_details','recent_blog_post_single','single_categories'));
    }


    public function CategoryBlogSingle($id)
    {
        $category_post = BlogPost::where('blog_category_id',$id)->orderBy('id','DESC')->paginate(5);
        $categories_all = BlogCategory::orderBy('blog_category_title','ASC')->get();
        
        return view('pages/cat_post_all',compact('category_post','categories_all'));
    }

    public function Service()
    {
        $all_services = Service::all();
        $feture_heading = DB::table('service_feture_headings')->first();
        $all_fetures = Service_feture::all();
        return view('pages/service',compact('all_services','feture_heading','all_fetures'));
    }

    
    public function ServiceDetails($id)
    {
        $service_details = Service::findOrFail($id);
        $services_cats = Service_category::orderBy('service_category_name','ASC')->get();
        return view('pages/service_detail',compact('service_details','services_cats'));
    }

    

    public function ServiceCategoryDetail($id)
    {
        $category_all_service = Service::where('service_category_id',$id)->orderBy('id','DESC')->paginate(5);
        $categories_all = Service_category::with("servicecategory")->orderBy('service_category_name','ASC')->get();
        
        return view('pages/category_related_service',compact('category_all_service','categories_all'));
    }
    

    public function Contact()
    {   $contact_items = DB::table('contacts')->first();
        return view('pages/contact',compact('contact_items'));
    }


   
}
