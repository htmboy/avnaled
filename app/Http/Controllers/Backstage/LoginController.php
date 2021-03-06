<?php

namespace App\Http\Controllers\Backstage;

use App\Http\Requests\LoginPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{

    public function index()
    {
        return view('backstage.login.login');
    }

    public function login(LoginPost $request)
    {
        // 验证 => LoginPost $request

         $username = $request->get('username');
         $password = $request->get('password');
         $active = 1;
         $user = compact('username', 'password', 'active');
         $is_remember = boolval($request->get('is_remember'));
         if(Auth::guard('admin')->attempt($user, $is_remember)){
             Auth::guard('admin')->logoutOtherDevices($password);
             return redirect()->route('products.index');
         }
        return Redirect::back()->withErrors("用户名或密码不匹配");
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
