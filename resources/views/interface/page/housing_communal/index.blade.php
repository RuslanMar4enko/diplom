@extends('interface.master_profile')
@section('content')
    <div class="container">
    <h1 class="title-index"> Записи що до І розділу, продовження </h1>
    <div class="container">
        <table class="table">
            <tbody class="index-body">
            @foreach($comunals as $comunal)
                <tr>
                    <td>{{$comunal->id}}</td>
                    <td>{{$comunal->house}}</td>
                    <td>{{$comunal->gas}}</td>
                    <td>{{$comunal->cold_water}}</td>
                    <td>{{$comunal->hot_water}}</td>
                    <td>{{$comunal->drainage}}</td>
                    <td>{{$comunal->centralized_heating}}</td>
                    <td>{{$comunal->electricity_supply}}</td>
                    <td>{{$comunal->household_waste_removal}}</td>
                    <td class="display-margin">
                        <a class="btn btn-small btn-info" href="{{ URL::to('housing_communals/' . $comunal->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'housing_communals/' . $comunal->id)) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-small del btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection