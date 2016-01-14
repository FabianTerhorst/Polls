<?php /* Smarty version 3.1.27, created on 2016-01-14 11:05:40
         compiled from "views/poll.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:347401011569772f4ba31e0_09119649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef600f9d6d2a41f90f900f79a00c4fea0dd2f7fe' => 
    array (
      0 => 'views/poll.tpl',
      1 => 1452765938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347401011569772f4ba31e0_09119649',
  'variables' => 
  array (
    'poll' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569772f4be4b65_95175061',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569772f4be4b65_95175061')) {
function content_569772f4be4b65_95175061 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '347401011569772f4ba31e0_09119649';
?>
<p><?php echo $_smarty_tpl->tpl_vars['poll']->value->theme;?>
</p>
<?php
$_from = $_smarty_tpl->tpl_vars['poll']->value->answers;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['answer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
$foreach_answer_Sav = $_smarty_tpl->tpl_vars['answer'];
?>
<p><?php echo $_smarty_tpl->tpl_vars['answer']->value->name;?>
</p>
<?php
$_smarty_tpl->tpl_vars['answer'] = $foreach_answer_Sav;
}
}
}
?>