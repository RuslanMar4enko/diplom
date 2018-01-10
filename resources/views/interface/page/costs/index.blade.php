@extends('interface.master_profile')
@section('content')
    <div class="container">
    <h1 class="title-index"> Записи що до ІІІ розділу </h1>
    <div class="container">
        <table class="table">
            <tbody class="index-body">
            @foreach($costs as $cost)
                <tr>
                    <td>{{$cost->id}}</td>
                    <td>{{$cost->name}}</td>
                    <td>{{$cost->kind}}</td>
                    <td>{{$cost->cost_property}}</td>
                    <td>{{$cost->data_costs}}</td>
                    <td class="display-margin">
                        <a class="btn btn-small btn-info" href="{{ URL::to('costs/' . $cost->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'costs/' . $cost->id)) }}
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