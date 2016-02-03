<?php /* Smarty version 3.1.27, created on 2016-02-03 13:14:30
         compiled from "views/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15276058756b1ef2613bd08_20403025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1454501668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15276058756b1ef2613bd08_20403025',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b1ef26173054_32531945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b1ef26173054_32531945')) {
function content_56b1ef26173054_32531945 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15276058756b1ef2613bd08_20403025';
?>
<html>
<head>
    <title>Umfragen</title>
    <?php echo '<script'; ?>
 src="/js/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/prefixfree.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/material.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"><?php echo '</script'; ?>
>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/material.amber-light_green.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="polls-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Umfragen</span>
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link">
                    <button id="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Anmelden
                    </button>
                    <dialog id="login-dialog" class="mdl-dialog">
                        <h4 class="mdl-dialog__title">Allow data collection?</h4>
                        <div class="mdl-dialog__content">
                            <p>
                                Allowing us to collect data will let us get you the information you want faster.
                            <p>
                        </div>
                        <div class="mdl-dialog__actions">
                            <button type="button" class="mdl-button">Agree</button>
                            <button type="button" class="mdl-button close">Disagree</button>
                        </div>
                    </dialog>
                    <?php echo '<script'; ?>
>
                        var dialog = document.querySelector('#login-dialog');
                        var showDialogButton = document.querySelector('#login');
                        if (! dialog.showModal) {
                            dialogPolyfill.registerDialog(dialog);
                        }
                        showDialogButton.addEventListener('click', function() {
                            dialog.showModal();
                        });
                        dialog.querySelector('.close').addEventListener('click', function() {
                            dialog.close();
                        });
                    <?php echo '</script'; ?>
>
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