<div class="mdl-card poll">
    <form action="/api/appendToPoll" method="post">
        <input name="pollid" value="{$pollId}" hidden>
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text"><div class="mdl-textfield title mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="theme">
                    <label class="mdl-textfield__label">Titel deiner Frage</label>
                </div></h2>
        </div>
        <div class="mdl-card__supporting-text">
            <div id="answers">
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer1" name="answer1">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 1</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer2" name="answer2">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 2</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer3" name="answer3">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 3</label>
                    </div>
                </div>
                <div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="answer4" name="answer4">
                        <label class="mdl-textfield__label">Antwortmöglichkeit 4</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Frage hinzufügen
            </button>
        </div>
    </form>
</div>
<script type="text/javascript">
    var answers = $("#answers");
    answers.on('keydown', 'input[id*="answer"]', function() {
        var name =  $(this).attr("id");
        var neededName = "answer" + answers.children().length;
        if(name == neededName) {
            var newName = "answer" + (answers.children().length +1);
            var newHtmlName = "Antwortmöglichkeit " + (answers.children().length +1);
            answers.append('<div class="mdl-textfield mdl-js-textfield animate"> <input class="mdl-textfield__input" type="text" id="' + newName + '" name="' + newName + '" > <label class="mdl-textfield__label">' + newHtmlName + '</label> </div>')
            componentHandler.upgradeDom();
        }
    });
</script>