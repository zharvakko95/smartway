<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function create ()
    {
        return view('log.session');
    }
    
    public function store ()
    {
        if(! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }
        
        return redirect('/');
    }
    
    public function destroy ()
    {
        auth()->logout();
        
        return redirect('login');
    }
}
