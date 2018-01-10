@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <form method="post" action="{{ action('HousingCommunalsController@update', $comunal->id) }}" method="POST" enctype="multipart/form-data">
        {!! method_field('patch') !!}
        {{csrf_field()}}
        <div class="container">
            <h3>Продовження розділу І:</h3>
            <div>
                <div class="form-group">
                    <label>Утримання будинків і споруд та прибудинкових територій</label>
                    <input type="text" value="{{$comunal->house}}" class="form-control" name="house"
                           placeholder="Утримання будинків і споруд ..." required>
                </div>
                <div class="form-group">
                    <label>Газопостачання</label>
                    <input type="text" value="{{$comunal->gas}}" class="form-control" name="gas" placeholder="Газопостачання" required>
                </div>
                <div class="form-group">
                    <label>Централізоване постачання холодної води</label>
                    <input class="form-control" value="{{$comunal->cold_water}}" name="cold_water" placeholder="Централізоване постачання холодної води" required>
                </div>
                <div class="form-group">
                    <label>Централізоване постачання гарячої води</label>
                    <input class="form-control" value="{{$comunal->hot_water}}" name="hot_water" placeholder="Централізоване постачання гарячої води" required>
                </div>
                <div class="form-group">
                    <label>Водовідведення</label>
                    <input class="form-control" value="{{$comunal->drainage}}" name="drainage" placeholder="Водовідведення" required>
                </div>
                <div class="form-group">
                    <label>Централізоване опалення</label>
                    <input class="form-control" value="{{$comunal->centralized_heating}}" name="centralized_heating" placeholder="Централізоване опалення" required>
                </div>
                <div class="form-group">
                    <label>Електропостачання</label>
                    <input class="form-control" value="{{$comunal->electricity_supply}}" name="electricity_supply" placeholder="Електропостачання" required>
                </div>
                <div class="form-group">
                    <label>Вивезення побутових відходів</label>
                    <input class="form-control" value="{{$comunal->household_waste_removal}}" name="household_waste_removal" placeholder="Вивезення побутових відходів" required>
                </div>
                <button type="submit" style="float: left;" class="btn btn-default right">Submit</button>
            </div>
        </div>
    </form>
@endsection
