<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

//Model
use App\Models\Countries;
use App\Models\Contact;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        $datapass = compact('countries');
        return view('frontend.contact')->with($datapass);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'name' => 'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:contacts',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        echo"<pre>"; print_r($request->all()); echo "</pre>";
        die;
        $objectContact = new Contact();
        $objectContact->name = $request['name'];
        $objectContact->country_id = $request['countrie'];
        $objectContact->email = $request['email'];
        $objectContact->phone = $request['phone'];
        $objectContact->subject = $request['subject'];
        $objectContact->message = $request['message'];
        $objectContact->newsletter = ($request['email'] == 'on') ? 'active' : 'inactive';
        $objectContact->save();

        return view('frontend.index');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
