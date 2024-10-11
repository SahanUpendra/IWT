<?php
    session_start()
?>
<?php
    include "./php/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trainer Account(Manage Modules)</title>

        <link rel="stylesheet" href="styles/trainer02.css">
    </head>
    <body>
        
    <header>
        <div id="topnav">
            <nav>
                <ul>
                    <li><a href="..\src\Homepage.html">HOME</a></li>
                    <li><a href="..\src\Programs.html">PROGRAMS</a></li>
                    <li><a href="..\src\News And Events.html">NEWS &amp; EVENTS</a></li>
                    <li><a href="..\src\Careers.html">CAREERS</a></li>
                    <li><a href="..\src\About us.html">ABOUT US</a></li>
                    <li><a href="..\src\Contact Us.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>    
        <hr id="hr_1">

        <div id="main_container">

            <div id="part_01">
                <img src="images/istockphoto-522855255-612x612.jpg" alt="profile picture " id="profile_pic" >
            </div>
            <div id="part_02">
                <h1 id="Trainer_user_name"> TRAINER USER NAME</h1>
                <h4 id="id_number">ABC0054</h4>
                <button id="edit_details">edit details</button>
            </div>
            <div id="part_03">
                <button id="login_out"><a href="./php/logOut.php"> log out</a></button><br>
             
            </div>
           
            
         </div> 
         <hr id="hr_1">
         
         <div id="middle_nav">
            <button id="middle_nav_button"><a href="Trainer01.html">Home</a></button>
            <button id="middle_nav_button"><a href="#">Manage Module</a></button>
            <button id="middle_nav_button"><a href="Trainer03.html">Moderate comments</a></button>
         </div>

         <div id="second_container">
            <div id="add_module_title">
                <h3>Add New Module</h3>
            </div>
            <div >
                
                <form method="post" action="php/submitModule.php">
                    <div id="add_module_details">
                    <div id="module_details01">
                        <div id="add_module_details_01">
                            <label for="M_ID">MODULE  ID:</label><br>
                            <input type="text" id="M_ID" name="M_ID"><br>
                            <label for="M_NAME">MODULE  NAME:</label><br>
                            <input type="M_NAME" id="M_NAME" name="M_NAME">
                        </div>
                        <div id="add_module_details_02">
                            <label for="M_SUBJECT">MODULE  SUBJECT:</label><br>
                            <input type="text" id="M_SUBJECT" name="M_SUBJECT"><br>
                            <label for="M_TITLE">MODULE  TITLE:</label><br>
                            <input type="text" id="M_TITLE" name="M_TITLE"> 
                            </div>
                    </div>
                    <div id="module_details02">
                            <label for="M_DESCRIPTION">MODULE  DESCRIPTION :</label><br>
                            <input type="text" id="M_DESCRIPTION" name="M_DESCRIPTION"><br>
                    </div>
                        
                    </div>
                    <div id="add_module_video">
                        <div id="video_button">
                           <input type="submit" id="v_button" value="submit">
                            <input type="reset" id="v_button" value="reset">
                            
                         </div>
                    </div>
                    </form> 
                </div>

            <div id="edit_module_title">
                <h3>Edit / Remove Module</h3>
            </div>

            <div id="edit_module_container">
                <?php
                $sql ='SELECT * FROM module';
                $result=$conn->query($sql);

                if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                 echo "<div id='video_1'>
                    <div id='video_1_v'></div>
                    <div id='video_1_t'>
                        Module id:".$row['Module_id']."<br>
                        Subject:".$row['Module_subject']."<br>
                        Name:".$row['Module_name']."<br>
                        Title:".$row['Module_title']."<br>"
                        .$row['Module_discription']."<br>
                    </div>";
                    echo
                    "<br>
                    <a href='./php/editmodule.php? mid=$row[Module_id]&msubject=$row[Module_subject]&mname=$row[Module_name]&mtitle=$row[Module_title]&mdisc=$row[Module_discription]'><input type='submit' id='v_button' value='Update'></a> 
                    <a href='./php/deleteModule.php? mid=$row[Module_id]'><input type='reset' id='v_button' value='Delete'></a>
                    </div>";
                }
            }else{
                echo"No Added Modules";
            }
            mysqli_close($conn);
            ?>
         </div> 
         <div id="footer">
            <h4>copyrigth details</h4>
        </div>

        </body>
</html>