<?php

namespace App\Admin\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarTypeInfo;
use App\Models\CarModelInfo;
use App\Models\CarOptionalInfo;
// use App\car_calculator_cartype_info;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getCarType(Request $request) {
        $info = CarTypeInfo::all();

        $result = array();
        foreach ($info as $key=>$value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['text'] = $value->typeName;
        }

        // array_unshift($result,['id'=>' ','text'=>'請選擇廠牌','selected'=>true]);

        return response()->json($result);
    }

    public function getCarModel(Request $request) {
        $info = CarModelInfo::where('carTypeId',$request->get('q'))->get();

        $result = array();
        foreach($info as $key=>$value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['text'] = $value->modelName;
        }

        return response()->json($result);
    }

    public function getCarOptional(Request $request) {
        $typeId = CarModelInfo::where('id',$request->get('q'))->first()->carTypeId;
        $info = CarOptionalInfo::where('carTypeId',$typeId)->get(['id', \DB::raw('optionalName as text')]);
        // $result = array();
        // foreach ($info as $key=>$value) {
        //     $result[$value->id] = $value->optionalName;
        // }

        return response()->json($info);
    }

    // public function getCalculatorCarType(Request $request) {
    //     $info = car_calculator_cartype_info::all();

    //     $result = array();
    //     foreach ($info as $key=>$value) {
    //         $result[$key]['id'] = $value->id;
    //         $result[$key]['text'] = $value->typeName;
    //     }

    //     // array_unshift($result,['id'=>' ','text'=>'請選擇廠牌','selected'=>true]);

    //     return response()->json($result);
    // }

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
