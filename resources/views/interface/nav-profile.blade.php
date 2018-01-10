<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Головна</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/profile/'.auth()->id()) }}">Профіль</a></li>
                <li><a href="{{ action('DataUsersController@create') }}">Скласти ЗАЯВУ</a></li>
                <li><a href="{{ action('DataUsersController@index') }}">Корегуваняя розділу І</a></li>
                <li><a href="{{ action('HousingCommunalsController@index') }}"> Пр. Корегуваняя розділу І</a></li>
                <li><a href="{{ action('RevenuesController@index') }}">  Корегуваняя розділу ІІ</a></li>
                <li><a href="{{ action('CostsController@index') }}"> Корегуваняя розділу ІІІ</a></li>
                <li><a href="https://maanimo.com/helpful/141877-kak-rasschitat-subsidiyu-v-ukraine-poryadok-i-osobennosti-nachisleniya-subsidiy" target="_blank">Де розрахувати?</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>