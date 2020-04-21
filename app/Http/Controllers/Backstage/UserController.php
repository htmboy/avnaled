<?php

namespace App\Http\Controllers\Backstage;


class UserController extends Controller
{
    public function setting()
    {
        return view('backstage.user.setting');
    }

    public function settingStore()
    {
        return null;
    }
}
