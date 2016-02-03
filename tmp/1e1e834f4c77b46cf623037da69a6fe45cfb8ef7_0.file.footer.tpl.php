<?php /* Smarty version 3.1.27, created on 2016-01-28 14:30:43
         compiled from "views/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:36539864056aa18039f36d3_55529508%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1e834f4c77b46cf623037da69a6fe45cfb8ef7' => 
    array (
      0 => 'views/footer.tpl',
      1 => 1453987813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36539864056aa18039f36d3_55529508',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56aa18039f7141_55851037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa18039f7141_55851037')) {
function content_56aa18039f7141_55851037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36539864056aa18039f36d3_55529508';
?>
</main>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight
    });
    document.body.appendChild(pattern.canvas())
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>