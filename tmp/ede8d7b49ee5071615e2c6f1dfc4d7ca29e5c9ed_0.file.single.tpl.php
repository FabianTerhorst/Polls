<?php /* Smarty version 3.1.27, created on 2016-02-03 13:06:14
         compiled from "views/single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179033459656b1ed368f44e6_22544823%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede8d7b49ee5071615e2c6f1dfc4d7ca29e5c9ed' => 
    array (
      0 => 'views/single.tpl',
      1 => 1454501171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179033459656b1ed368f44e6_22544823',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1ed3692c726_24437043',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1ed3692c726_24437043')) {
function content_56b1ed3692c726_24437043 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179033459656b1ed368f44e6_22544823';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
<button id="add-answer" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    <i class="material-icons">add</i>
</button>
<dialog id="add-answer-dialog" class="mdl-dialog">
    <h4 class="mdl-dialog__title">Frage hinzufügen</h4>
    <div class="mdl-dialog__content">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
    <div class="mdl-dialog__actions">
        <button type="button" class="mdl-button close">Abbrechen</button>
    </div>
</dialog>
<?php echo '<script'; ?>
 type="text/javascript">
    $id = "<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
";
    function selectPoll() {
        $.ajax({
            url: "/api/selectPoll",
            type: 'POST',
            data: {
                'id': '<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
'
            },
            success: function(msg){
                $(".content").html(msg);
                $(".poll").on("click", ".answer", function() {
                    $.ajax({
                        url: "/api/vote",
                        type: 'POST',
                        data: {
                            'pollid': $(this).attr("pollid"),
                            'answerid': $(this).attr("answerid")
                        },
                        success: function(msg){
                            var json = JSON.parse(msg);
                            json.forEach(function(entry) {
                                var width = entry.votes.toString() + "%";
                                $("#answer" + entry.id).css("width", width);
                            });
                        }
                    })
                });
            }
        });
    }

    selectPoll();

    var dialog = document.querySelector('#add-answer-dialog');
    var showDialogButton = document.querySelector('#add-answer');
    if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
        $.ajax({
            url: "/api/createPollUI",
            type: 'POST',
            data: {
                'pollid': '<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
'
            },
            success: function(msg){
                $("#add-answer-dialog > .mdl-dialog__content").html(msg);
                componentHandler.upgradeDom();
            }
        });
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>