<?php

namespace App\Http\Controllers\Backstage;

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

    public function addView()
    {
        return view('backstage.carousel.carouselAdd');
    }

    public function addCarousel(Request $request)
    {
        // 处理图片
        $file = $request->file('photo');
        $path = date('Ym', time());
        $name = date('dHis', time()).'.'.$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $photo = $file->storeAs('carousel/'.$path, $name);
        $carousel = $request->only('title', 'alt');
        $carousel['site'] = $photo;
        $carousel['sort'] = Carousel::count() + 1;
        Carousel::create($carousel);
        return redirect('/backstage/carousel');
    }

    public function editView(Carousel $carousel)
    {

        return view('backstage.carousel.carouselEdit', compact('carousel'));
    }

    public function editCarousel(Carousel $carousel, Request $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $path = date('Ym', time());
            $name = date('dHis', time()).'.'.$file->getClientOriginalExtension();
            $mimeType = $file->getClientMimeType();
            // 验证图片 type
            $photo = $file->storeAs('carousel/'.$path, $name);
            Storage::delete($carousel->site);
        }
        $new_carousel = $request->only('title', 'alt');
        if(isset($photo)){
            $new_carousel['site'] = $photo;
        }
        $carousel->update($new_carousel);
        return redirect('/backstage/carousel');
    }

    public function del(Carousel $carousel)
    {
        Storage::delete($carousel->site);
        $carousel->delete();
        return redirect('/backstage/carousel');
    }
}
