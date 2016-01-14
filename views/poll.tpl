<p>{$poll->theme}</p>
{foreach $poll->answers as $answer}
<p>{$answer->name}</p>
{/foreach}