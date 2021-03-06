<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.apps.index')->with(['apps' => App::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app = new App();
        $app->name = $request->name;
        $app->description = $request->description;
        $app->link = $request->link;
        $app->image = $request->image;
        $app->version = $request->version;
        $app->save();

        return redirect()->route('apps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.apps.edit')->with(['app' => App::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $app = App::find($id);
        $app->name = $request->name;
        $app->description = $request->description;
        $app->link = $request->link;
        $app->image = $request->image;
        $app->version = $request->version;
        $app->save();

        return redirect()->route('apps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $app = App::find($id);
        $app->delete();

        return redirect()->route('apps.index');
    }
}
