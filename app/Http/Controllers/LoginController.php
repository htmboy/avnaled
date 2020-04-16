<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.login');
    }

    public function login(LoginPost $request)
    {
        // 验证 => LoginPost $request

         $username = $request->get('username');
         $password = $request->get('password');
         $user = compact('username', 'password');
         $is_remember = boolval($request->get('is_remember'));
         if(Auth::attempt($user, $is_remember)){
             return redirect('/backstage/index');
         }
        return Redirect::back()->withErrors("用户名或密码不匹配");
    }

    public function logout()
    {
        return null;
    }
}
