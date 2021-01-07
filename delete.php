<?php
    include "mysqlConnect.php";
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($connect, $id);

    $sql = "delete from php_board where id='$id' ";
    mysqli_query($connect, $sql);

?>
<script>
    location.href="list.php";
</script>