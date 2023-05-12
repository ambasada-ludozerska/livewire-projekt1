<div class='container-sm w-50 mx-auto shadow border border-3 rounded rounded-10 m-3 p-3'>
<h3 class='alert alert-danger w-100 mx-auto'><b>Czy na pewno chcesz usunąć tą kategorię?</b></h3>
<table class='table table-bordered table-striped w-100 mx-auto shadow border border-3 rounded rounded-10 m-2 p-2'>
            <tr>
                <th>ID</th><th>Nazwa</th><th>Opis</th>
            </tr>
            <tr>
                <td>{{$category['id']}}</td>
            <td>{{$category['name']}}</td>
                <td>{{$category['description']}}</td>
    </tr>

        </table>
        <form class='mx-auto w-25 m-2 p-2'>
            <button class='btn btn-primary w-auto' wire:click='cancel'>NIE</button>
            <button class='btn btn-danger w-auto' wire:click='delete'>TAK</button>
        </form>
</div>
