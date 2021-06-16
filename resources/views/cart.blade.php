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
            @php $total = 0; @endphp
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
                @php $total += $p->price; @endphp
            @endforeach
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="5">
                        Total do carrinho: R$ {{ $total }}
                    </td>
                </tr>
            </tfooter>
        </table>

      <div class="text-right">
          <form action="{{ route('finish.cart') }}" method="POST">
              @csrf
              <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success">
          </form>
      </div>

    @else
        <p>Nenhum item no carrinho</p>
    @endif
@endsection
