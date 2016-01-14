<?php /* Smarty version 3.1.27, created on 2016-01-14 11:13:39
         compiled from "views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:290224978569774d32a8304_00950127%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580d4090148eed50d42a0b7012e5a9ff1ec7df5' => 
    array (
      0 => 'views/index.tpl',
      1 => 1452766410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290224978569774d32a8304_00950127',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569774d32d4673_38114460',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569774d32d4673_38114460')) {
function content_569774d32d4673_38114460 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '290224978569774d32a8304_00950127';
?>
<form action="/api/createPoll" method="post">
    <input name="theme"/>
    <button type="submit">Create</button>
</form><?php }
}
?>