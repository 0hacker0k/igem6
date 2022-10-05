<?php 
    
    function getDirContents($dir,$locate = null, &$results = array()) {
        $temp=$dir.$locate;
        $files = scandir($temp);
        foreach ($files as $key => $value) {
            $path = realpath($dir . $locate . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                if(strrchr($value,'.')==".jpg" || strrchr($value,'.')==".png" || strrchr($value,'.')==".ico" || strrchr($value,'.')==".ttf" || strrchr($value,'.')==".js" || strrchr($value,'.')==".css" || strrchr($value,'.')==".map" || (strrchr($value,'.')==".php" && strcmp($value,'map.php')!=0)){
                    echo $locate."/".$value."\n";
                }
            } else if ($value !="sub" && $value !="iot" && $value !="." && $value !=".." && $value !="testSrRb" && $value !="testijh") {
                getDirContents($dir,$locate."/".$value, $results);
                // $results[] = $value;
            }
        }
    
        // return $results;
    }
    // $val=getDirContents('D:/xampp/htdocs/igem6/');
    $val=getDirContents('D:/application/htdocs/igem6');
    // $count=count($val);
    // echo $count."<br>";
    // for($i=0;$i<$count;$i++){
    //     echo $val[$i];
    //     if($i==$count-1)break;
    //     echo " ";
    // }