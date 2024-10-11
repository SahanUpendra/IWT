<?php
    include "config.php";
?>
<?php

    $deleteModuleID=$_GET['mid'];

    $delete="DELETE FROM module WHERE Module_id = '$deleteModuleID'";

    $data=mysqli_query($conn,$delete);

    if($data)
    {
        header("location:..\.\Trainer02.php");
    }
    else
    {
        echo "Deletion Failed!";
    }
    mysqli_close($conn);
?>