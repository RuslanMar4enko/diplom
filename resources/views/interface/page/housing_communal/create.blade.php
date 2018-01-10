@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <form method="post" action="{{ action('HousingCommunalsController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <h3>Продовження розділу І:</h3>
            <div>
                <p>Відомості про житлово-комунальні послуги, якими користуються особи, які
                    зареєстровані (фактично проживають) у житловому приміщенні/будинку
                </p>
            </div>
            <div>
                <div class="form-group">
                    <label>Утримання будинків і споруд та прибудинкових територій</label>
                    <input type="text" class="form-control" name="house"
                           placeholder="Утримання будинків і споруд ..." required>
                </div>
                <div class="form-group">
                    <label>Газопостачання</label>
                    <input type="text" class="form-control" name="gas" placeholder="Газопостачання" required>
                </div>
                <div class="form-group">
                    <label>Централізоване постачання холодної води</label>
                    <input class="form-control" name="cold_water" placeholder="Централізоване постачання холодної води" required>
                </div>
                <div class="form-group">
                    <label>Централізоване постачання гарячої води</label>
                    <input class="form-control" name="hot_water" placeholder="Централізоване постачання гарячої води" required>
                </div>
                <div class="form-group">
                    <label>Водовідведення</label>
                    <input class="form-control" name="drainage" placeholder="Водовідведення" required>
                </div>
                <div class="form-group">
                    <label>Централізоване опалення</label>
                    <input class="form-control" name="centralized_heating" placeholder="Централізоване опалення" required>
                </div>
                <div class="form-group">
                    <label>Електропостачання</label>
                    <input class="form-control" name="electricity_supply" placeholder="Електропостачання" required>
                </div>
                <div class="form-group">
                    <label>Вивезення побутових відходів</label>
                    <input class="form-control" name="household_waste_removal" placeholder="Вивезення побутових відходів" required>
                </div>
                <div>
                    <p>
                        У разі коли прийняття рішення щодо моєї заяви потребує окремого рішення
                        місцевих органів виконавчої влади/місцевого самоврядування або утвореної ними
                        комісії, прошу розглянути/не розглядати мою заяву відповідними органами або
                        утвореною ними комісією (необхідне підкреслити).

                    </p>
                </div>
                <button type="submit" style="float: left;" class="btn btn-default right">Відправити</button>
            </div>
        </div>
    </form>
@endsection
