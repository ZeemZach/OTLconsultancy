<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Validation\Rule;
use App\Http\Requests;
use App\ContactUS;
use App\Http\Requests\UserRequest;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactFormRequest;
use DB;
use App\Rules\Captcha;
//use App\mail\SendMail;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = ContactUS::all();
        return view('admin.contact',compact('contact'));
    }
    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'service'=>'required',
         'message' => 'required'
         ]);
  
       // ContactUS::create($request->all());
       $ContactUS = new ContactUS();
       $ContactUS->name = $request->input('name');
       $ContactUS->email = $request->input('email');
      
       $ContactUS->subject = $request->input('service');
       $ContactUS->message = $request->input('message');
           
       /*
       
       if($request->file('file')){
        $filenameWithExt = $request->file('file')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('file')->storeAs('/public/contact/document/', $fileNameToStore);
        
      $ContactUS->file = $fileNameToStore;
       }
   
      */
   $name=$request->input('name');
       $email=$request->input('email');
      
       $service=$request->input('service');
       $message=$request->input('message');
    
       $data = [
        'name' => $name,
        'email' => $email,

  
   'service' => $service,
   'message' => $message,];
    Mail::send('emails.mail',$data, function ($m) use ($email) {
        $m->from('no-reply@otlconsultancy.com', 'odisha testing laboratory contacting us');
        $m->bcc('odishatestinglab@gmail.com','new customer or problems!!');
        $m->to($email)->subject('otl Support');
    
    });
    Mail::send('emails.testmail',$data, function ($m) use ($email) {
        $m->from('no-reply@otlconsultancy.com', 'odisha testing laboratory contacting us');
        $m->to('odishatestinglab@gmail.com')->subject('otl Support');
    
    });
   // return view('index');
        $ContactUS->save();
     //   toast('Thanks, For Contacting Us');
    //   alert()->success('Thank you for your enquiry','Your message has been sent successfully.');
        return back()->with('success','Your message has been sent successfully..');
   
   
   
        
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
    public function show($id){
       }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
    public function update(Request $request,ContactUS $ContactUS)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactUS::findorfail($id);
        $contact->delete($id);
  
  return redirect()->route('contact.index')
                  ->with('success','contact deleted successfully');
    }
    public function mail(Request $request, $id){
    }
    public function send(Request $request, $id){
        
 
    }
}
