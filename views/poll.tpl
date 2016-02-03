<div class="mdl-card poll mdl-shadow--2dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">
            {$poll->theme}
        </h2>
    </div>
    <div class="mdl-card__supporting-text">
        {foreach $poll->answers as $answer}
            <div class="answer mdl-shadow--2dp {if $answer->votes == 0 && $poll->votes > 0}mdl-color--grey-500{/if}" answerid="{$answer->id}" pollid="{$poll->id}">
                <div id="answer{$answer->id}" class="content" {if $poll->votes > 0 && $answer->votes > 0}style="width:{math equation="100 / pollVotes * answerVotes" pollVotes=$poll->votes answerVotes=$answer->votes}%"{/if}><div class="nameContent"><div class="name">{$answer->name}</div></div></div>
            </div>
        {/foreach}
    </div>
</div>

{foreach $poll->childs as $child}
    <div class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">
                {$child->theme}
            </h2>
        </div>
        <div class="mdl-card__supporting-text">
            {foreach $child->answers as $answer}
                <div class="answer mdl-shadow--2dp {if $answer->votes == 0 && $child->votes > 0}mdl-color--grey-500{/if}" answerid="{$answer->id}" pollid="{$child->id}">
                    <div id="answer{$answer->id}" class="content" {if $child->votes > 0 && $answer->votes > 0}style="width:{math equation="100 / pollVotes * answerVotes" pollVotes=$child->votes answerVotes=$answer->votes}%"{/if}><div class="nameContent"><div class="name">{$answer->name}</div></div></div>
                </div>
            {/foreach}
        </div>
    </div>
{/foreach}