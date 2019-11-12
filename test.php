<?php  

include_once('class/poll.php');
        $poll = new poll();
        $test = $poll->test();
        
        $json_array = array();
        while($test1 = mysqli_fetch_assoc($test)){
            $json_array[] = $test1;
        }
       // echo print_r($json_array);
        echo json_encode($json_array);

?>