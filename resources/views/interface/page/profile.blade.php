@extends('interface.master_profile')


@section('content')

    <div class="container">
        <h1 class="show-title"> Вітаєма вас на сайті Призначення житлової субсидії,  <span class="name-profile">{{$profile[0]['user']['name']}}</span>!</h1>
        <div class="img-show">
            <h2>Інструкція</h2>
            про порядок заповнення бланку
            Декларації про доходи і витрати осіб,
            які звернулися за призначенням житлової субсидії
            Декларацію заповнює особа, на яку відкрито особовий рахунок по
            сплаті житлово-комунальних послуг за місцем реєстрації (або особа, яка
            фактично сплачує вартість одержуваних послуг.
            У правому верхньому куті зазначається назва місцевого управління
            соціального захисту населення до якого подається Декларація.
            <br>  <h3>У розділі І:</h3> <br>
            У позиції 1 вказується: прізвище, ім’я по батькові особи, на яку
            відкрито особовий рахунок по сплаті житлово-комунальних послуг за місцем
            реєстрації (або особи, яка фактично сплачує вартість одержуваних послуг).
            У позиції 2 необхідно зазначити загальну площу житлового
            приміщення (кв. метрів), кількість поверхів у будинку, а також підкреслити
            тип будинку: індивідуальний чи багатоквартирний.
            У позиції 3 вказуються відомості про всіх осіб, зареєстрованих у
            житловому приміщенні (або фактично проживаючих – для осіб, які
            орендують житло і вказані у договорі оренди, або для індивідуальних
            забудовників, будинки яких не прийняті в експлуатацію), яким нараховується
            плата за житлово-комунальні послуги із зазначенням прізвища, ім’я по
            батькові, дати народження, ідентифікаційного номера (за наявності) таких
            осіб. У графі „Примітки” можливо зазначити, що конкретна особа не
            проживає і їй не нараховується плата за житлово-комунальні послуги.
            <br> <h3>У розділі ІІ</h3><br>
            заповнюються відомості про всі види доходів (заробітна
            плата, пенсія, допомога (крім її частини, виплата якої здійснюється
            одноразово, зокрема, при народженні дитини), стипендія, грошове
            забезпечення, аліменти, виплати відповідно до умов цивільно-правового
            договору, доходи від підприємницької діяльності, здачі майна в оренду, від
            продажу майна та немайнових прав, сільськогосподарської продукції,
            дивіденди, проценти від розміщення депозитів тощо) осіб, зареєстрованих у
            житловому приміщенні (або фактично проживаючих, зазначених у договорі
            оренди), за попередній календарний рік (12 місяців 2014 року) без
            урахування податку з доходів фізичних осіб. У графі „Джерело доходу” –
            назва установи, організації, підприємства, де отримується дохід.
            <br><h3>У розділі ІІІ</h3><br>
            вказується інформація про особу, яка здійснила
            одноразову купівлю майна або оплату послуг протягом 12 місяців перед
            зверненням за призначенням субсидії на суму, яка на час купівлі (оплати)
            перевищує 50 тисяч гривень із зазначенням виду, вартості, дати здійснення
            купівлі (оплати) майна або послуг.
            Відомості, зазначені у Декларації, засвідчуються підписом особи, а
            також зазначається дата заповнення Декларації.
        </div>
    </div>
    </div>
@endsection