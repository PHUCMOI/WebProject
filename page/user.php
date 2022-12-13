<?php
    function checkUser($UserName, $Gmail, $Pass){
        include "./connect.php";
        $str = ("select * from khang where UserName ='$UserName' and Pass ='$Pass' and Gmail = '$Gmail'");
        // echo "<script type='text/javascript'>alert('$UserName');</script>";
        $result = $connect->query($str);
        if($result->num_rows>0)
        {
            header('location: index.php');
            $_SESSION['loggedin'] = true;
            $_SESSION['UserName'] = $UserName;
        }
        else{
            $_SESSION['loggedin'] = false;
            echo "<script type='text/javascript'>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
        }
        $connect->close();
    }
?>