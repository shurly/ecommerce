<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @yield('scriptjs')
    <title>E-commerce</title>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md bg-ligth pl-5 pr-5 mb-5">
    <a href="#" class="navbar-brand">Meu E-commerce</a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a href="{{route('home')}}" class="nav-link">Home</a>
            <a href="{{route('category')}}" class="nav-link">Categoria</a>
            @if(!\Illuminate\Support\Facades\Auth::user())
                <a href="{{route('register')}}" class="nav-link">Cadastrar</a>
            @endif

            @if(!\Illuminate\Support\Facades\Auth::user())
                <a href="{{route('login')}}" class="nav-link">Login</a>
            @else
                <a href="{{route('my.shopping')}}" class="nav-link">Minhas Compras</a>
                <a href="{{route('logout')}}" class="nav-link">Logout</a>
            @endif
        </div>
    </div>
    <a href="{{ route('see.cart') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
</nav>

<div class="container">
    <div class="row">

        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="col-12">
                <p class="text-right">Seja bem vindo, {{ \Illuminate\Support\Facades\Auth::user()->name }}, <a
                        href="{{ route('logout') }}">sair</a></p>
            </div>
        @endif

        @if($message = Session::get('error'))
            <div class="col-12">
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
        @endif

        @if($message = Session::get('ok'))
            <div class="col-12">
                <div class="alert alert-success">{{ $message }}</div>
            </div>
        @endif

        @yield('content')
    </div>
</div>
</body>


</html>
