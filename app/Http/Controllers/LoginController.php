<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as Client;

class LoginController extends Controller
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    public function login(Request $request)
    {
        $data = [];
        $data['name'] = $request->input('name');
        $data['password'] = $request->input('password');

        if ($request->isMethod('post')){

            $this->validate(
                $request,[
                    'name' =>'required',
                    'password' =>'required'
                ]
            );
            $peron = [];
            $person = $this->client->where
            ([
                ['username', '=', 'Finlay'],
                ['password', '=', 'finfin']
            ]);
            if ($person != null) {
                return view('login/logged_in', $person);
            }
            else {
                return view('login/login');
            }
        }

        return view('login/login');
    }

    public function load()
    {
        return view('login/login');
    }
}
