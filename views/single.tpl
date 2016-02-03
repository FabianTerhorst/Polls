{include file="header.tpl"}
<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
<button id="add-answer" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    <i class="material-icons">add</i>
</button>
<dialog id="add-answer-dialog" class="mdl-dialog">
    <h4 class="mdl-dialog__title">Frage hinzufügen</h4>
    <div class="mdl-dialog__content">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
    <div class="mdl-dialog__actions">
        <button type="button" class="mdl-button close">Abbrechen</button>
    </div>
</dialog>
<script type="text/javascript">
    $id = "{$pollId}";
    function selectPoll() {
        $.ajax({
            url: "/api/selectPoll",
            type: 'POST',
            data: {
                'id': '{$pollId}'
            },
            success: function(msg){
                $(".content").html(msg);
                $(".poll").on("click", ".answer", function() {
                    $.ajax({
                        url: "/api/vote",
                        type: 'POST',
                        data: {
                            'pollid': $(this).attr("pollid"),
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
            }
        });
    }

    selectPoll();

    var dialog = document.querySelector('#add-answer-dialog');
    var showDialogButton = document.querySelector('#add-answer');
    if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
        $.ajax({
            url: "/api/createPollUI",
            type: 'POST',
            data: {
                'pollid': '{$pollId}'
            },
            success: function(msg){
                $("#add-answer-dialog > .mdl-dialog__content").html(msg);
                componentHandler.upgradeDom();
            }
        });
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
    });
</script>
{include file="footer.tpl"}