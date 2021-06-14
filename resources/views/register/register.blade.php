@extends('layout')

@section('content')
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>
    </div>
    <form action="" method="POST">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    Nome: <input type="text" name="name" class="form-control"/>
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    E-mail: <input type="email" name="email" class="form-control"/>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    CPF: <input type="text" name="cpf" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control"/>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    Endereço: <input type="text" name="address" class="form-control"/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    Número: <input type="number" name="number" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    Cidade: <input type="text" name="city" class="form-control"/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    Cep: <input type="text" name="zip" class="form-control"/>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Estado: <input type="text" name="state" class="form-control"/>
                </div>
            </div>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm">
    </form>
@endsection
