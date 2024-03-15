<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Đăngn nhập</h2>
    <?php
   
        session_start();
        if(isset($_POST['btnsubmit'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            if($user = 'admin' && $password = '123456'){
                $_SESSION['user'] = $user;
                header("location: danhsach.php");
            }
        }
    ?>  
    <form action="" method="post">
        <div>
            <input type="text" name="user" placeholder="user">
        </div>
        <div>
            <input type="password" name="password" placeholder="password">
        </div>
        <input type="submit" name="btnsubmit">
    </form>
</body>
</html>