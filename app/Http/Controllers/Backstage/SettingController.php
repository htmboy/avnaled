<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Backstage\Controller;

class SettingController extends Controller
{
    public function index(){
        return view('backstage.setting');
    }

    public function setting(Request $request)
    {

        return redirect('/backstage/setting');
    }
}
