<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\customer;
use Illuminate\Http\Request;
use Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=contact::all();// get all country data from model
        return view('admin.manage_contact',['arr_contacts'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.it_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //https://laravel.com/docs/11.x/validation#available-validation-rules
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'comment' => 'required',
        ]);

        $data=new contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->comment=$request->comment;
        $data->save();
        Alert::success('Congrats', 'You\'ve Successfully Submited');
        return redirect('/it_contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact,$id)
    {
        $data=contact::find($id); // find only id data from table
        $data->delete();
        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/manage_contact'); 
    }
}
