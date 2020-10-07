<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Slider = Slider::all();
       
        return view('admin.Slider.index',compact('Slider'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Slider.create');
    
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
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1000,min_height=300',
        ]);
        //uploaded images to cloud
        if($request->hasFile('image')){  
            \Cloudder::upload($request->file('image'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
        
                if($c){
                    $Slider = new Slider();
        $Slider->photo = $c['url'];
        $Slider->save();
        
}
       // $Product->permission()->sync(array_filter((array)$request->input('permission')));

        
      
               return redirect()->route('Slider.index')
                    ->with('success','You have successfully uploaded Slider.');
                    //->with('image',$c['url']);   
        
    }
 
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Slider = Slider::findorfail($id);
       
       return view('admin.Slider.show',compact('Slider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Slider = Slider::findorfail($id);
       
       return view('admin.Slider.edit',compact('Slider'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,$id)
    {
        //
        $Slider = Slider::findOrFail($id);
        //uploaded images to cloud
        if($request->hasFile('image')){  
            $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=570,min_height=330',
        ]);
       
            \Cloudder::upload($request->file('image'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
        if($c){
        $Slider->photo = $c['url'];
       $Slider->update();
            
       return redirect()->route('Slider.index')
                    ->with('success','You have successfully updated  Slider.');
        
        
        }
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Slider = Slider::findorfail($id);
        $Slider->delete($id);
  
  return redirect()->route('Slider.index')
                  ->with('success',' Slider deleted successfully');

    }

}
