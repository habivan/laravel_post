<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"       id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{active_link('home')}}" href="{{route('home')}}">{{__('Главная')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_link('blog*')}}" href="{{route('blog')}}">{{__('Блог')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{active_link('register')}}" href="{{route('register')}}">{{__('Регистрация')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_link('login')}}" href="{{route('login')}}">{{__('Вход')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
