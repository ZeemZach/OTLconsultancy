<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Product;
use DB;
use App\Slider;
use App\CategoryProduct;

use App\Category;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Slider = Slider::all();
        return view('index',compact('Slider'));
    }
    public function indexs()
    {
        $Slider = Slider::all();
      
        return view('index',compact('Slider'));
    }
    public function Slider()
    {
        $Slider = Slider::all();
      
        return view('components.intro',compact('Slider'));
    }
    
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function gallery()
    {   
         
        $categories = DB::select('select * from categories');
        $cat_name = DB::select('select * from categories');
       // $categories1 = Category::all();
      //  echo $categories = [$categories->name];
        // $store = [
        //     ['name'=>'work_1','path'=>'assets/img/projects/1.jpg','category'=>['office','project','workspace'],'description'=>'Luxury House'],
        //     ['name'=>'work_1','path'=>'assets/img/projects/2.jpg','category'=>['testing','workspace','home'],'description'=>'Pent House']
        //     ]; 
        $store = DB::select('select * from products ORDER BY id DESC');
        return view('gallery',compact('categories','store','cat_name'));
    }  
    

    public function service()
    {
        return view('service');
    }
    
    public function material()
    {
        return view('material');
    }
    public function geo_technical()
    {
        return view('geo_technical');
    }
    public function soil_investigation()
    {
        return view('soil_investigation');
    }
    public function architectural()
    {
        return view('architectural');
    }
    public function surveying()
    {
        return view('surveying');
    }
    public function highway()
    {
        return view('highway');
    }
    public function clients()
    {
        $clients = Client::all();
        return view('clients',compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categories = Category::all();
   
        $store = Product::where('category_id',$id)->get();
    
     return view('gallerys',compact('categories','store'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function category(){
        return view('admin.category');
    }
}
