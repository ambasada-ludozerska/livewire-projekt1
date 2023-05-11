<div>
    <form wire:submit.prevent='create'>
        Nazwa: <input type='text' wire:model='name'> <br>
        Opis: <input type='text' wire:model='description'> <br>
        Cena: <input type='number' wire:model='price'> <br>
        <button type='submit'>Dodaj przedmiot</button>
    </form>
</div>
