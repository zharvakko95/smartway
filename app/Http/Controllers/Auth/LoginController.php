<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Supervisor;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function index(Request $data) {
        if ($data->type == '3') {
            return redirect('SupervisorController@index');
        } else if ($data->type == '2') {
            return redirect('SellerController@index');
        } else if ($data->type == '1') {
            return redirect('ClientController@index');
        } else {
            echo 'hello';
        }
    }
    
    public function store(){
        if(! auth()->attempt(request(['email', 'password']))){
            return back();
        }
        
        return redirect('/');
    }
    
    public function destroy(){
        auth()->logout();
        
        return redirect('/');
    }

}
