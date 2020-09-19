<h1>Hola desde Usuarios</h1>

<table class="table table-bordered">
    <thead>
        <th>id</th>
        <th>nombres</th>
        <th>apellidos</th>
    </thead>
    <tbody>
        {foreach from=$usuarios item=$u}
            <tr>
                <td>{$u.id_usuario}</td>
                <td>{$u.nombres}</td>
                <td>{$u.apellidos}</td>
                <td>{$u.id_usuario}</td>
            </tr>
        {/foreach}
    </tbody>
</table>