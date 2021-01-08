<h2>새 글 작성</h2>

<script>

    function a_check(){
        if(document.form.lock.checked==true){
            document.form.pw.disabled = false;
        }
        else if(document.form.lock.checked==false){
            document.form.pw.disabled = true;
        }
    }
</script>


<form action="post.php" method="post" name="form">
    제목 
    <input type="text" name="title" cols=20 required>
    작성자
    <input type="text" name="name" cols=10 required><br>
    내용<br>
    <textarea name="content" cols=100 rows=20 required></textarea><br>
    비밀글
    <input type="checkbox" name="lock" value="1"  onclick='a_check()'><br>
    비밀번호
    <input type="password" name="pw" disabled ><br><br>

    <input type="submit" value="작성">
</form>
