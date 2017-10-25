<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $data = [];
        return view('contact/contact');

    }
    public function submitForm(Request $request){
        $data = [];
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['mobile'] = $request->input('mobile');
        $data['subject'] = $request->input('subject');
        $data['message'] = $request->input('message');
        return view('contact/submit', $data);

    }

    public function newClient(Request $request)
    {
        $data = [];
        $data['title'] = $request->input('title');
        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('last_name');
        $data['address'] = $request->input('address');
        $data['zip_code'] = $request->input('zip_code');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');
        $data['titles'] = $this->titles;
        $data['modify'] = 0;
        return view('client/form', $data);
    }


}
