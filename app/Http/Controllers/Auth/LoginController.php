<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = '/check';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Check either username or email.
     * @return string
     */
    // public function username()
    // {
    //     $identity  = request()->get('identity');
    //     $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     request()->merge([$fieldName => $identity]);
    //     return $fieldName;
    // }
    /**
     * Validate the user login.
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'   => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Цахим хаягаа оруулна уу.',
                'password.required' => 'Нууц үгээ оруулна уу.'
            ]
        );
    }
}
