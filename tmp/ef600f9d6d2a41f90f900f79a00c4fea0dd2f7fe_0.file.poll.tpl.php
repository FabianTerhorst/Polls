<?php /* Smarty version 3.1.27, created on 2016-02-03 12:58:47
         compiled from "views/poll.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2109639056b1eb7768abc6_72898505%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef600f9d6d2a41f90f900f79a00c4fea0dd2f7fe' => 
    array (
      0 => 'views/poll.tpl',
      1 => 1454500724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109639056b1eb7768abc6_72898505',
  'variables' => 
  array (
    'poll' => 0,
    'answer' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1eb7771f256_23090518',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1eb7771f256_23090518')) {
function content_56b1eb7771f256_23090518 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/Users/fabianterhorst/PhpstormProjects/KappaPolls/smarty-3.1.27/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2109639056b1eb7768abc6_72898505';
?>
<div class="mdl-card poll mdl-shadow--2dp">
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
            <div class="answer mdl-shadow--2dp <?php if ($_smarty_tpl->tpl_vars['answer']->value->votes == 0 && $_smarty_tpl->tpl_vars['poll']->value->votes > 0) {?>mdl-color--grey-500<?php }?>" answerid="<?php echo $_smarty_tpl->tpl_vars['answer']->value->id;?>
" pollid="<?php echo $_smarty_tpl->tpl_vars['poll']->value->id;?>
">
                <div id="answer<?php echo $_smarty_tpl->tpl_vars['answer']->value->id;?>
" class="content" <?php if ($_smarty_tpl->tpl_vars['poll']->value->votes > 0 && $_smarty_tpl->tpl_vars['answer']->value->votes > 0) {?>style="width:<?php echo smarty_function_math(array('equation'=>"100 / pollVotes * answerVotes",'pollVotes'=>$_smarty_tpl->tpl_vars['poll']->value->votes,'answerVotes'=>$_smarty_tpl->tpl_vars['answer']->value->votes),$_smarty_tpl);?>
%"<?php }?>><div class="nameContent"><div class="name"><?php echo $_smarty_tpl->tpl_vars['answer']->value->name;?>
</div></div></div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['answer'] = $foreach_answer_Sav;
}
?>
    </div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['poll']->value->childs;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['child']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
$foreach_child_Sav = $_smarty_tpl->tpl_vars['child'];
?>
    <div class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">
                <?php echo $_smarty_tpl->tpl_vars['child']->value->theme;?>

            </h2>
        </div>
        <div class="mdl-card__supporting-text">
            <?php
$_from = $_smarty_tpl->tpl_vars['child']->value->answers;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['answer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
$foreach_answer_Sav = $_smarty_tpl->tpl_vars['answer'];
?>
                <div class="answer mdl-shadow--2dp <?php if ($_smarty_tpl->tpl_vars['answer']->value->votes == 0 && $_smarty_tpl->tpl_vars['child']->value->votes > 0) {?>mdl-color--grey-500<?php }?>" answerid="<?php echo $_smarty_tpl->tpl_vars['answer']->value->id;?>
" pollid="<?php echo $_smarty_tpl->tpl_vars['child']->value->id;?>
">
                    <div id="answer<?php echo $_smarty_tpl->tpl_vars['answer']->value->id;?>
" class="content" <?php if ($_smarty_tpl->tpl_vars['child']->value->votes > 0 && $_smarty_tpl->tpl_vars['answer']->value->votes > 0) {?>style="width:<?php echo smarty_function_math(array('equation'=>"100 / pollVotes * answerVotes",'pollVotes'=>$_smarty_tpl->tpl_vars['child']->value->votes,'answerVotes'=>$_smarty_tpl->tpl_vars['answer']->value->votes),$_smarty_tpl);?>
%"<?php }?>><div class="nameContent"><div class="name"><?php echo $_smarty_tpl->tpl_vars['answer']->value->name;?>
</div></div></div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['answer'] = $foreach_answer_Sav;
}
?>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['child'] = $foreach_child_Sav;
}
}
}
?>