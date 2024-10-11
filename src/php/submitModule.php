<?php
    include "config.php";
?>
<?php
    $moduleID=$_POST['M_ID'];
    $moduleName=$_POST['M_NAME'];
    $moduleSubject=$_POST['M_SUBJECT'];
    $moduleTitle=$_POST['M_TITLE'];
    $moduleDisc=$_POST['M_DESCRIPTION'];

    
    $sql="INSERT INTO module(Module_id,Module_subject,Module_name,Module_title,Module_discription)
    VALUES('$moduleID','$moduleName','$moduleSubject','$moduleTitle','$moduleDisc')";

    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Information saved!')</script>";
        header("location:..\.\Trainer02.php");
    }
    else
    {
        echo"<script>alert('Information save falled!')</script>";
    }
    mysqli_close($conn);
?>