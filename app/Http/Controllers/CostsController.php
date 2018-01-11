<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostsRequest;
use Illuminate\Http\Request;
use App\Costs;
use Illuminate\Support\Facades\Auth;

class CostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = Costs::where('user_id','=', Auth::id())->get();
        return view('/interface.page.costs.index', compact('costs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/interface.page.costs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostsRequest $request)
    {
        $revenues = new Costs($request->all());
        $revenues->name = $request->name;
        $revenues->kind = $request->kind;
        $revenues->cost_property = $request->cost_property;
        $revenues->data_costs = $request->data_costs;
        $revenues->user_id = Auth::id();
        $revenues->save();
        return redirect('/sencs');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $costs = Costs::find($id);
        if(!$costs){
            abort(404);
        }
        return view('/interface.page.costs.edit', compact('costs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CostsRequest $request, $id)
    {
        Costs::find($id)->update($request->all());
        return redirect('/costs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costs = Costs::find($id);
        if(!$costs){
            abort(404);
        }
        $costs->delete();
        return redirect('/costs');
    }
}
