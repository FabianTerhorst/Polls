<html>
<head>
    <title>Bla</title>
    <script src="/js/jquery-2.2.0.min.js"></script>
</head>
<body>
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
</body>
</html>