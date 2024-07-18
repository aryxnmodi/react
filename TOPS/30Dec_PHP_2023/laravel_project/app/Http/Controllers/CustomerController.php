<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use Illuminate\Http\Request;
use Hash;
use Alert;

// add below two lines for mail
use App\Mail\welcomemail;
use Mail;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function user_login()
    {
        return view('website.login');
    }

    public function user_auth(Request $request)
    {
        $validated = $request->validate([
             'email' => 'required',
             'password' => 'required',
         ]);
        $email=$request->email;

        $data=customer::where('email','=',$email)->first(); 
        if($data)
        {
            $chk=Hash::check($request->password,$data->password);
			if($chk)
            {
                // session  create
                session()->put('id', $data->id);   
                session()->put('name', $data->name); 
                session()->put('email', $data->email);
                
                // session('email') use
                // session()->pull('id') delete

                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('/');
            }
            else
            {
                Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Password');
                return redirect('/login');
            }
        }
        else
        {
            Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Email');
            return redirect('/login');
        }
    }

   
    public function userlogout()
    {
        // delete
        session()->pull('id'); //session()->pull('id');
        session()->pull('name');
        session()->pull('email');
        Alert::success('Congrats', 'You\'ve Logout Successfully');
        return redirect('/');
    }


    public function index()
    {
        $data=customer::all();// get all country data from model
        return view('admin.manage_user',["arr_customers"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=country::all();// get all country data from model
        return view('website.signup',['arr_countries'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required|alpha:ascii |max:255',
            'email' => 'required|unique:customers',
            'password' => 'required|min:8|max:12',
            'mobile' => 'required|digits:10',
            'gender' => ['required', 'in:Male,Female'],
            'lag' => 'required',
            'cid' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data=new customer();
 $name=$data->name=$request->name;
 $email=$data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->gender=$request->gender;
        $data->lag=implode(",",$request->lag);
        $data->mobile=$request->mobile;
        
        // image upload
        $file=$request->file('img');	 // get file	
        $filename=time()."_img.".$file->getClientOriginalExtension(); // extension with new name
        $file->move('website/upload/customer/',$filename);  // use move for move image in public/images
        
        $data->img=$filename;
        $data->cid=$request->cid;
        $data->save();

        $data=array("email"=>$email,"name"=>$name,"password"=>$request->password);
        Mail::to($email)->send(new welcomemail($data));

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect('/signup');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        $data=customer::find(session('id')); // find direct by id in single data
        //$data=customer::where('id','=',session('id'))->fisrt(); // find direct by column in arr or single
        return view('website.profile',["fetch"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer,$id)
    {
        $country=country::all();
        $data=customer::find($id);
        return view('website.edit_profile',["arr_countries"=>$country,"fetch"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,customer $customer)
    {
        $data=customer::find($id);

       
 
         $data->name=$request->name;
         $data->email=$request->email;
         $data->gender=$request->gender;
         $data->lag=implode(",",$request->lag);
         $data->mobile=$request->mobile;
         
         // image upload
         if($request->hasFile('img'))
         {
            $old_img=$data->img;
           
            $file=$request->file('img');	 // get file	
            $filename=time()."_img.".$file->getClientOriginalExtension(); // extension with new name
            $file->move('website/upload/customer/',$filename);  // use move for move image in public/images
            $data->img=$filename;
            unlink('website/upload/customer/'.$old_img);
         }

         $data->cid=$request->cid;
         $data->update();
         Alert::success('Congrats', 'You\'ve Successfully Updated User');
         return redirect('/profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer,$id)
    {
        $data=customer::find($id); // find only id data from table
        $data->delete();
        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/manage_user'); 
    }
}
