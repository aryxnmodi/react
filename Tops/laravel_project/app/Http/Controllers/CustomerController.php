<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use Illuminate\Http\Request;
use Hash;
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
        $data=new customer();
        $data->name=$request->name;
        $data->email=$request->email;
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
        return view('website.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
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
        return redirect('/manage_user'); 
    }
}
