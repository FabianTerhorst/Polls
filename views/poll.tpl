<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">
        {$poll->theme}
    </h2>
</div>
<div class="mdl-card__supporting-text">
    {foreach $poll->answers as $answer}
        <div class="answer mdl-shadow--2dp">
            <p>{$answer->name}</p>
        </div>
    {/foreach}
</div>