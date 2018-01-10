@extends('interface.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right link-style links">
                            @auth
                                <a href="{{ url('/profile/'.auth()->id()) }}">Профіль</a>
                            @else
                                <a href="{{ route('login') }}">Вхід</a>
                                <a href="{{ route('register') }}">Реєстрація</a>
                            @endauth
                        </div>
                    @endif

                    <div class="content ">
                        <strong>Заявник може:</strong>

                        <p>-	направити документи в електронній формі для попереднього розгляду </p>
                        <p>та</p>
                        <p>-	після розгляду заявки, особо отримає відповідь на почту.</p>
                    </div>
                    <div class="text">
                        <h2 class="title-end" >Інструкція</h2>
                        <p>Про порядок заповнення бланку:
                        Декларації про доходи і витрати осіб,
                        які звернулися за призначенням житлової субсидії
                        Декларацію заповнює особа, на яку відкрито особовий рахунок по
                        сплаті житлово-комунальних послуг за місцем реєстрації (або особа, яка
                        фактично сплачує вартість одержуваних послуг.
                        У правому верхньому куті зазначається назва місцевого управління
                            соціального захисту населення до якого подається Декларація.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection