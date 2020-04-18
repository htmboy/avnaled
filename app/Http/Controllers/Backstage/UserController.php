<?php

namespace App\Http\Controllers\Backstage;


class UserController extends Controller
{
    public function setting()
    {
        return view('user.setting');
    }

    public function settingStore()
    {
        return null;
    }
}
