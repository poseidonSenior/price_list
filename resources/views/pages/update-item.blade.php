@extends('../main')

@section('title')
Update item
@endsection

@section('content')

<h1>Форма редактирования товара</h1>

@include('components.notifications')

<form class='form' action='{{ route("update-item-submit", $item->id) }}' method='post'>
    @csrf
    <div class="forms-content">
        <div class="form-container">
            <label class='form-label' for="nameOfProduct">Введите наименование продукции:</label>
            <input class='form-input' type="text" name='nameOfProduct' id='nameOfProduct'
                value='{{ $item->nameOfProduct }}'>
        </div>

        <div class="form-container">
            <label class='form-label' for="unitOfMeasurement">Введите единицу измерения:</label>
            <input class='form-input' type="text" name='unitOfMeasurement' id='unitOfMeasurement'
                value='{{ $item->unitOfMeasurement }}'>
        </div>

        <div class="form-container">
            <label class='form-label' for="productPrice">Введите цену в руб.:</label>
            <input class='form-input' type="text" name='productPrice' id='productPrice'
                value='{{ $item->productPrice }}'>
        </div>

        <div class="form-container">
            <label class='form-label' for="numberOfProducts">Кол-во продукции на складе:</label>
            <input class='form-input' type="text" name='numberOfProducts' id='numberOfProducts'
                value='{{ $item->numberOfProducts }}'>
        </div>
    </div>

    <button type='submit' class='add-item-btn btn'> Применить</button>
</form>

@endsection
