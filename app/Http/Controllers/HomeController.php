<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Mark;
use App\Models\Product;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function home()
    {
        $section1 = Gallery::where('section_id', 1)->get();
        $section2 = Gallery::where('section_id', 2)->latest()->take(3)->get();
        $section5 = Gallery::where('section_id', 5)->latest()->take(1)->get();
        $section6 = Gallery::where('section_id', 6)->latest()->take(1)->get();
        $section7 = Gallery::where('section_id', 7)->latest()->take(2)->get();
		$section9 = Gallery::where('section_id', 9)->latest()->get();

        $temp_page = 'home-index';
        $ruta = "https://cms.okccloud.com/web/banners/";

        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();

        return view('inicio', \compact('temp_page', 'menu_cate', 'menu_mark', 'section1', 'section2', 'section5', 'section6', 'section7', 'section9', 'ruta'));
    }

    public function product()
    {
        $section4 = Gallery::where('section_id', 4)->get();
        $section8 = Gallery::where('section_id', 8)->latest()->take(3)->get();

        $temp_page = 'category-page';
        $rutaBan = "https://cms.okccloud.com/web/banners/";
        $ruta = "https://cms.okccloud.com/web/artes/";

        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();
        
        $product = Product::with([
            'prices' => function($pquery){
                $pquery->latest();
            },
            'arts' => function ($queryi) {
                $queryi->where('art_type_id', 1)->latest();
            },
        ])->paginate(12);

        return view('productos', \compact('temp_page', 'menu_cate', 'menu_mark', 'product', 'section4', 'section8', 'ruta', 'rutaBan'));
    }

    public function about_us()
    {
        $temp_page = 'about-us';
        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();

        return view('nosotros', \compact('temp_page', 'menu_cate', 'menu_mark'));
    }

    public function contact()
    {
        $temp_page = 'product-page';
        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();

        return view('contactanos', \compact('temp_page', 'menu_cate', 'menu_mark'));
    }

    public function login_user()
    {
        $temp_page = 'product-page';
        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();
        
        return view('login', \compact('temp_page', 'menu_cate', 'menu_mark'));
    }

    public function detail($slug, $id)
    {
        $temp_page = 'product-page';
        $ruta = "https://cms.okccloud.com/web/artes/";

        $menu_cate = Category::with('subcategories')->orderBy('name', 'ASC')->get();
        $menu_mark = Mark::select('admin.marks.*')->distinct()->join('admin.products', 'admin.products.mark_id', '=', 'admin.marks.id')->get();

        $product = Product::with([
            'specifications',
            'prices' => function($pquery){
                $pquery->latest();
            },
            'arts' => function ($queryi) {
                $queryi->latest();
            },
        ])->find($id);

        return view('detalle-producto', \compact('temp_page', 'menu_cate', 'menu_mark', 'product', 'ruta'));
    }
}
