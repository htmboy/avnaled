<?php

namespace App\Http\Controllers\Backstage;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Setting::find('index_seo');
        $cases = Setting::find('cases_seo');
        $product = Setting::find('product_seo');
        $article = Setting::find('article_seo');
        $history = Setting::find('history_seo');
        $introduction = Setting::find('introduction_seo');
        $contact = Setting::find('contact_seo');
        return view('backstage.setting', compact(
            'index', 'cases', 'product', 'article', 'contact', 'history', 'introduction'
        ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $key = $request->get('key');
        $setting = Setting::find($key);
        $value = implode("%/%", $request->only(['seo_title', 'seo_keywords', 'seo_description']));
        if(is_null($setting)){
            $description = 'seo设置';
            Setting::create(compact('key', 'value', 'description'));
        }else{
            $setting->update(compact('value'));
        }


        return redirect()->route('setting.index');
    }


}
