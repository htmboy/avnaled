<?php

namespace App\Http\Controllers\Pok;


class IntroductionController extends Controller
{

    public function introduction()
    {
        return view('pok.introduction', $this->SEOConfig['introduction']);
    }

}
