<html>
    <head>
        <title>Function in String</title>
    </head>
    <body>
    <!-- in chuoi-->
        <?php 
            echo "hello";
        ?>
    <br>
    <!-- lay chieu dai chuoi -->
        <?php 
            $length = strlen("ShineTheme  ");
            echo "chieu dai chuoi la : $length";
            // xem kieu du lieu
            var_dump($length);
        ?>
    <br>
    <!-- so ky tu cua chuoi -->
        <?php 
            $count = str_word_count("a a b b c c c c d d d d");
            echo " so phan tu cua chuoi : $count";
        ?>
    <br>
    <!-- dao chuoi -->
        <?php 
            $first = "Hello";
            echo strrev($first);
        ?>
    <br>
    <!-- tim vi tri bat dau cua 1 ky tu -->echo
        <?php 
            $string = "What's your name ?";
            echo "chuoi la : $string";
            echo "<br>";
            $i = strpos($string,"y");
            echo "Vi tri : $i";
        ?>
    <br>
    <!-- doi vi tri trong chuoi -->
        <?php 
            echo "Hello world";
            echo "<br>";
            echo str_replace("H","G","Hello world");
        ?>
    <br>
    <!-- so sanh chuoi  -->
        <?php 
        // neu gtri = 0 thi 2 chuoi bang nhau
        // neu gtri > 0 thi chuoi 1 lon hon chuoi 2
        // newu gtri < 0 thi chuoi 1 nho hon chuoi 2
            $gtri = strcmp("ABC","abc");
            echo($gtri);
           // var_dump($gtri);
        ?>
    <br>
        <?php 
            // cat chuoi
            echo substr("ABCDEFGHIJK",2);
            echo "<br>";
            $split = array( str_split("Helo Myfriend",1));
            var_dump($split);
        ?>
    </body>
</html>