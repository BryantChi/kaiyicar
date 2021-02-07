<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatalogCarInfo;
use App\Models\CarOptionalInfo;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $catalogCarInfo = CatalogCarInfo::orderBy('id', 'desc')->paginate(10);
        return view('catalog', ['catalogCarInfo' => $catalogCarInfo]);
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
        //
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
        $catalogCarInfo = CatalogCarInfo::find($id);
        $catalogCarOptionals = array();
        $carOptionalInfo = CarOptionalInfo::all();
        foreach ($carOptionalInfo as $item) {
            if (in_array($item->id, $catalogCarInfo->carOptionals)) {
                array_push($catalogCarOptionals, $item->optionalName);
            }
        }
        return view('catalog-single', ['catalogCarInfo' => $catalogCarInfo, 'catalogCarOptionals' => $catalogCarOptionals]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
