<html>
    <head>
        <title>
            Something in Regular Exprssion
        </title>
    </head>
    <body>
        <?php 
        // kiem tra xem chuoi chua abc ko
        // ham preg_match
            $pattern = "/abc/";
            $subject ='aaaaaaaaaaaaaaaaaaacb';
            if(preg_match($pattern,$subject,$kq))
            {
                echo "co chuoi abc";
            }
            else{
                echo "ko ton tai abc";
            }
            var_dump($kq);
        // ham preg_replace
        // doi vi tri
            $pattern = '/([0-9]{0,2})-([0-9]{2})-([0-9]{4})-(.+)/';
            $replacement = '$4 ngày $1/$2/$3';
            $subject = '23-07-2017-Thứ bảy';
            echo preg_replace($pattern, $replacement, $subject);
        // ham preg_qoute
        // them cac ky tu "\" vai trc cac ky tu dac biet trong chuoi
            $string = 'Học lập trình (online ^-^) Toidicode.com';
            $result = preg_quote($string);
            echo $result;
        ?>
    </body>
</html>