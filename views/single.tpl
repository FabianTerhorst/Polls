{include file="header.tpl"}
    <div id="poll">

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
</script>
</main>
</div>
</body>
</html>