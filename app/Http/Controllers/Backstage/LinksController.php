<?php

namespace App\Http\Controllers\Backstage;

use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Links::orderBy('sort', 'desc')->paginate(15);
        return view('backstage.links.links', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $links = $request->only(['name', 'link']);
        $links['sort'] = Links::count() + 1;
        Links::create($links);
        return redirect('/backstage/links');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function show(Links $links)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function edit(Links $link)
    {

        return view('backstage.links.linkEdit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Links $link)
    {
        $new_links = $request->only(['name', 'link']);
        $link->update($new_links);
        return redirect('/backstage/links/'.$link->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function del($id)
    {

        $link = Links::find($id);
        $link->delete();
        return redirect('/backstage/links');
    }
}
