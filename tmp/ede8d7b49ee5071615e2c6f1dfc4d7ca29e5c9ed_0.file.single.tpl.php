<?php /* Smarty version 3.1.27, created on 2016-02-03 10:51:31
         compiled from "views/single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:199347527156b1cda34c21f2_32299568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede8d7b49ee5071615e2c6f1dfc4d7ca29e5c9ed' => 
    array (
      0 => 'views/single.tpl',
      1 => 1454493076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199347527156b1cda34c21f2_32299568',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1cda351a404_26828351',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1cda351a404_26828351')) {
function content_56b1cda351a404_26828351 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199347527156b1cda34c21f2_32299568';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
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
                $("#poll").html(msg);
            }
        });
    }

    selectPoll();

    $("#poll").on("click", ".answer", function() {
        $.ajax({
            url: "/api/vote",
            type: 'POST',
            data: {
                'pollid': '<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
',
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
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>