<meta charset="UTF-8">
<?php
	
		$username = $_POST['username'];
        $password = $_POST['password'];
		$repassword = $_POST['repassword'];
        $tel = $_POST['tel'];
         
        if ($username == ''){
            echo '<script>alert("请输入用户名！");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("请输入密码");history.go(-1);</script>';
            exit(0);
        }
        if ($password != $repassword){
            echo '<script>alert("两次密码必须一致");history.go(-1);</script>';
            exit(0);
        }
        if(preg_match("/^1[34578]\d{9}$/", $tel)){
            $conn = new mysqli('localhost','root','root','testdemo');
            if ($conn->connect_error){
                echo '数据库连接失败！';
                exit(0);
            }else {
                $sql = "select username from user where username = '$_POST[username]'";
                $result = $conn->query($sql);
                $number = mysqli_num_rows($result);
                if ($number) {
                    echo '<script>alert("用户名已经存在");history.go(-1);</script>';
                } else {
                    $sql_insert = "insert into user (username,password,tel) values('$_POST[username]','$_POST[password]','$_POST[tel]')";
                    $res_insert = $conn->query($sql_insert);
                    if ($res_insert) {
                        echo "<script>window.location.href='./login.html'</script>";
                    } else {
                        echo "<script>alert('系统繁忙，请稍候！');</script>";
                    }
                }
            }
        }else{
            echo "<script>alert('提交未成功！请正确填写手机号');history.go(-1);</script>";
        }
//echo'eeee';



?>
