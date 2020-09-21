<h1>Hola desde Usuarios {if isset($message)}
    => {$message}
{/if}</h1>

<form method="POST" action="{$templateParams.baseUrl}user/postDesdeOtraUrl">  
  <div class="form-group">
    <label for="exampleInputPassword1">texto</label>
    <input type="text" name="text" class="form-control" id="exampleInputPassword1" placeholder="any text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<a href="{$templateParams.baseUrl}user/usandoGet/1" class="btn btn-primary">
    usandoGet
</a>

<br><br>
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