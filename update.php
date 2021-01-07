<?php
    include "mysqlConnect.php";

    $id = $_GET['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    $id = mysqli_real_escape_string($connect, $id);
    $title = mysqli_real_escape_string($connect, $title);
    $name = mysqli_real_escape_string($connect, $name);
    $content = mysqli_real_escape_string($connect, $content);
    $regdate = date("Y-m-d H:i:s");

    $sql ="update php_board set title='$title', name='$name', content='$content', regdate='$regdate' where id='$id'";
    
  
    mysqli_query($connect, $sql);

?>

<script>
    location.href="list.php";
</script>