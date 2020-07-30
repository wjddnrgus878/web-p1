<?php
    $mysql = mysqli_connect("localhost","root","123123","user");
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $check = "SELECT * from member WHERE id = '$id'";
    $result2 = $mysql->query($check);

    if($result2->num_rows > 0)
    {
        echo "<script>alert('id 중복');</script>";
        echo nl2br("\n");
        echo "<a href=register.html> 이전 페이지 </a>";
    }
    else
    {
        $query = "insert into member (id, pw) values ('$id', '$pw')";
        $signup=mysqli_query($mysql,"INSERT INTO member (id,pw) VALUES ('$id','$pw')");
        if($signup){
            echo "<script>alert('가입 성공');</script>";
            echo nl2br("\n");
            echo "<a href=index.html> 로그인 페이지 </a>";
        }
    }
?>