<div class='container-md w-50 mx-auto m-3 p-3 border border-3 shadow rounded rounded-10'>
        <h3 class='w-50 mx-auto'>Edytowana kategoria:</h3>
        <table class='table table-bordered table-striped w-75 mx-auto shadow border border-3 rounded rounded-10'>
            <tr>
                <th>ID</th><th>Nazwa</th><th>Opis</th><th>Aktywna</th>
            </tr>
            <tr>
                <td>{{$category['id']}}</td>
                <td>{{$category['name']}}</td>
                    <td>{{$category['description']}}</td>
                <td>@if($category['is_active'])
                        TAK
                    @else
                       NIE
                @endif 
                </td>
            </tr>
        </table>
        <form class='w-75 mx-auto p-3 m-3 rounded rounded-10' wire:submit.prevent='save'>
        <h3 class='w-50 mx-auto'>Nowe dane:</h3>
        <label for='name' class='form-label'>Nazwa: </label>
        <input type='text' class='form-control' wire:model.lazy='name'>
        <label for='description' class='form-label'>Opis: </label>
        <input type='text' class='form-control' wire:model.lazy='description'>
        <div class='mx-auto w-25'>
        <label for='is_active' class='form-label'> Aktywna: </label>
        <input type='checkbox' wire:model.lazy='is_active'>
        </div>
        <button type='submit' class='btn btn-primary w-100'>Zapisz</button>
    </form>
</div>
