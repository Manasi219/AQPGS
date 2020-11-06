<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Form.css">
    </head>
    <title>adminhome</title>
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
                         
                         <form action="teacher_auth.php" method="POST" id="teacher">
                             <table class="form1" bgcolor="white" width=30% align="center" cellspacing="8px" cellpadding="2px">
                                 <tr>
                                     <th colspan="2"><h1 style="color:deepskyblue">Manage Teachers Database</h1><hr></th>
                                </tr>
                                 <tr>
                                     <th><label>Name: </label></th>
                                     <td><input type="text" name="name"></td>
                                 </tr>
                                 <tr>
                                     <th><label>Username: </label></th>
                                     <td> <input type="text" name="username"> </td>
                                 </tr>
                                 <tr>
                                     <th><label>password: </label></th>
                                     <td><input type="password" name="password"></td>
                                 </tr> 
                                 <tr>
                                     <th><label>email: </label></th>
                                     <td><input type="text" name="email"></td>
                                 </tr> 
                                 
                                 <tr>
                                     <td colspan="2" align="left"><input type="submit" name="delete" value="Delete"><input type="submit" name="add" value="Add" style="margin-left: 40%"></td>
                                 </tr>
                         </form> 
                     </td>
                 </tr>
             </table>
        </div>
    </body>
</html>