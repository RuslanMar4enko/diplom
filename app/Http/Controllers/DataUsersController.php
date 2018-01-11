<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataUsersRequest;
use App\DataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DataUser::where('user_id','=', Auth::id())->get();
        return view('/interface.page.data_user.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/interface.page.data_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataUsersRequest $request)
    {
        $data = new DataUser($request->all());
        $data->structure_unit = $request->structure_unit;
        $data->name = $request->name;
        $data->place_of_residence = $request->place_of_residence;
        $data->phone = $request->phone;
        $data->pasport_seria = $request->pasport_seria;
        $data->issuance_pasport = $request->issuance_pasport;
        $data->card_taxes = $request->card_taxes;
        $data->user_id = Auth::id();
        $data->save();
        return redirect('/housing_communals/create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataUser::find($id);
        if(!$data){
            abort(404);
        }
        return view('/interface.page.data_user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataUsersRequest $request, $id)
    {
        DataUser::find($id)->update($request->all());
        return redirect('/data_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataUser::find($id);
        if(!$data){
            abort(404);
        }
        $data->delete();
        return redirect('/data_users');
    }
}
