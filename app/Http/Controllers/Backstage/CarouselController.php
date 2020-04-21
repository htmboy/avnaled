<?php

namespace App\Http\Controllers\Backstage;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::orderBy('sort', 'desc')->paginate(15);
        return view('backstage.carousel', compact('carousels'));
    }

    public function addView()
    {
        return view('backstage.addCarousel');
    }

    public function addCarousel()
    {
        return redirect();
    }

    public function editView()
    {
        return view('backstage.editCarousel');
    }

    public function editCarousel()
    {
        return redirect();
    }

    public function del(Carousel $carousel)
    {
        $carousel->delete();
        return view('backstage.carousel');
    }
}
