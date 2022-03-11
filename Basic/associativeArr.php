<?php
    $course = array('java'=>'12000',"C++"=>'10000','PHP'=>'12000');
    echo $course['java'];
    echo'<pre>';
    print_r($course);
    //asort($course); //sort asending order array values according to value
    //ksort($course); //sort asending order array values according to key 
    //arsort($course); //sort Desending order array values according to value
    //krsort($course); //sort Desending order array values according to key 

    foreach($course as $key=>$value){
        echo "key is <b>".$key.' </b>and value is: '.$value.'<br>';
    }
?>