<?php

namespace App\Http\Controllers;

use App\HousingCommunal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HousingCommunalRequest;

class HousingCommunalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunals = HousingCommunal::where('user_id','=', Auth::id())->get();
        return view('/interface.page.housing_communal.index', compact('comunals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/interface.page.housing_communal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HousingCommunalRequest $request)
    {
        $comunal = new HousingCommunal($request->all());
        $comunal->house = $request->house;
        $comunal->gas = $request->gas;
        $comunal->cold_water = $request->cold_water;
        $comunal->hot_water = $request->hot_water;
        $comunal->drainage = $request->drainage;
        $comunal->centralized_heating = $request->centralized_heating;
        $comunal->electricity_supply = $request->electricity_supply;
        $comunal->household_waste_removal = $request->household_waste_removal;
        $comunal->user_id = Auth::id();
        $comunal->save();
        return redirect('/revenues/create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunal = HousingCommunal::find($id);
        if(!$comunal){
            abort(404);
        }
        return view('/interface.page.housing_communal.edit', compact('comunal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HousingCommunalRequest $request, $id)
    {
        HousingCommunal::find($id)->update($request->all());
        return redirect('/housing_communals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comunal = HousingCommunal::find($id);
        if(!$comunal){
            abort(404);
        }
        $comunal->delete();
        return redirect('/housing_communals');
    }
}
