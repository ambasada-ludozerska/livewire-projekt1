<div>
<form wire:submit.prevent='save'>
        Edytowany produkt:
        ID: {{$item['id']}} <br>
        Nazwa: {{$item['name']}} <br>
        Opis: {{$item['description']}} <br>
        Cena: {{$item['price']}} <br>
        --------------------------------<br>
        Nowe dane produktu: <br>
        Nazwa: <input type='text' wire:model.lazy='name'> <br>
        Opis: <input type='text' wire:model.lazy='description'> <br>
        Cena: <input type='number' wire:model.lazy='price'> <br>
        <button type='submit'>Zapisz przedmiot</button>
    </form>
</div>
