<h2>글 수정 </h2></h2>
<? 
    include "mysqlConnect.php";

    $id= $_GET['id'];
    $id = mysqli_real_escape_string($connect, $id);
    $sql = "select * from php_board where id='$id'" ;
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>

<form action="update.php?id=<?=$row['id']?>" method="post">
    제목 
    <input type="text" name="title" cols=20 value="<?=$row['title'] ?>">
    작성자
    <input type="text" name="name" cols=10 value="<?=$row['name'] ?>"><br>
    내용 <br>
    <textarea name="content" cols=100 rows=20><?=$row['content'] ?> </textarea><br><br>
    <input type="submit" value="수정">
</form>
