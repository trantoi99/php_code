<html>
    <head>
        <title>AAAA</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
               // $("#content").load("a.php");
              // $.get("a.php",{a:"name"},function(data){
               //    $("#content").html(data);
               //})
                $("#tinh").click(function(){
                    var txta = $("#a").val();
                    var txtb = $("#b").val();
                    $.post("a.php",{a:txta,b:txtb},function(data){
                        $("#results").html(data);
                    })
                })
            })
        </script>
    </head>

    <body>
        <p>AAAAAAAAAAAAA</p>
        <div id = "content">
            <input type="text" name = "txta" id = "a">
            <br>
            <input type = "text" name = "txtb" id = "b">
            <br>
            <input type="button" value="Gui" id = "tinh">
            <br>
            <h4 id = "results"></h4>
        </div>
    </body>
</html>