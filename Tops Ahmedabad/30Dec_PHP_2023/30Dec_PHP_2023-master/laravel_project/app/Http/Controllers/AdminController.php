<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Alert;
use Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin_login()
    {
        return view('admin.index');
    }

    public function admin_auth(Request $request)
    {
        $validated = $request->validate([
             'email' => 'required',
             'password' => 'required',
         ]);
         
        $email=$request->email;

        $data=admin::where('email','=',$email)->first(); 
        if($data)
        {
            $chk=Hash::check($request->password,$data->password);
			if($chk)
            {
                // session  create
                session()->put('aid', $data->id);   
                session()->put('aname', $data->name); 
                session()->put('aemail', $data->email);
                
                // session('email') use
                // session()->pull('id') delete

                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('/dashboard');
            }
            else
            {
                Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Password');
                return redirect('/admin_login');
            }
        }
        else
        {
            Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Email');
            return redirect('/admin_login');
        }
    }

   
    public function adminlogout()
    {
        // delete
        session()->pull('aid'); //session()->pull('id');
        session()->pull('aname');
        session()->pull('aemail');
        Alert::success('Congrats', 'You\'ve Logout Successfully');
        return redirect('/admin_login');
    }

    public function index()
    {
        //
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
