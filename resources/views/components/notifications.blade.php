@if($errors->any())
<div class='adding-errors notifications'>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if(session('success'))

<div class='adding-success notifications'>
    <ul>
        <li>{{session('success')}}</li>
    </ul>
</div>

@endif
