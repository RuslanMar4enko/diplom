@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <form method="post" action="{{ action('DataUsersController@update', $data->id) }}" method="POST" enctype="multipart/form-data">
        {!! method_field('patch') !!}
        {{csrf_field()}}
        <div class="container">
            <h3>Розділі І:</h3>
            <div>
                <div class="form-group">
                    <label>Найменування структурного підрозділу з питань соціального захисту населення</label>
                    <input type="text" value="{{$data->structure_unit}}" class="form-control" name="structure_unit"
                           placeholder="Найменування структурного підрозділу ..." required>
                </div>
                <div class="form-group">
                    <label>Прізвище, ім’я, по батькові</label>
                    <input type="text" value="{{$data->name}}" class="form-control" name="name" placeholder="Прізвище ..." required>
                </div>
                <div class="form-group">
                    <label>Місце проживання</label>
                    <input class="form-control" value="{{$data->place_of_residence}}" name="place_of_residence" placeholder="Місце проживання" required>
                </div>
                <div class="form-group">
                    <label>Контактий телефон</label>
                    <input class="form-control" value="{{$data->phone}}" name="phone" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <label>Паспорт: серія</label>
                    <input class="form-control" value="{{$data->pasport_seria}}" name="pasport_seria" placeholder="Серія" required>
                </div>
                <div class="form-group">
                    <label>Ким і коли виданий</label>
                    <input class="form-control" value="{{$data->issuance_pasport}}" name="issuance_pasport" placeholder="Виданий" required>
                </div>
                <div class="form-group">
                    <label>Реєстраційний номер облікової картки платника податків</label>
                    <input class="form-control" value="{{$data->card_taxes}}" name="card_taxes" placeholder="Картки платника податків" required>
                </div>
                <button type="submit" style="float: left;" class="btn btn-default right">Submit</button>
            </div>
        </div>
    </form>
@endsection
