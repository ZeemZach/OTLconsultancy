<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\CategoryProduct;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Category = Category::all();
        $Product = Product::all();
        return view('admin.product',compact('Category','Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Category = Category::all();
       
        return view('admin.gallery.create',compact('Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'cat_id' => 'required',
            'name' => 'required|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=570,min_height=330',
            'description' => 'required|max:200',
        ]);
        //uploaded images to cloud
        if($request->hasFile('image')){  
            \Cloudder::upload($request->file('image'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
        
                if($c){
        
        foreach ($request->cat_id as $cat_id) {
        $cat =$request->cat_id;
        $user = Category::where('name',$cat_id)->first();
  
        $Product = new Product();
        $Product->name = $request->input('name');
        $Product->path = $c['url'];
        $Product->description =$request->input('description');
        $Product->category_id = $user->id;
        $Product->save();
   
}
       // $Product->permission()->sync(array_filter((array)$request->input('permission')));
        return redirect()->route('gallery.index')
                    ->with('success','You have successfully uploaded gallery.')
                    ->with('image',$c['url']);   
        
    }
     }}
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Product = Product::findOrFail($id);
        $Category = Category::all();
    return view('admin.gallery.edit',compact('Category','Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $Product = Product::findOrFail($id);
        $this->validate($request, [
            'cat_id' => 'required',
            'name' => 'required|max:200',
            'description' => 'required|max:200',
        ]);
        //uploaded images to cloud
        if($request->hasFile('image')){  
            $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=570,min_height=335',
        ]);
       
            \Cloudder::upload($request->file('image'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
        if($c){
        
        foreach ($request->cat_id as $cat_id) {
        $cat =$request->cat_id;
        $user = Category::where('name',$cat_id)->first();

        $Product->name = $request->input('name');
        $Product->path = $c['url'];
        $Product->description =$request->input('description');
        $Product->category_id = $user->id;
        $Product->update();
   
}
       // $Product->permission()->sync(array_filter((array)$request->input('permission')));

        
      
               return redirect()->route('gallery.index')
                    ->with('success','You have successfully updated Gallery.')
                    ->with('image',$c['url']);   
        
    }
    }else {
        foreach ($request->cat_id as $cat_id) {
        $cat =$request->cat_id;
        $user = Category::where('name',$cat_id)->first();
  
        $Product->name = $request->input('name');
      //  $Product->path = $c['url'];
        $Product->description =$request->input('description');
        $Product->category_id = $user->id;
        $Product->update();
        }
        return redirect()->route('gallery.index')
                    ->with('success','You have successfully updated gallery.');
               
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Product = Product::findorfail($id);
        $Product->delete($id);
  
  return redirect()->route('gallery.index')
                  ->with('success','Gallery deleted successfully');
   
    }
}
