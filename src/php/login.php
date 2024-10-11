<?php
    session_start();
    include "config.php";
?>
<?php
    $username=$_POST['uname'];
    $password=$_POST['pwd'];

    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $login=mysqli_query($conn,$sql);

    if(mysqli_num_rows($login)==1)
    {
        $row=mysqli_fetch_assoc($login);
        if($row['username']==$username&& $row['password']==$password)
        {
            echo"logged in";
            $_SESSION['username']=$row['username'];
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Id']=$row['id'];
            header("location:.././User account.html");
            exit();
        }
    }
    
?>