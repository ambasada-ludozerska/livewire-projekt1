<div class='container-xl mx-auto w-75 border border-3 rounded rounded-10 shadow'>
    <br>
<h6 class='w-25 mx-auto'>Wyszukaj po nazwie: <input type='text' wire:model.debounce.150='search'></h6><br>
<h1 class='w-25 mx-auto'>Kategorie</h1>
<table class='table table-bordered table-striped table-hover w-100 mx-auto border border-3 rounded rounded-10 shadow'>
    <tr>
        <th>ID</th><th>Nazwa</th><th>Opis</th><th>Aktywna</th>
    </tr>
    @foreach($categories as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['description']}}</td>
        <td>@if($item['is_active'])
            TAK
        @else
            NIE
        @endif </td>
    </tr>
    @endforeach
</table>
{{--ID: {{$item['id']}} <br>
        Nazwa: {{$item['name']}} <br>
        Opis: {{$item['description']}} <br>
        Aktywna: 
        @if($item['is_active'])
            TAK
        @else
            NIE
        @endif--}}
    <br>
    <div class='w-25 mx-auto'>{{ $categories->links() }}</div>
</div>
