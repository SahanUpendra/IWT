<?php
    session_start();
    include "config.php";
?>
<?php
    $tusername=$_POST['tuname'];
    $tpassword=$_POST['tpwd'];

    $sql="SELECT * FROM trainer WHERE username='$tusername' AND password='$tpassword'";
    $login=mysqli_query($conn,$sql);

    if(mysqli_num_rows($login)==1)
    {
        $row=mysqli_fetch_assoc($login);
        if($row['username']==$tusername&& $row['password']==$tpassword)
        {
            echo"logged in";
            $_SESSION['username']=$row['username'];
            $_SESSION['Name']=$row['tname'];
            $_SESSION['Id']=$row['tid'];
            header("location:.././Trainer01.html");
            exit();
        }
    }
?>