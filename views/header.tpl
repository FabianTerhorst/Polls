<html>
<head>
    <title>Bla</title>
    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="/js/prefixfree.min.js"></script>
    <script src="/js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/material.amber-light_green.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="polls-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Title</span>
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link">
                    <button id="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Login
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
                    <script>
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
                    </script>
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
    <main class="mdl-layout__content">