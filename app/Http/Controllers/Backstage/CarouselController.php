<?php

namespace App\Http\Controllers\Backstage;

use App\Http\Services\CarouselService;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::orderBy('sort', 'desc')->paginate(15);
        return view('backstage.carousel.carousel', compact('carousels'));
    }

    public function create()
    {
        return view('backstage.carousel.carouselAdd');
    }

    public function store(Request $request, CarouselService $carouselService)
    {
        $carouselService->store($request);
        return redirect()->route('carousel.index');
    }

    public function edit(Carousel $carousel)
    {

        return view('backstage.carousel.carouselEdit', compact('carousel'));
    }

    public function update(Carousel $carousel, Request $request, CarouselService $carouselService)
    {
        $carouselService->update($carousel, $request);
        return redirect()->route('carousel.index');
    }

    public function destroy(Carousel $carousel)
    {
        Storage::delete($carousel->site);
        $carousel->delete();
        return redirect()->route('carousel.index');
    }
}
