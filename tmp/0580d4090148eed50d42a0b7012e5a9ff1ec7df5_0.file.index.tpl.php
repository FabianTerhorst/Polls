<?php /* Smarty version 3.1.27, created on 2016-02-03 11:41:52
         compiled from "views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:37928631456b1d970703cf2_70385583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580d4090148eed50d42a0b7012e5a9ff1ec7df5' => 
    array (
      0 => 'views/index.tpl',
      1 => 1454496110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37928631456b1d970703cf2_70385583',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1d970751352_69432826',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1d970751352_69432826')) {
function content_56b1d970751352_69432826 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '37928631456b1d970703cf2_70385583';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
    <div class="mdl-card poll mdl-shadow--2dp">
        <form action="/api/createPoll" method="post">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text"><div class="mdl-textfield title mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="theme">
                        <label class="mdl-textfield__label">Titel deiner Umfrage</label>
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
                    Umfrage erstellen
                </button>
            </div>
        </form>
    </div>
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
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>