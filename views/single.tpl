{include file="header.tpl"}
<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
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
                $("#poll").html(msg);
            }
        });
    }

    selectPoll();

    $("#poll").on("click", ".answer", function() {
        $.ajax({
            url: "/api/vote",
            type: 'POST',
            data: {
                'pollid': '{$pollId}',
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
</script>
{include file="footer.tpl"}