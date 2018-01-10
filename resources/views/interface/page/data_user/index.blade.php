@extends('interface.master_profile')
@section('content')
    <div class="container">
    <h1 class="title-index"> Записи що до І розділу </h1>
    <div class="container">
        <table class="table">
            <tbody class="index-body">
            @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->structure_unit}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->place_of_residence}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->pasport_seria}}</td>
                    <td>{{$data->issuance_pasport}}</td>
                    <td>{{$data->card_taxes}}</td>
                    <td class="display-margin">
                        <a class="btn btn-small btn-info" href="{{ URL::to('data_users/' . $data->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'data_users/' . $data->id)) }}
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