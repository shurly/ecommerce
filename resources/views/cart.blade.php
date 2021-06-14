@extends('layout')

@section('content')
    <h3>Carrinho</h3>

    @if(isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cart as $indice => $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td><img src="{{ asset($p->image) }}" height="50" /></td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->description }}</td>
                    <td>
                        <a href="{{ route('delete.item.cart', ['indice' => $indice]) }}" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum item no carrinho</p>
    @endif
@endsection
