<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutTeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FooterController;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\About;
use App\Models\ServiceHeading;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\TeamHeading;
use App\Models\About_Team;
use App\Models\AboutTeamMembar;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Contact_message ;
use App\Models\Pricing ;
use App\Models\Pricing_category ;
use App\Models\Question ;
use App\Models\BlogCategory ;
use App\Models\BlogPost ;
use App\Models\Service_feture ;

// Email Valification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = Brand::all();
    // $abouts = About::all()->first();
    $abouts = DB::table('abouts')->first();
    $service_headings = DB::table('service_headings')->first();
    $portfolios = Portfolio::all();
    // $all_services = DB::table('services')->first();
    $categories = Category::all();
    $all_services = Service::all();
    
    return view('home',compact('brands','abouts','portfolios','service_headings','all_services','categories'));
});

// Middleware Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {

        $users = User::latest()->paginate(2);
        return view('admin/index',compact('users'));
    })->name('dashboard');
});

// Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('category/all');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('category/store');
Route::get('/category/edite/{id}', [CategoryController::class, 'EditCat']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/category/softdelete/{id}', [CategoryController::class, 'SoftDelete']);
Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/category/pdelete/{id}', [CategoryController::class, 'PDelete']);

// brand Controller
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('brand/all');
Route::post('/brand/add', [BrandController::class, 'AddBrand'])->name('brand/store');
Route::get('/brand/edite/{id}', [BrandController::class, 'Edite']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
// Route::get('/brand/softdelete/{id}', [BrandController::class, 'SoftDelete']);
// Route::get('/brand/restore/{id}', [BrandController::class, 'Restore']);
// Route::get('/brand/pdelete/{id}', [BrandController::class, 'PDelete']);



// Portfolio Controller
Route::get('/portfolio/all', [PortfolioController::class, 'PortfolioImage'])->name('portfolio/all');
Route::get('/portfolio/add', [PortfolioController::class, 'AddPortfolio'])->name('add/portfolio');
Route::post('/portfolio/store', [PortfolioController::class, 'StorePortfolio'])->name('store/portfolio');
Route::get('/portfolio/edite/{id}', [PortfolioController::class, 'EditePortfolio']);
Route::post('/portfolio/update/{id}', [PortfolioController::class, 'UpdatePortfolio']);
Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'DeletePortfolio']);


// Logout Route
Route::get('/user/logout', [AdminController::class, 'Logout'])->name('user/logout');

// Frontend Controller
Route::get('/home/slider', [FrontendController::class, 'HomeSlider'])->name('home/slider');
Route::get('/add/slider', [FrontendController::class, 'AddSlider'])->name('add/slider');
Route::post('/slider/store', [FrontendController::class, 'StoreSlider'])->name('slider/store');
Route::get('/slider/edite/{id}', [FrontendController::class, 'SliderEdite']);
Route::post('/slider/update/{id}', [FrontendController::class, 'SliderUpdate']);
Route::get('/slider/delete/{id}', [FrontendController::class, 'SliderDelete']);



// About Controller
Route::get('/about/all', [AboutController::class, 'AllAbout'])->name('all/about');
Route::get('/about/add', [AboutController::class, 'AddAbout'])->name('add/about');
Route::post('/about/store', [AboutController::class, 'StoreAbout'])->name('about/store');
Route::get('/about/edite/{id}', [AboutController::class, 'EditeAbout']);
Route::post('/about/update/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);

// About Team  Controller
Route::get('/team/heading', [AboutTeamController::class, 'TeamHeading'])->name('team/heading');
Route::get('/add/heading', [AboutTeamController::class, 'AddHeading'])->name('add/heading');
Route::post('/heading/store', [AboutTeamController::class, 'StoreHeading'])->name('heading/store');
Route::get('/heading/edit/{id}', [AboutTeamController::class, 'EditHeading']);
Route::post('/heading/update/{id}', [AboutTeamController::class, 'UpdateHeading']);
Route::get('/heading/delete/{id}', [AboutTeamController::class, 'DeleteHeading']);

// About Team membar  Controller
Route::get('/team/membar/all', [AboutTeamController::class, 'TeamMembar'])->name('team/membar');
Route::get('/team/membar/add', [AboutTeamController::class, 'TeamMembarAdd'])->name('team/membar/add');
Route::post('/team/membar/store', [AboutTeamController::class, 'TeamMembarStore'])->name('team/membar/store');
Route::get('/team/membar/edit/{id}', [AboutTeamController::class, 'EditTeamMembar']);
Route::post('/team/membar/update/{id}', [AboutTeamController::class, 'UpdateTeamMembar']);
Route::get('/team/membar/delete/{id}', [AboutTeamController::class, 'DeleteTeamMembar']);

// About TestiMonial  Controller
Route::get('/testimonial/all', [TestimonialController::class, 'TestiMonial'])->name('testimonial/all');
Route::get('/testimonial/add', [TestimonialController::class, 'AddTestiMonial'])->name('testimonial/add');
Route::post('/testimonial/store', [TestimonialController::class, 'StoreTestiMonial'])->name('testimonial/store');
Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'EditTestiMonial']);
Route::post('/testimonial/update/{id}', [TestimonialController::class, 'UpdateTestiMonial']);
Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'DeleteTestiMonial']);



// Service Controller
// Service Category Route

Route::get('/all/service/category', [ServiceController::class, 'AllServiceCategory'])->name('all/service/category');
Route::get('/add/service/category', [ServiceController::class, 'AddServiceCategory'])->name('add/service/category');
Route::post('/service/category/store', [ServiceController::class, 'StoreServiceCategory'])->name('service/category/store');
Route::get('/service/category/edit/{id}', [ServiceController::class, 'EditServiceCategory']);
Route::post('/service/category/update/{id}', [ServiceController::class, 'UpdateServiceCategory']);
Route::get('/service/category/delete/{id}', [ServiceController::class, 'DeleteServiceCategory']);


// service Heading
Route::get('/service/heading', [ServiceController::class, 'ServiceHeading'])->name('service/heading');
Route::get('/add/service/heading', [ServiceController::class, 'AddServiceHeading'])->name('add/service/heading');
Route::post('/service/heading/store', [ServiceController::class, 'StoreServiceHeading'])->name('service/heading/store');
Route::get('/service/heading/edit/{id}', [ServiceController::class, 'EditServiceHeading']);
Route::post('/service/heading/update/{id}', [ServiceController::class, 'UpdateServiceHeading']);
Route::get('/service/heading/delete/{id}', [ServiceController::class, 'DeleteServiceHeading']);



// All service
Route::get('/service/all', [ServiceController::class, 'AllService'])->name('all/service');
Route::get('/service/add', [ServiceController::class, 'AddService'])->name('add/service');
Route::post('/service/store', [ServiceController::class, 'StoreService'])->name('service/store');
Route::get('/service/edite/{id}', [ServiceController::class, 'EditeService']);
Route::post('/service/update/{id}', [ServiceController::class, 'UpdateService']);
Route::get('/service/delete/{id}', [ServiceController::class, 'DeleteService']);


// service Feture Heading
Route::get('/feture/heading', [ServiceController::class, 'FetureHeading'])->name('feture/heading');
Route::get('/add/feture/heading', [ServiceController::class, 'AddFetureHeading'])->name('add/feture/heading');
Route::post('/feture/heading/store', [ServiceController::class, 'StoreFetureHeading'])->name('feture/heading/store');
Route::get('/feture/heading/edit/{id}', [ServiceController::class, 'EditFetureHeading']);
Route::post('/feture/heading/update/{id}', [ServiceController::class, 'UpdateFetureHeading']);
Route::get('/feture/heading/delete/{id}', [ServiceController::class, 'DeleteFetureHeading']);

// All Service Feture 
Route::get('/feture/all', [ServiceController::class, 'AllFeture'])->name('all/feture');
Route::get('/feture/add', [ServiceController::class, 'AddFeture'])->name('add/feture');
Route::post('/feture/store', [ServiceController::class, 'StoreFeture'])->name('store/feture');
Route::get('/feture/edite/{id}', [ServiceController::class, 'EditeFeture']);
Route::post('/feture/update/{id}', [ServiceController::class, 'UpdateFeture'])->name('feture/update');
Route::get('/feture/delete/{id}', [ServiceController::class, 'DeleteFeture']);






// Contact Controller
Route::get('/contact/all', [ContactController::class, 'AllContact'])->name('all/contact');
Route::get('/contact/add', [ContactController::class, 'AddContact'])->name('add/contact');
Route::post('/contact/store', [ContactController::class, 'StoreContact'])->name('store/contact');
Route::get('/contact/edit/{id}', [ContactController::class, 'EditContact']);
Route::post('/contact/update/{id}', [ContactController::class, 'UpdateContact']);
Route::get('/contact/delete/{id}', [ContactController::class, 'DeleteContact']);


// Contact Messege Controller
Route::post('/contact/forms', [ContactController::class, 'ContactForm'])->name('contact/forms');
Route::get('/contact/message', [ContactController::class, 'ContactMessage'])->name('contact/message');
Route::get('/contact/message/view/{id}', [ContactController::class, 'ContactMessageView']);
Route::get('/contact/message/delete/{id}', [ContactController::class, 'ContactMessageDelete']);



//  Pricing Controller
Route::get('/price/all', [PricingController::class, 'AllPrice'])->name('all/price');
Route::get('/price/add', [PricingController::class, 'AddPrice'])->name('add/price');
Route::post('/price/store', [PricingController::class, 'StorePrice'])->name('price/store');
Route::get('/price/edit/{id}', [PricingController::class, 'EditPrice']);
Route::post('/price/update/{id}', [PricingController::class, 'UpdatePrice']);
Route::get('/price/delete/{id}', [PricingController::class, 'DeletePrice']);


//  Pricing Feture List Route
Route::get('/price/feture_list/all', [PricingController::class, 'AllPriceFeture_list'])->name('all/price/feture_list');
Route::post('/price/feture_list/add', [PricingController::class, 'AddPriceFeture_list'])->name('price/feture_list/store');
Route::get('/price/feture_list/edit/{id}', [PricingController::class, 'EditPriceFeture_list']);
Route::post('/price/feture_list/update/{id}', [PricingController::class, 'UpdateFeture_list']);
Route::get('/price/feture_list/softdelete/{id}', [PricingController::class, 'SoftDeleteFeture_list']);
Route::get('/price/feture_list/restore/{id}', [PricingController::class, 'RestoreFeture_list']);
Route::get('/price/feture_list/pdelete/{id}', [PricingController::class, 'PDeleteFeture_list']);

//  Pricing Category

Route::get('/price/category/all', [PricingController::class, 'AllCategory'])->name('all/category');
Route::post('/price/category/add', [PricingController::class, 'AddPriceCat'])->name('price/category/store');
Route::get('/price/category/edit/{id}', [PricingController::class, 'EditPriceCategory']);
Route::post('/price/category/update/{id}', [PricingController::class, 'Update']);
Route::get('/price/category/softdelete/{id}', [PricingController::class, 'SoftDelete']);
Route::get('/price/category/restore/{id}', [PricingController::class, 'Restore']);
Route::get('/price/category/pdelete/{id}', [PricingController::class, 'PDelete']);



// Questions Part
Route::get('/questions/all', [PricingController::class, 'QuestionsAll'])->name('all/questions');
Route::get('/questions/add', [PricingController::class, 'AddQuestions'])->name('add/questions');
Route::post('/questions/store', [PricingController::class, 'StoreQuestions'])->name('questions/store');
Route::get('/questions/edit/{id}', [PricingController::class, 'EditQuestions']);
Route::post('/questions/update/{id}', [PricingController::class, 'UpdateQuestions']);
Route::get('/questions/delete/{id}', [PricingController::class, 'DeleteQuestions']);

// Blog Controller
// Blog Category
Route::get('/all/blog/category', [BlogController::class, 'AllBlogCategory'])->name('all/blog/category');
Route::get('/add/blog/category', [BlogController::class, 'AddBlogCategory'])->name('add/blog/category');
Route::post('/blog/category/store', [BlogController::class, 'StoreBlogCategory'])->name('blog/category/store');
Route::get('/blog/category/edit/{id}', [BlogController::class, 'EditBlogCategory']);
Route::post('/blog/category/update/{id}', [BlogController::class, 'UpdateBlogCategory']);
Route::get('/blog/category/delete/{id}', [BlogController::class, 'DeleteBlogCategory']);



// Blog Post
Route::get('/blog/post/all', [BlogController::class, 'BlogAll'])->name('blog/all');
Route::get('/blog/post/add', [BlogController::class, 'AddBlogPost'])->name('blog/post/add');
Route::post('/blog/post/store', [BlogController::class, 'StoreBlogPost'])->name('blog/post/store');
Route::get('/blog/post/edit/{id}', [BlogController::class, 'EditBlogPost']);
Route::post('/blog/post/update/{id}', [BlogController::class, 'UpdateBlogPost']);
Route::get('/blog/post/delete/{id}', [BlogController::class, 'DeleteBlogPost']);

// Footer Controller
// Footer Address Route
Route::get('/footer/info/all', [FooterController::class, 'AllInfo'])->name('footer/all');
Route::get('/footer/info/add', [FooterController::class, 'FooterInfoAdd'])->name('footer/add');
Route::post('/footer/info/store', [FooterController::class, 'FooterInfoStore'])->name('footer/store');
Route::get('/footer/info/edit/{id}', [FooterController::class, 'FooterInfoEdit']);
Route::post('/footer/info/update/{id}', [FooterController::class, 'FooterInfoUpdate']);
Route::get('/footer/info/delete/{id}', [FooterController::class, 'FooterInfoDelete']);


// Footer Useful Link Route
Route::get('/footer/useful/link/all', [FooterController::class, 'AllLink'])->name('all/footer/usefull/link');
Route::get('/footer/useful/link/add', [FooterController::class, 'FooterUselLinkAdd'])->name('footer/useful/link/add');
Route::post('/footer/useful/link/store', [FooterController::class, 'FooterUselLinkStore'])->name('footer/useful/link/store');
Route::get('/footer/useful/link/edit/{id}', [FooterController::class, 'FooterUselLinkEdit']);
Route::post('/footer/useful/link/update/{id}', [FooterController::class, 'FooterUselLinkUpdate']);
Route::get('/footer/useful/link/delete/{id}', [FooterController::class, 'FooterUselLinkDelete']);

// Footer Service Link Route
Route::get('/footer/service/link/all', [FooterController::class, 'FooterAllServiceLink'])->name('all/footer/service/link');
Route::get('/footer/service/link/add', [FooterController::class, 'FooterServiceLinkAdd'])->name('footer/service/link/add');
Route::post('/footer/service/link/store', [FooterController::class, 'FooterServiceLinkStore'])->name('footer/service/link/store');
Route::get('/footer/service/link/edit/{id}', [FooterController::class, 'FooterServiceLinkEdit']);
Route::post('/footer/service/link/update/{id}', [FooterController::class, 'FooterServiceLinkUpdate']);
Route::get('/footer/service/link/delete/{id}', [FooterController::class, 'FooterServiceLinkDelete']);



// Front View 

// Front View Controller

// Slider Details Route Start

Route::get('/slider_details/{id}', [FrontViewController::class, 'SliderDetails'])->name('slider_detail');

// Slider Details Route End

 Route::get('/about/us', [FrontViewController::class, 'AboutUs'])->name('about/us');
 Route::get('/team', [FrontViewController::class, 'Team'])->name('team');
 Route::get('/testimonial', [FrontViewController::class, 'Testimonial'])->name('testimonial');
 Route::get('/portfolio', [FrontViewController::class, 'Portfolio'])->name('portfolio');
 Route::get('/service', [FrontViewController::class, 'Service'])->name('service');

 
 Route::get('/service/details/{id}', [FrontViewController::class, 'ServiceDetails'])->name('service_detail');
 Route::get('/category/service/{id}', [FrontViewController::class, 'ServiceCategoryDetail'])->name('category/service');
 

 Route::get('/pricing', [FrontViewController::class, 'Pricing'])->name('pricing');

 Route::get('/blog', [FrontViewController::class, 'Blog'])->name('blog');
 Route::get('/category/all_blog/{id}', [FrontViewController::class, 'AllCategoryBlog'])->name('category/all_blog');

 Route::get('/blogsingle/{id}', [FrontViewController::class, 'BlogSingle'])->name('blogsingle');
//  Route::get('/category/post/{id}', [FrontViewController::class, 'CategoryBlogSingle'])->name('category/post');
 
 Route::get('/contact', [FrontViewController::class, 'Contact'])->name('contact');

// Fortfolio Details Route

Route::get('/portfolio/details/{id}', [FrontViewController::class, 'PortfolioDetails'])->name('portfolio/details');

// Blog Comment

// Footer Front view All Routes

Route::get('/footer/address', [FrontViewController::class, 'FooterAddress'])->name('footer/address');


