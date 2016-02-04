<html>
<head>
    <title>Umfragen</title>
    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="/js/prefixfree.min.js"></script>
    <!--<script src="/js/material.min.js"></script>-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.amber-light_green.min.css">
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
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
                    {if $user == ""}
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
                        <script>
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
                        </script>
                    {/if}
                </a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Umfragen</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="https://github.com/fabianterhorst/Polls"><i class="material-icons">code</i> Github</a>
        </nav>
    </div>
    <main class="mdl-layout__content">