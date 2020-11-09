<h4>probando</h4>
<h1>Hola desde Usuarios {if isset($message)}
    => {$message}
{/if}</h1>

<form method="POST" action="{$template.baseUrl}user/postDesdeOtraUrl">  
  <div class="form-group">
    <label for="exampleInputPassword1">texto</label>
    <input type="text" name="text" class="form-control" id="exampleInputPassword1" placeholder="any text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<a href="{$template.baseUrl}user/usandoGet/1" class="btn btn-primary">
    usandoGet
</a>
<br><br>
<table class="table table-bordered table-sm table-striped table-hover">
    <thead class="thead-dark text-center">
        <th style="width:80px">ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        {foreach from=$usuarios item=$u}
            <tr>
                <td>{$u.id_usuario}</td>
                <td>{$u.nombres}</td>
                <td>{$u.apellidos}</td>
                <td><button class="btn btn-sm btn-warning"><span class="fab fa-pencil"></span></button></td>
            </tr>
        {/foreach}
    </tbody>
</table>