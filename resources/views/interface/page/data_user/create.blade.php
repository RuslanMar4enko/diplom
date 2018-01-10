@extends('interface.master_profile')
@include('interface.errors')
@section('content')
    <h1 style="text-align: center;">ЗАЯВА</h1>
    <h2 style="text-align: center; margin-bottom: 50px;">про призначення житлової субсидії</h2>
    <form method="post" action="{{ action('DataUsersController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <h3>Розділі І:</h3>
            <div>
                <div class="form-group">
                    <label>Найменування структурного підрозділу з питань соціального захисту населення</label>
                    <input type="text" class="form-control" name="structure_unit"
                           placeholder="Найменування структурного підрозділу ..." required>
                </div>
                <div class="form-group">
                    <label>Прізвище, ім’я, по батькові</label>
                    <input type="text" class="form-control" name="name" placeholder="Прізвище ..." required>
                </div>
                <div class="form-group">
                    <label>Місце проживання</label>
                    <input class="form-control" name="place_of_residence" placeholder="Місце проживання" required>
                </div>
                <div class="form-group">
                    <label>Контактий телефон</label>
                    <input class="form-control" name="phone" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <label>Паспорт: серія</label>
                    <input class="form-control" name="pasport_seria" placeholder="Серія" required>
                </div>
                <div class="form-group">
                    <label>Ким і коли виданий</label>
                    <input class="form-control" name="issuance_pasport" placeholder="Виданий" required>
                </div>
                <div class="form-group">
                    <label>Реєстраційний номер облікової картки платника податків</label>
                    <input class="form-control" name="card_taxes" placeholder="Картки платника податків" required>
                </div>
                <div>
                    <p>Прошу призначити субсидію для відшкодування витрат на оплату житлово-
                        комунальних послуг, на придбання скрапленого газу, твердого та рідкого пічного
                        побутового палива (необхідне підкреслити).s</p>
                </div>
                <button type="submit"  class="btn btn-default right">Відправити</button>
            </div>

        </div>
    </form>
@endsection
