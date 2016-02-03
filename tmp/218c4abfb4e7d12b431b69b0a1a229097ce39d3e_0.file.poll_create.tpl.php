<?php /* Smarty version 3.1.27, created on 2016-02-03 13:08:31
         compiled from "views/poll_create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159240678056b1edbfeb4419_59242179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218c4abfb4e7d12b431b69b0a1a229097ce39d3e' => 
    array (
      0 => 'views/poll_create.tpl',
      1 => 1454501307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159240678056b1edbfeb4419_59242179',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1edbff0aa12_91617053',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1edbff0aa12_91617053')) {
function content_56b1edbff0aa12_91617053 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159240678056b1edbfeb4419_59242179';
?>
<div class="mdl-card poll">
    <form action="/api/appendToPoll" method="post">
        <input name="pollid" value="<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
" hidden>
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text"><div class="mdl-textfield title mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="theme">
                    <label class="mdl-textfield__label">Titel deiner Frage</label>
                </div></h2>
        </div>
        <div class="mdl-card__supporting-text">
            <div id="answers">
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer1" name="answer1">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 1</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer2" name="answer2">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 2</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer3" name="answer3">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 3</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer4" name="answer4">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 4</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Frage hinzufügen
            </button>
        </div>
    </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var answers = $("#answers");
    answers.on('keydown', 'input[id*="answer"]', function() {
        var name =  $(this).attr("id");
        var neededName = "answer" + answers.children().length;
        if(name == neededName) {
            var newName = "answer" + (answers.children().length +1);
            var newHtmlName = "Antwortmöglichkeit " + (answers.children().length +1);
            answers.append('<div class="mdl-textfield mdl-js-textfield animate"> <input class="mdl-textfield__input" type="text" id="' + newName + '" name="' + newName + '" > <label class="mdl-textfield__label">' + newHtmlName + '</label> </div>')
            componentHandler.upgradeDom();
        }
    });
<?php echo '</script'; ?>
><?php }
}
?>