@extends('layout')

@section('content')

    <div class="container">
        <div class="col-6">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-3">Faça seu Login</h2>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="  col-md-9 offset-md-3">
                        E-mail: <input type="text" name="email" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 offset-md-3">
                        Senha: <input type="password" name="password" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 offset-md-3">
                        <input type="submit" value="Enviar" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
