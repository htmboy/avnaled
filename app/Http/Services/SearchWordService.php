<?php


namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

interface SearchWordService
{
    public function queryAll(int $domain, int $limit):Collection;
}