<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
     * Allow for login using email and username.
     */
    public function username()
    {
        //  Grab the users input for email/usermane
        $identity = request()->input('identity');

        /*
            Determine if the field provided is a valid email
            If it is then we know to return this as a login with email
            Otherwise we assume that this is an intended login using the username
        */
        $field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //  Update the request to know whether to try login using the email/username
        request()->merge([$field => $identity]);

        //  Continue with login attempt
        return $field;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
