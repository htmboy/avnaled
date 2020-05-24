<?php

namespace App\Http\Controllers\Pok;


class ContactController extends Controller
{

    public function contact()
    {
        return view('pok.contact', $this->SEOConfig['contact']);
    }

}
