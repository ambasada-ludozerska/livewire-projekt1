<div>
    @foreach($allItems as $item)
        ID: {{$item['id']}} <br>
        Nazwa: {{$item['name']}} <br>
        Cena: {{$item['price']}} <br>
    @endforeach
</div>
