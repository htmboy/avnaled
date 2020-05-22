<?php


namespace App\Http\Services;


use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselService
{

    public function store(Request $request)
    {
        // 处理图片
        $file = $request->file('photo');
        $path = date('Ym', time());
        $name = date('dHis', time()).'.'.$file->getClientOriginalExtension();
        $mimeType = $file->getClientMimeType();
        // 验证图片 type
        $photo = $file->storeAs('carousel/'.$path, $name);
        $carousel = $request->only('title', 'alt', 'link');
        $carousel['site'] = $photo;
        $carousel['sort'] = Carousel::count() + 1;
        Carousel::create($carousel);
    }

    public function update(Carousel $carousel, Request $request)
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
        $new_carousel = $request->only('title', 'alt', 'link');
        if(isset($photo)){
            $new_carousel['site'] = $photo;
        }
        $carousel->update($new_carousel);
    }
}