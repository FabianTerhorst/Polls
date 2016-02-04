<?php /* Smarty version 3.1.27, created on 2016-02-03 17:49:26
         compiled from "views/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:197035333656b22f96581f78_36810857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1454518164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197035333656b22f96581f78_36810857',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b22f96604554_74949980',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b22f96604554_74949980')) {
function content_56b22f96604554_74949980 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '197035333656b22f96581f78_36810857';
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
    <!--<?php echo '<script'; ?>
 src="/js/material.min.js"><?php echo '</script'; ?>
>-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.amber-light_green.min.css">
    <?php echo '<script'; ?>
 defer src="https://code.getmdl.io/1.1.1/material.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"><?php echo '</script'; ?>
>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" href="/css/material.amber-light_green.min.css">-->
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
                    <?php if ($_smarty_tpl->tpl_vars['user']->value == '') {?>
                    <button id="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber-500">
                        Registrieren
                    </button>
                    <button id="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Anmelden
                    </button>
                    <dialog id="login-dialog" class="mdl-dialog">
                        <h4 class="mdl-dialog__title">Anmelden</h4>
                        <form action="/api/login" method="post">
                            <div class="mdl-dialog__content">
                                    <div class="mdl-textfield mdl-js-textfield width--full">
                                        <input class="mdl-textfield__input" type="text" name="user" id="username">
                                        <label class="mdl-textfield__label" for="username">Benutzername</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield width--full">
                                        <input class="mdl-textfield__input" type="password" name="passwd" id="password">
                                        <label class="mdl-textfield__label" for="password">Passwort</label>
                                    </div>
                            </div>
                            <div class="mdl-dialog__actions">
                                <button type="submit" class="mdl-button mdl-color-text--blue">Anmelden</button>
                                <button type="button" class="mdl-button mdl-color-text--grey close">Abbrechen</button>
                            </div>
                        </form>
                    </dialog>
                    <dialog id="register-dialog" class="mdl-dialog">
                        <h4 class="mdl-dialog__title">Registrieren</h4>
                        <form action="/api/register" method="post">
                            <div class="mdl-dialog__content">
                                <div class="mdl-textfield mdl-js-textfield width--full">
                                    <input class="mdl-textfield__input" type="text" name="user" id="username">
                                    <label class="mdl-textfield__label" for="username">Benutzername</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield width--full">
                                    <input class="mdl-textfield__input" type="password" name="passwd" id="password">
                                    <label class="mdl-textfield__label" for="password">Passwort</label>
                                </div>
                            </div>
                            <div class="mdl-dialog__actions">
                                <button type="submit" class="mdl-button mdl-color-text--green-500">Registrieren</button>
                                <button type="button" class="mdl-button mdl-color-text--grey close">Abbrechen</button>
                            </div>
                        </form>
                    </dialog>
                    <?php echo '<script'; ?>
>
                        var loginDialog = document.getElementById('login-dialog');
                        var showDialogButton = document.getElementById('login');
                        if (! loginDialog.showModal) {
                            dialogPolyfill.registerDialog(loginDialog);
                        }
                        showDialogButton.addEventListener('click', function() {
                            loginDialog.showModal();
                        });
                        loginDialog.querySelector('.close').addEventListener('click', function() {
                            loginDialog.close();
                        });

                        var registerDialog = document.getElementById('register-dialog');
                        var showRegisterDialogButton = document.getElementById('register');
                        if (! loginDialog.showModal) {
                            dialogPolyfill.registerDialog(registerDialog);
                        }
                        showRegisterDialogButton.addEventListener('click', function() {
                            registerDialog.showModal();
                        });
                        registerDialog.querySelector('.close').addEventListener('click', function() {
                            registerDialog.close();
                        });
                    <?php echo '</script'; ?>
>
                    <?php }?>
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