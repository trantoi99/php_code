<html>
    <head>
        <title>Intro</title>
        <script>
            function showHint(str){
                if(str.lenth==0){
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                else{
                    var xmlhttp = new XMLHttpRequest();
                    //	Một Event Handler lắng nghe và xử lý một sự kiện khi có thay đổi về trạng thái nào diễn ra.
                    xmlhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.function == 200){
                            document.getElementById("txtHint").innerHTML=this.responseText; 
                        }
                    };
                    xmlhttp.open("GET", "gethint.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <p><b>Start typing a name in the input field below:</b></p>
        <form action="">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>
    </body>
</html>