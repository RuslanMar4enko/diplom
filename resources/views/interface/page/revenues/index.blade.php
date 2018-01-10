@extends('interface.master_profile')
@section('content')
    <div class="container">
    <h1 class="title-index"> Записи що до ІІ розділу </h1>
    <div class="container">
        <table class="table">
            <tbody class="index-body">
            @foreach($revenues as $revenue)
                <tr>
                    <td>{{$revenue->id}}</td>
                    <td>{{$revenue->full_name}}</td>
                    <td>{{$revenue->birth}}</td>
                    <td>{{$revenue->card}}</td>
                    <td>{{$revenue->type_of_income}}</td>
                    <td>{{$revenue->amount_income}}</td>
                    <td>{{$revenue->source_income}}</td>
                    <td class="display-margin">
                        <a class="btn btn-small btn-info" href="{{ URL::to('revenues/' . $revenue->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'revenues/' . $revenue->id)) }}
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