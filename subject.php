<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Form.css">
    </head>
    <title>subject_assign</title>
    <body>
        <div>
             
             <table width="100%" height="80%" border="0px">
                 <tr>
                     <td class="menu">
                        <div class="navbar">
                            <a href="admin_home.php">Home</a>
                            <a href="teacher.php">Teacher</a>
                            <a href="subject.php">Subject</a>
                            <li style="float:right"><a class="active" href="logout.php">Logout</a>
                            </li>
                        </div>
                     </td>
                 </tr>
                  <tr>
                     <td> 
                         
                         <form action="subject_auth.php" method="POST" id="subject">
                             <table class="form1" bgcolor="white" width=30% align="center" cellspacing="8px" cellpadding="2px">
                                 <tr>
                                     <th colspan="2"><h1 style="color:deepskyblue">Manage Subjects</h1><hr></th>
                                </tr>
                                 <tr>
                                     <th><label>Teacher Name: </label></th>
                                     <td><input type="text" name="tname"></td>
                                 </tr>
                                 <tr>
                                     <th><label>Course: </label></th>
                                     <td> <input type="text" name="subject"> </td>
                                 </tr>
                                 <tr>
                                     <th><label>Course Code: </label></th>
                                     <td> <input type="text" name="code"> </td>
                                 </tr>
                                 <tr>
                                     <td colspan="2" align="left"><input type="submit" name="remove" value="Remove"><input type="submit" name="add" value="Add" style="margin-left: 40%"></td>
                                 </tr>
                         </form> 
                     </td>
                 </tr>
             </table>
        </div>
    </body>
</html>