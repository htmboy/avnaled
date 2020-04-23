<?php

namespace App\Http\Controllers\Spectacle;

use App\Models\Carousel;
use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpectacleController extends Controller
{
    public function index()
    {
        $links = Links::where('is_show', 1)->orderBy('sort', 'desc')->get();
        $carousels = Carousel::where('is_show', 1)->orderBy('sort', 'desc')->get();

        return view('spectacle.index', compact('links', 'carousels'));
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
