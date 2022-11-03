<header class='header'>
    <nav class='menu'>
        <a @if(request()->url() == route('main')) class="link-a active" @else class="link-a" @endif
            href='{{ route("main") }}'>Добавить товар</a>
        <a @if(request()->url() == route('price-list')) class="link-a active" @else class="link-a" @endif
            href='{{ route("price-list") }}'>Прайс-лист</a>
    </nav>
</header>
