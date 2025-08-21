<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

     protected function authenticated($request, $user)
    {
        if ($user->role === 'Admin') {
            return redirect()->route('admin.dashboard.index');
        } elseif ($user->role === 'User') {
            return redirect()->route('user.dashboard.index');
        } elseif ($user->role === 'Driver') {
            return redirect()->route('driver.dashboard.index');
        }



        return redirect('/');
    }
}
