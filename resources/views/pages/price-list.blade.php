@extends('../main')

@section('title')
Price list
@endsection

@section('content')

<h1>Прайс лист</h1>

@include('components.notifications')

@if($items->count())

<table class='product-table'>
    <tr>
        <th>Наименование</th>
        <th>Ед. измерения</th>
        <th>Цена(руб.)</th>
        <th>Кол-во на складе</th>
        <th></th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->nameOfProduct}}</td>

        <td>{{$item->unitOfMeasurement}}</td>

        <td>{{$item->productPrice}}</td>

        <td>{{$item->numberOfProducts}}</td>

        <td><button class='info-item-btn btn'><a href="{{ route('info-about-item', $item->id) }}">Подробнее</a></button>
        </td>
    </tr>
    @endforeach
</table>

@else
<div>База данных пуста. Добавьте товар...</div>
@endif

@endsection