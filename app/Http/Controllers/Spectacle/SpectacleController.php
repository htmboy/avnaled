<?php

namespace App\Http\Controllers\Spectacle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpectacleController extends Controller
{
    public function index()
    {
        return view('spectacle.index');
    }

    public function zsjm()
    {
        return view('spectacle.zsjm');
    }

    public function product()
    {
        return view('spectacle.product');
    }

    public function product_detail()
    {
        return view('spectacle.detail');
    }

    public function news()
    {
        return view('spectacle.news');
    }

    public function news_detail()
    {
        return view('spectacle.news_detail');
    }

    public function gsjj()
    {
        return view('sepctacle.gsjj');
    }

    public function fzlc()
    {
        return view('spectacle.fzlc');
    }

    public function contact()
    {
        return view('spectacle.contact');
    }
}
