<?php 
    
    function getDirContents($dir,$locate = null, &$results = array()) {
        $temp=$dir.$locate;
        $files = scandir($temp);
        foreach ($files as $key => $value) {
            $path = realpath($dir . $locate . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                if($value=="phaser.min.js" || $value=="jquery-3.6.0.min.js" || strstr($value,'.')==".jpg" || strstr($value,'.')==".png" || strstr($value,'.')==".js" || strstr($value,'.')==".css" || (strstr($value,'.')==".php" && strcmp($value,'map.php')!=0)){
                    echo $locate."/".$value."\n";
                }
            } else if ($value !="sub" && $value !="iot" && $value !="." && $value !=".." && $value !="testSrRb" && $value !="testijh") {
                getDirContents($dir,$locate."/".$value, $results);
                // $results[] = $value;
            }
        }
    
        // return $results;
    }
    $val=getDirContents('D:/xampp/htdocs/igem6/');
    // $count=count($val);
    // echo $count."<br>";
    // for($i=0;$i<$count;$i++){
    //     echo $val[$i];
    //     if($i==$count-1)break;
    //     echo " ";
    // }