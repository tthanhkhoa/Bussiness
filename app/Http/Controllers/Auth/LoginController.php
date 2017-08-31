<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Constant;
use Illuminate\Http\Request;
use Auth;


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
    protected  $guard='admin';
    protected function guard(){
        return Auth::guard($this->guard);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    public function username()
    {
        return Constant::CL_USERNAME;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function login(Request $request){
//        $error_html = "<div class='alert alert-danger alert-dismissable fade in'>";
//        $error_html .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
//        $error_html .= "<p align='center'>".trans('message.user_not_found') . "</p></div>";
        try{
            if($request->isMethod('POST')){
//                $this->validate($request,
//                    [
//                        Constant::CL_USERNAME => 'required',
//                        Constant::CL_PASSWORD => 'required|min:6|max:128'
//                    ], trans('validate'));
                $data=[
                    Constant::CL_USERNAME=>$request->{Constant::CL_USERNAME},
                    Constant::CL_PASSWORD=>$request->{Constant::CL_PASSWORD},
                ];
                if(Auth::guard('admin')->attempt($data)){
                    return redirect()->route('admin');
                }

                return redirect()->route('login');
            }
            else{
                if (Auth::guard('admin')->check()) {

                    return redirect()->route('admin');
                }
                return view('login');
            }
        }catch (\Exception $e){
            return($e->getMessage());
        }

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
