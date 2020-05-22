<?php

namespace App\Http\Controllers\Backstage;

use App\Models\Links;
use Illuminate\Http\Request;

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
        return redirect()->route('links.index');
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
        $new_link = $request->only(['name', 'link']);
        $link->update($new_link);
        return redirect()->route('links.edit', ['link' => $link->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(Links $link)
    {

        $link->delete();
        return redirect()->route('links.index');
    }
}
