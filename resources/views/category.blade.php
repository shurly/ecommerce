@extends('layout')

@section('content')
    <div class="col-2">
        @if(isset($listCategory) && count($listCategory) > 0)
            <div class="list-group">
                <a href="{{ route('category') }}" class="list-group-item list-group-item-action @if(0 == $idCategory) active @endif">Todas</a>
                @foreach($listCategory as $category)
                    <a href="{{ route('category.id', ['idCategory' => $category->id]) }}"
                       class="list-group-item list-group-item-action @if($category->id == $idCategory) active @endif"> {{ $category->category }}</a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-10">
        @include('_product', ['list', $list])
    </div>
@endsection
