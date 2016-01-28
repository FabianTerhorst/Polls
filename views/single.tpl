{include file="header.tpl"}
<div class="content">
    <div id="poll" class="mdl-card poll mdl-shadow--2dp">
        <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
    </div>
</div>
<script type="application/javascript">
    $id = "{$pollId}";
    $.ajax({
        url: "/api/selectPoll",
        type: 'POST',
        data: {
            'id': '{$pollId}'
        },
        success: function(msg){
            console.log(msg);
            $("#poll").html(msg);
        }
    });

    var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight
    });
    document.body.appendChild(pattern.canvas())
</script>
</main>
</div>
</body>
</html>