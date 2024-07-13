<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $database = new Dog();
        $database->name = $request->name;
        $database->save();
        return response()->json(['amaliat ba movafaghiat anjam shode']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Dog::findOrFail($id);
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
        $dog=Dog::findOrFail($id);
        $dog->name=$request->name;
        $dog->save();
        return response()->json(['update shode ! ']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dog::findOrFail($id)->delete();
        return response()->json(['karbar hazf shode ! ']);
    }
}
