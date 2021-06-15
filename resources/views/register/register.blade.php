@extends('layout')

@section('scriptjs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function (){
            //JQUERY --- Quando carregar a página
            $('#cpf').mask('000.000.000-00')
            $('#zip').mask('00.000-000')
        })
    </script>
@endsection

@section('content')
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>
    </div>
    <form action="{{ route('register.client') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    Nome: <input type="text" name="name" class="form-control"/>
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    E-mail: <input type="email" name="email" class="form-control"/>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    CPF: <input type="text" id="cpf" name="cpf" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control"/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Endereço: <input type="text" name="street" class="form-control"/>
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    Número: <input type="number" name="number" class="form-control"/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    Complemento: <input type="text" name="complement" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="form-group">
                    Cidade: <input type="text" name="city" class="form-control"/>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    Cep: <input type="text" id="zip" name="zip" class="form-control"/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    Estado: <input type="text" name="state" class="form-control"/>
                </div>
            </div>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm">
    </form>
@endsection
