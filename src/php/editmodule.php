<?php
    include"config.php";
?>
<?php
    $moduleID=$_GET['mid'];
    $moduleName=$_GET['mname'];
    $moduleSubject=$_GET['msubject'];
    $moduleTitle=$_GET['mtitle'];
    $moduleDisc=$_GET['mdisc'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trainer Account(Manage Modules)</title>

        <link rel="stylesheet" href=".././styles/trainer02.css">
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
        
         <div id="second_container">
            <div id="add_module_title">
                <h3>Update Module</h3>
            </div>
            <div >
                <form name="newmodule" method="get" action=".\updateModule.php">
                    <div id="add_module_details">
                    <div id="module_details01">
                        <div id="add_module_details_01">
                            <label for="M_ID">MODULE  ID:</label><br>
                            <input type="text" value="<?php echo $moduleID ?>" id="M_ID" name="M_ID" readonly><br>
                            <label for="M_NAME">MODULE  NAME:</label><br>
                            <input type="M_NAME" value="<?php echo $moduleName ?>"id="M_NAME" name="newM_NAME">
                        </div>
                        <div id="add_module_details_02">
                            <label for="M_SUBJECT">MODULE  SUBJECT:</label><br>
                            <input type="text" value="<?php echo $moduleSubject?>" id="M_SUBJECT" name="newM_SUBJECT"><br>
                            <label for="M_TITLE">MODULE  TITLE:</label><br>
                            <input type="text" value="<?php echo $moduleTitle?>" id="M_TITLE" name="newM_TITLE"> 
                            </div>
                    </div>
                    <div id="module_details02">
                            <label for="M_DESCRIPTION">MODULE  DESCRIPTION :</label><br>
                            <input type="text" value="<?php echo $moduleDisc?>" id="M_DESCRIPTION" name="newM_DESCRIPTION"><br>
                    </div>
                        
                    </div>
                    <div id="add_module_video">
                        <div id="video_button">
                        <input type="submit" name="submit" id="v_button" value="Update">
                        <a href="..\.\Trainer02.php"> <input type="button" id="v_button" value="Cancel"></a>
                            
                         </div>
                    </div>
                    </form> 
                </div>
         </div> 
        </body>
</html>