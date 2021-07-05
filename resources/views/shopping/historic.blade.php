@extends('layout')
@section('scriptjs')
    <script>
        $(function(){
            $('.buyInfo').on('click', function(){
                let id = $(this).attr('data-value')
                $.post('{{ route('details')}}', { idOrder : id }, (result) => {
                    $('#contentOrder').html(result)
                })
            })
        })
    </script>
   
@endsection

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
                    <td>
                        <a href="#" class="btn btn-sm btn-info buyInfo" data-value="{{ $order->id }}" data-toggle="modal" data-target="#modalBuy">
                            <i class="fas fa-shopping-basket"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

<div class="modal fade" id="modalBuy">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Detalhes da Compra</h5>
            </div>
            <div class="modal-body">
               <div id="contentOrder">

               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"> Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection
