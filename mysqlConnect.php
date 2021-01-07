<?php

    $connect = mysqli_connect("localhost","hoyoung","dt1210","board");
    

    if(mysqli_connect_error()){
        echo "mysql 접속 실패";
        echo mysqli_connect_error();
    }
?>