<?php /* Smarty version 3.1.27, created on 2016-01-28 14:13:31
         compiled from "views/single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114950637556aa13fb1e0eb2_52208306%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede8d7b49ee5071615e2c6f1dfc4d7ca29e5c9ed' => 
    array (
      0 => 'views/single.tpl',
      1 => 1453986809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114950637556aa13fb1e0eb2_52208306',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56aa13fb209916_16797299',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa13fb209916_16797299')) {
function content_56aa13fb209916_16797299 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114950637556aa13fb1e0eb2_52208306';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
<?php echo '<script'; ?>
 type="application/javascript">
    $id = "<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
";
    $.ajax({
        url: "/api/selectPoll",
        type: 'POST',
        data: {
            'id': '<?php echo $_smarty_tpl->tpl_vars['pollId']->value;?>
'
        },
        success: function(msg){
            console.log(msg);
            $("#poll").html(msg);
        }
    });

    var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight
    });
    document.body.appendChild(pattern.canvas())
<?php echo '</script'; ?>
>
</main>
</div>
</body>
</html><?php }
}
?>