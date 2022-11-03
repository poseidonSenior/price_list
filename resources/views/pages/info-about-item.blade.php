@extends('../main')

@section('title')
{{$item->nameOfProduct}}
@endsection

@section('content')

<h2>Информация о товаре "{{$item->nameOfProduct}}"</h2>

@include('components.notifications')

<div class='item-container'>
    <div>
        <span>Наименование:</span>
        <span>{{$item->nameOfProduct}}</span>
    </div>

    <div>
        <span>Ед. измерения:</span>
        <span>{{$item->unitOfMeasurement}}</span>
    </div>

    <div>
        <span>Цена:</span>
        <span>{{$item->productPrice}} руб</span>
    </div>

    <div>
        <span>Количество на складе:</span>
        <span>{{$item->numberOfProducts}}</span>
    </div>

    <div>
        <span>Добавлен в базу:</span>
        <span>{{$item->created_at}}</span>
    </div>

    <div>
        <span>Обновлен:</span>
        <span>{{$item->updated_at}}</span>
    </div>

</div>
<button class='update-item-btn btn'><a href="{{ route('update-item', $item->id) }}">Редактировать</a></button>
<button class='delete-item-btn btn'><a href="{{ route('delete-item', $item->id) }}">Удалить товар</a></button>



@endsection