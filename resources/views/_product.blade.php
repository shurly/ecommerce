@if(isset($list))
    <div class="row">
        @foreach($list as $prod)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset($prod->image) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">{{ $prod->name }} - R$ {{ $prod->price }}</h6>
                        <a href="{{ route('cart.add', ['idProduct' => $prod->id]) }}" class="btn btn-sm btn-secondary">Adicionar item</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif




