<?php
    include "config.php";
?>
<?php
    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Fname=$_POST['fname'];
    $Dob=$_POST['dob'];
    $Gender= filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_STRING);;
    $Address=$_POST['add'];
    $Nic=$_POST['nic'];
    $Type=$_POST['teacher'];
    $Sname=$_POST['school'];
    $S_add=$_POST['saddress'];
    $Registerno=$_POST['regno'];
    $Email=$_POST['email'];
    $Contact=$_POST['contact'];

    $sql="INSERT INTO registration(User_id,First_name,Last_name,Full_name,
    DOB,Gender,Addr,NIC,Type_of,S_name,S_add,Reg_no,
    Email,Contactno)
    VALUES('','$Fname','$Lname','$Fname','$Dob','$Gender','$Address','$Nic','$Type','$Sname','$S_add','$Registerno','$Email','$Contact')";

    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Information saved!')</script>";
        header("location:.././Homepage.html");
    }
    else
    {
        echo"<script>alert('Information save falled!')</script>";
    }
    mysqli_close($conn);
?>