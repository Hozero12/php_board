<?
    include "mysqlConnect.php";

    $id= $_GET['id'];
    $id = mysqli_real_escape_string($connect, $id);
    $sql = "select * from php_board where id='$id'" ;
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

?>
     <h2>비밀번호 입력</h2>
	<form action="" method="post">
 		<p>
            비밀번호  
            <input type="password" name="pw_chk" /><br><br> 
            <input type="submit" value="확인" />
        </p>
 	</form>

	<?
	 	$bpw = $row['pwd'];

	 	if(isset($_POST['pw_chk']))
	 	{
	 		$pwk = $_POST['pw_chk'];
			if(password_verify($pwk,$bpw)){ 
	?>
				<script type="text/javascript">location.replace("detail.php?id=<?php echo $row["id"]; ?>");</script>>
			
            <?}else{ ?>
				<script type="text/javascript">alert('비밀번호가 다릅니다.');</script>
            <? } } ?>
    