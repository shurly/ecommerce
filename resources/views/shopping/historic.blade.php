@extends('layout')

@section('content')
    <div class="col-12">
        <h2>Minhas Compras</h2>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Data da Compra</th>
                <th>Situação</th>
                <th></th>
            </tr>
            @foreach($list as $order)
                <tr>
                    <td>{{ $order->orderdate->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $order->statusDesc() }}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
