<table class="table table-bordered">
    <tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>

    @foreach ($listItem as $item)
        <tr>
           <td>{{ $item->name }}</td>
           <td>{{ $item->quantity }}</td>
           <td>{{ $item->priceItem }}</td>
        </tr> 
    @endforeach
</table>