<div class='container-lg mx-auto'>
<form class='mx-auto w-25 m-3 p-3 border border-3 shadow rounded rounded-10' wire:submit.prevent='create'>
        <h3>Dodaj kategorię: </h3>
        <label for='name' class='form-label'>Nazwa: </label>
        <input type='text' id='name' class='form-control' wire:model.lazy='name'>
        <label for='description' class='form-label'>Opis: </label>
        <input type='text' id='description' class='form-control' wire:model.lazy='description'>
        <div class='mx-auto w-50'>
        <label for='is_active' class='form-label'> Aktywna: </label>
        <input type='checkbox' wire:model.lazy='is_active'>
        </div>
        <button type='submit' class='btn btn-primary w-100'>Dodaj</button>
    </form>
</div>
