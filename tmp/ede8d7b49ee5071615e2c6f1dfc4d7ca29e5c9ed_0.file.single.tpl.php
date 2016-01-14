<?php /* Smarty version 3.1.27, created on 2016-01-14 11:12:50
         compiled from "views/single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1182401967569774a2157ad6_13529097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede8d7b49ee5071615e2c6f1dfc4d7ca29e5c9ed' => 
    array (
      0 => 'views/single.tpl',
      1 => 1452766187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1182401967569774a2157ad6_13529097',
  'variables' => 
  array (
    'pollId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569774a21a5404_64667989',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569774a21a5404_64667989')) {
function content_569774a21a5404_64667989 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1182401967569774a2157ad6_13529097';
?>
<html>
<head>
    <title>Bla</title>
    <?php echo '<script'; ?>
 src="/js/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
</head>
<body>
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
</body>
</html><?php }
}
?>