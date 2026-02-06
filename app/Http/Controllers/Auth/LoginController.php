<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function logOut(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function redirectTo()
    {    
        switch(Auth::user()->roles()->get()->first()->name){
            case 'admin':
            $this->redirectTo = RouteServiceProvider::HOME;
            return $this->redirectTo;
            break;
            case 'driver':
            $this->redirectTo = RouteServiceProvider::DRIVER_HOME;
            return $this->redirectTo;
            break;
        }
        return $this->redirectTo;
    }

    public function adminLogin(){
        return view('admin.login');
    }
    public function adminLogout(Request $request) {
        Auth::logout();
        return redirect('admin/login');
    }
}
