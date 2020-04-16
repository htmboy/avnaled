<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPost;
use App\User;
use Illuminate\Http\Request;

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
        // compact 打包成数组
        $user = User::create(compact('name','username', 'password'));

        // 渲染
        return redirect('/backstage/login');
    }
}
