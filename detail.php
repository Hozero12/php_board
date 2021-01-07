<h2>글 상세 보기</h2>
<? 
    include "mysqlConnect.php";

    $id= $_GET['id'];
    $id = mysqli_real_escape_string($connect, $id);
    $sql = "select * from php_board where id='$id'" ;
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>
    제목 : 
    <?=$row['title'] ?><br><br>
    작성자 : 
    <?=$row['name'] ?><br><br>
    내용 : 
    <?=$row['content'] ?><br><br><br>

    <button type="button" onclick="location.href='list.php'">글 목록</button>
    <button type="button" onclick="location.href='updatePost.php?id=<?=$id?>' ">수정</button>
    <button type="button" onclick="location.href='delete.php?id=<?=$id?>' ">삭제</button>