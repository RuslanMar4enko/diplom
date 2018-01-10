@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <form method="post" action="{{ action('CostsController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <h3>Розділі ІII:</h3>
            <div>
                <div>
                <p> Інформація про витрати на придбання майна, товарів або оплату послуг на суму,
                    що перевищує 50 тис. гривень, які здійснені протягом 12 місяців перед зверненням за
                    призначенням житлової субсидії. </p>
                </div>
                <div class="form-group">
                    <label>Прізвище, ініціали</label>
                    <input type="text" class="form-control" name="name"
                           placeholder="Прізвище, ініціали" required>
                </div>
                <div class="form-group">
                    <label>Вид придбаного майна або оплачених послуг</label>
                    <input type="text" class="form-control" name="kind" placeholder="Вид придбаного майна або оплачених послуг" required>
                </div>
                <div class="form-group">
                    <label>Вартість, гривень</label>
                    <input class="form-control" name="cost_property" placeholder="Вартість, гривень" required>
                </div>
                <div class="form-group">
                    <label>Дата здійснення купівлі або оплати послуг</label>
                    <input class="form-control" name="data_costs" placeholder="Дата здійснення купівлі або оплати послуг" required>
                </div>
                <div>
                    <p>Я усвідомлюю, що в разі подання мною у неповному обсязі або недостовірних
                        відомостей про осіб, які зареєстровані (фактично проживають) у житловому
                        приміщенні/будинку, їх доходи і витрати мені може бути відмовлено у призначенні житлової
                        субсидії або припинено її надання. У такому разі зобов’язуюся повернути надміру
                        перераховану (виплачену) суму житлової субсидії у подвійному розмірі.
                    </p>
                </div>
                <button type="submit" style="float: left;" class="btn btn-default right">Submit</button>
            </div>
        </div>
    </form>
@endsection
