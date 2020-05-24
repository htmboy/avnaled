<?php

namespace App\Http\Controllers\Pok;


class HistoryController extends Controller
{

    public function history()
    {
        return view('pok.history', $this->SEOConfig['history']);
    }

}
