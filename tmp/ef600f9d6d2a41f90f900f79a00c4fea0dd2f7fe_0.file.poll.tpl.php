<?php /* Smarty version 3.1.27, created on 2016-01-28 14:26:47
         compiled from "views/poll.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:121710161056aa171740b375_27745246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef600f9d6d2a41f90f900f79a00c4fea0dd2f7fe' => 
    array (
      0 => 'views/poll.tpl',
      1 => 1453987605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121710161056aa171740b375_27745246',
  'variables' => 
  array (
    'poll' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56aa171744bbc7_07188706',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa171744bbc7_07188706')) {
function content_56aa171744bbc7_07188706 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '121710161056aa171740b375_27745246';
?>
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">
        <?php echo $_smarty_tpl->tpl_vars['poll']->value->theme;?>

    </h2>
</div>
<div class="mdl-card__supporting-text">
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
        <div class="answer mdl-shadow--2dp">
            <p><?php echo $_smarty_tpl->tpl_vars['answer']->value->name;?>
</p>
        </div>
    <?php
$_smarty_tpl->tpl_vars['answer'] = $foreach_answer_Sav;
}
?>
</div><?php }
}
?>