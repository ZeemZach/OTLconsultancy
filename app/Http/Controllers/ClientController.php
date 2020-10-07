<?php

namespace App\Http\Controllers;

use App\Client;
use App\ContactUS;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Client::all();
        return view('admin.client.client',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.client.create');
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
            'company_name' => 'required|max:200',
            'image_file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=570,min_height=335',
            'description' => 'required|max:200',
        ]);
        //uploaded images to cloud
        if($request->hasFile('image_file')){  
            \Cloudder::upload($request->file('image_file'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
       
                if($c){
                    $Client = new Client();
       $Client->company_name = $request->input('company_name');
       $Client->path = $c['url'];
        $Client->description =$request->input('description');
        $Client->save();
      
               return redirect()->route('client.index')
                    ->with('success','You have successfully uploaded client.')
                    ->with('image',$c['url']);   
        // return redirect()->route('products.index')
    //     //                 ->with('success','Product created successfully.');
    // }

}
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Client = Client::findorfail($id);
        return view('admin.client.edit',compact('Client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
      //  echo $id;
      $Client = Client::findorfail($id);

      if($request->hasFile('image_file')){  
        $this->validate($request, [
           // 'company_name' => 'required|max:200',
            'image_file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=570,min_height=330',
            //'description' => 'required|max:200',
        ]);
       
            \Cloudder::upload($request->file('image_file'));
            $c=\Cloudder::getResult();             
            //new client added
        //                 ->with('image',$c['url']);
       
                if($c){
                    
                   // $Client = new Client();
       $Client->company_name = $request->input('company_name');
       $Client->path = $c['url'];
        $Client->description =$request->input('description');
        $Client->update();
      
               return redirect()->route('client.index')
                    ->with('success','You have successfully updated client details.');
                 //   ->with('image',$c['url']);   
        // return redirect()->route('products.index')
    //     //                 ->with('success','Product created successfully.');
    // }

}
    }
    else{

        $Client->company_name = $request->input('company_name');
      // $Client->path = $c['url'];
        $Client->description =$request->input('description');
        $Client->update();
        return redirect()->route('client.index')
                    ->with('success','You have successfully updated client details');


    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Client = Client::findorfail($id);
        $Client->delete($id);
  
  return redirect()->route('client.index')
                  ->with('success','Client Details deleted successfully');
   
    }
}
