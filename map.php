<?php 
    function getDirContents($dir,$locate = null, &$results = array()) {
        $temp=$dir.$locate;
        $files = scandir($temp);
        foreach ($files as $key => $value) {
            $path = realpath($dir . $locate . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                if(strstr($value,'.')==".php" && strcmp($value,'map.php')!=0){
                    $results[] = $locate."/".$value;
                }
            } else if ($value != "." && $value != ".." && $value != ".git" && $value != "img" && $value != "test") {
                getDirContents($dir,$locate."/".$value, $results);
                // $results[] = $value;
            }
        }
    
        return $results;
    }
    $val=getDirContents('D:/xampp/htdocs/igem6/');
    $count=count($val);
    // echo $count."<br>";
    for($i=0;$i<$count;$i++){
        echo $val[$i];
        if($i==$count-1)break;
        echo " ";
    }