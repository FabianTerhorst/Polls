<?php /* Smarty version 3.1.27, created on 2016-02-03 10:54:31
         compiled from "views/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26985392356b1ce57b0c395_25223946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1454493269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26985392356b1ce57b0c395_25223946',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1ce57b29a65_52766652',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1ce57b29a65_52766652')) {
function content_56b1ce57b29a65_52766652 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26985392356b1ce57b0c395_25223946';
?>
<html>
<head>
    <title>Bla</title>
    <?php echo '<script'; ?>
 src="/js/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php echo '<script'; ?>
 src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.amber-light_green.min.css" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"><?php echo '</script'; ?>
>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="polls-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">
                    <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--green-500 mdl-color-text--white">
                        Login
                    </a>
                </a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main class="mdl-layout__content"><?php }
}
?>