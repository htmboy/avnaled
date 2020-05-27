<?php


namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

interface LinkService
{
    public function queryAll(int $domain):Collection;
}