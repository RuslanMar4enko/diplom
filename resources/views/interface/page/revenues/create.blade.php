@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <form method="post" action="{{ action('RevenuesController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <h3>Розділі ІI:</h3>
            <div>
                <div class="form-group">
                    <label>Прізвище, ім’я, по батькові</label>
                    <input type="text" class="form-control" name="full_name"
                           placeholder="Прізвище, ім’я, по батькові" required>
                </div>
                <div class="form-group">
                    <label>Дата народ-ження</label>
                    <input type="text" class="form-control" name="birth" placeholder="Дата народ-ження" required>
                </div>
                <div class="form-group">
                    <label>Реєстраційний номер облікової картки платника податків або серія та номер паспорта (для осіб, які мають відмітку у паспорті про право здійснювати платежі за його серією та номером</label>
                    <input class="form-control" name="card" placeholder="Реєстраційний номер облікової картки платника ..." required>
                </div>
                <div class="form-group">
                    <label>Вид доходу</label>
                    <input class="form-control" name="type_of_income" placeholder="Вид доходу" required>
                </div>
                <div class="form-group">
                    <label>Сума доходу без урахування податку з  доходів фізичних осіб, гривень</label>
                    <input class="form-control" name="amount_income" placeholder="Сума доходу без урахування податку з доходів фізичних осіб, гривень" required>
                </div>
                <div class="form-group">
                    <label>Джерело доходу</label>
                    <input class="form-control" name="source_income" placeholder="Централізоване опалення" required>
                </div>
                <button type="submit" style="float: left;" class="btn btn-default right">Submit</button>
            </div>
        </div>
    </form>
@endsection
