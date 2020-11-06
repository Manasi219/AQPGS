<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Form.css">
        <title>Home</title>
        <style>
            button[type=button]{
                background-color: coral;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: 2px #333 groove;
                cursor: pointer;
                border-radius: 5px;
            }
            .form1{
                border: 3px;
                position: relative;
            }
            
            .sub{
                border-collapse: collapse;
                text-align: center;
                background-color: #8cebf2;
            }
            .navbar {
                top: 2%;
              }
        </style>
    </head>
    <body>
        <div>
<!--             <h1 class="heading">Automatic Question Paper Generator</h1>-->
             <table width="100%" height="80%" border="0px" >
                 <tr>
                     <td class="menu">
                       <div class="navbar">
                            <li style="float:right"><a class="active" href="logout.php">Logout</a>
                            </li>
                        </div>
                     </td>
                 </tr>
                 <tr>
                    <td>
                       <form action="h_auth.php" method="POST" id="home" >
                             <div align="center">
                               <table class="form1" bgcolor="white" height="35%" align="top" cellspacing="5px" cellpadding="10px">
                                    <tr>
                                        <td><label>Course</label></td>
                                        <td>
                                            <input type="text" name="course">
                                        </td> 
                                    
                                        <td><label>Course ID</label></td>
                                        <td>
                                            <input type="text" name="course_id">
                                        </td>   
                                    </tr>
                                    <tr>
                                        <td height="91" colspan="4" align="center"><input type="submit" name="assign" value="Go"></td>
                                    </tr>
                                </table>
                                 <br></br>
                                <?php
                                    include 'config1.php';
                                    $user = $_SESSION['username'];
                                    $sql = mysql_query("SELECT * FROM $user");
                                    while($row = mysql_fetch_assoc($sql)){
                                    ?>
                                    <table class="sub" border="2px" width="30%" height="auto" cellpadding="5px" align="center">
                                        <tr>
                                            <td width="50%"><?php echo $row['course']; ?></td>
                                            <td width="50%"><?php echo $row['course_id']; ?></td>
                                        </tr>
                                    </table>
                                    <?php
                                    }
                                ?>
                                </table>
                             </div>
                        </form> 
                    </td>
                 </tr>
             </table>
        </div>
    </body>
</html>


