<div>
    Czy na pewno chcesz usunąć ten przedmiot?<br>
    ID: {{$item['id']}} <br>
    Nazwa: {{$item['name']}} <br>
    Opis: {{$item['description']}} <br>
    Cena: {{$item['price']}} <br>
    <button wire:click='cancel'>NIE</button>
    <button wire:click='delete'>TAK</button>
</div>
