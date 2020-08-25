<html>
    <head>
        <title>Basic Datetime Example</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            // list cac vung
            $timezone = DateTimeZone :: listIdentifiers();
            foreach($timezone as $key => $value)
            {
                echo $value." "."<br>";
            }
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "Today is " . date("Y.M.D") . "<br>";
            echo "Today is " . date("Y-m-d") . "<br>";
            echo "Today is " . date("l") ."<br>";
            echo "The time is " .date("H:i:s") ."<br>";

            //loacltime
            print_r(localtime());
            echo "<br><br>";
            print_r(localtime(),true);
            // microtime
            echo"<br>";
            print_r(microtime());
            echo"<br>";

            // ham lay thoi gian ngay thang
            function get_day()
            {
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $day = date("l");
                $day = strtolower($day);
                switch($day){
                    case 'monday':
                        $day ="Thứ Hai";
                    break;
                    case 'tuesday':
                        $day="Thứ Ba";
                    break;
                    case 'wednesday':
                        $day="Thứ Tư";
                    break;
                    case 'thursday':
                        $day="Thứ Năm";
                    break;
                    case 'friday':
                        $day="Thứ Sáu";
                    break;
                    case 'saturday':
                        $day = "Thứ Bảy";
                    break;
                    default :
                        $day="Chủ nhật";
                    break;
                }
                return $day.','.date('d/m/Y H:i:s');
            }
            echo get_day()."<br>";

            //date_format
            $ngay = date_create("20-10-1999");
            echo date_format($ngay,"j/F/Y H:i:s");
            //timestamp
            echo "<br>";
            $timestamp = mktime(20,10,45,30,8,2020);
            echo date_format($timestamp,"j/F/Y");
        ?>
    </body>
</html>