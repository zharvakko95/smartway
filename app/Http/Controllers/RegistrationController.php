<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('log.registration');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:supervisors',
            'password' => 'required|min:6|confirmed',
            'type' => 'required',
        ]);

        $type = request()->type;

        if ($type == '1') {
            
            User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'type' => request('type'),
                'fk_id' => request('fk_id'),
                'vehicles' => request('vehicles'),
                'brand' => request('brand'),
                'percent' => request('percent')
            ]);
            
        } else if ($type == '2') {
            
            User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'type' => request('type'),
                'fk_id' => request('fk_id'),
                'vehicles' => request('vehicles'),
                'brand' => request('brand'),
                'percent' => request('percent')
            ]);
            
        } else if ($type == '3') {

            User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'type' => request('type'),
                'fk_id' => request('fk_id'),
                'vehicles' => request('vehicles'),
                'brand' => request('brand'),
                'percent' => request('percent')
            ]);
        }

        return redirect('/');
    }

}
