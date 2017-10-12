<?php

namespace App\Http\Controllers;

use App\homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestay = homestay::all();

        return view('index', compact('homestay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new homestay;
        $model->name_homestay = $request->input('name_homestay');
        $model->address = $request->input('address');
        $model->description = $request->input('description');
        if(!$model->save()){
            throw new HttpResponseException(new JsonResponse(['persist FAIL'], Response::HTTP_INTERNAL_SERVER_ERROR));
        }
            $home = homestay::all();
            return view('homestayView',['homestays'=>$home]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(homestay $homestay)
    {
        $home = homestay::all();
        return view('index',['homestays'=>$home]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(homestay $homestay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homestay $homestay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(homestay $homestay)
    {
        //
    }
}
