<?php
    include "mysqlConnect.php";
?>

<meta charset="utf-8">
<title>게시판</title>

    <h2>게시판</h2>
    <table width=900>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>내용</th>
            <th>작성일</th>
        </tr>

    <?
        $sql = "select * from php_board order by id desc";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result)){
    ?>
            <tr>
                <td> <?=$row['id'] ?></td>
                <td>
                    <?if(isset($row['pwd'])){?>
                        <a href="ck_detail.php?id=<?=$row['id']?>"> <?=mb_strimwidth($row['title'],'0','10','...')." [비밀글]"?></a> 
                    <?}else{?>
                        <a href="detail.php?id=<?=$row['id']?>"> <?=mb_strimwidth($row['title'],'0','20','...')?>  </a>
                    <?}?>
                        
                </td>
                <td> <?=$row['name'] ?></td>
                <td> <?=mb_strimwidth($row['content'],'0','30','...') ?></td>
                <td> <?=$row['regdate'] ?></td>

            </tr>
    
    
    <?   } 
    ?>

    </table>
    <a href="newPost.php">글 쓰기</a>




