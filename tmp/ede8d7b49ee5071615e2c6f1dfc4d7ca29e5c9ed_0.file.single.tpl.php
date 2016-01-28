<?php /* Smarty version 3.1.27, created on 2016-01-28 10:39:45
         compiled from "views/single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203363466456a9e1e19603c6_06915602%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede8d7b49ee5071615e2c6f1dfc4d7ca29e5c9ed' => 
    array (
      0 => 'views/single.tpl',
      1 => 1453972925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203363466456a9e1e19603c6_06915602',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a9e1e19b8c62_00212662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a9e1e19b8c62_00212662')) {
function content_56a9e1e19b8c62_00212662 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203363466456a9e1e19603c6_06915602';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div id="poll">

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
<?php echo '</script'; ?>
>
</main>
</div>
</body>
</html><?php }
}
?>