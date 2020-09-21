<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-20 20:28:29
  from 'C:\xampp\htdocs\framework\protected\views\user\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f67f3ad69f594_93156642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd562b7a821f4395caea8c64c8180cba5b2213033' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\protected\\views\\user\\index.tpl',
      1 => 1600648094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f67f3ad69f594_93156642 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hola desde Usuarios <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
    => <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?></h1>

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['templateParams']->value['baseUrl'];?>
user/postDesdeOtraUrl">  
  <div class="form-group">
    <label for="exampleInputPassword1">texto</label>
    <input type="text" name="text" class="form-control" id="exampleInputPassword1" placeholder="any text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<a href="<?php echo $_smarty_tpl->tpl_vars['templateParams']->value['baseUrl'];?>
user/usandoGet/1" class="btn btn-primary">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['id_usuario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['nombres'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['apellidos'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['id_usuario'];?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
