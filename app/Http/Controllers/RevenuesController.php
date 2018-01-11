<?php

namespace App\Http\Controllers;

use App\Http\Requests\RevenuesRequvest;
use Illuminate\Http\Request;
use App\Revenues;
use Illuminate\Support\Facades\Auth;

class RevenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenues = Revenues::where('user_id','=', Auth::id())->get();
        return view('/interface.page.revenues.index', compact('revenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/interface.page.revenues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RevenuesRequvest $request)
    {
        $revenues = new Revenues($request->all());
        $revenues->full_name = $request->full_name;
        $revenues->birth = $request->birth;
        $revenues->card = $request->card;
        $revenues->type_of_income = $request->type_of_income;
        $revenues->amount_income = $request->amount_income;
        $revenues->source_income = $request->source_income;
        $revenues->user_id = Auth::id();
        $revenues->save();
        return redirect('/costs/create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revenues = Revenues::find($id);
        if(!$revenues){
            abort(404);
        }
        return view('/interface.page.revenues.edit', compact('revenues'));
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
        Revenues::find($id)->update($request->all());
        return redirect('/revenues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revenues = Revenues::find($id);
        if(!$revenues){
            abort(404);
        }
        $revenues->delete();
        return redirect('/revenues');
    }
}
