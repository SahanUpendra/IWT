<?php
    include"config.php";
?>
<?php
    if($_GET["submit"])
    {
        $newmoduleID=$_GET['M_ID'];
        $newmoduleName=$_GET['newM_NAME'];
        $newmoduleSubject=$_GET['newM_SUBJECT'];
        $newmoduleTitle=$_GET['newM_TITLE'];
        $newmoduleDisc=$_GET['newM_DESCRIPTION'];

        $sql="UPDATE module SET Module_subject='$newmoduleSubject',
            Module_name='$newmoduleName',
            Module_title='$newmoduleTitle',
            Module_discription='$newmoduleDisc'
            WHERE Module_id='$newmoduleID'";

        $update=mysqli_query($conn,$sql);

        if($update)
        {
            echo"Update is done!";
            header("location:..\.\Trainer02.php");
        }
        else
        {
            echo"Update failed!";
        }
    }
    mysqli_close($conn);
?>