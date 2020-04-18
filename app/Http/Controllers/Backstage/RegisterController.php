<?php

namespace App\Http\Controllers\Backstage;

use App\Http\Requests\RegisterPost;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function register(RegisterPost $request)
    {
        // 验证 被注入$request

        // 逻辑
        $name = $request->get('name');
        $username = $request->get('username');
        $password = bcrypt($request->get('password'));
        $active = 1;
        // compact 打包成数组
        User::create(compact('name','username', 'password', 'active'));

        // 渲染
        return redirect('/backstage/login');
    }
}
