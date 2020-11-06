<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Form.css">
    </head>
    <style>
        
       
    </style>
    <title>Home</title>
    <body>
       
        <div>
          
             <table width="100%" height="auto" border="0px">
                  
                 <tr>
                     <td class="menu">
                       <div class="navbar">
                            <a href="home.php">Home</a>
                            <a href="add.php">Add</a>
                            <a href="delete.php">Delete</a>
                            <a href="show.php">Show</a>
                            <a href="generate_home.php">Generate Question Paper</a>
                            <a href="mail.php">Send Mail</a>
                            <li style="float:right"><a class="active" href="logout.php">Logout</a>
                            </li>
                        </div>
                     </td>
                 </tr><br><br><br><br>
                 <tr>
                     <td> 
                         
                         <form action="generate_auth.php" method="POST" id="generate">
                             <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <table class="form1" width="40%" align="center" cellspacing="5px" cellpadding="1px">
                                <tr>
                                    <td align="center">
                                      <input type="submit" name="unit" value="Unit Test">
                                    </td>
                                    <td align="center">
                                      <input type="submit" name="final" value="Final Exam">
                                    </td>
                                </tr>
                                
                            </table>    
                         </form> 
                     </td>
                 </tr>
                 </div>
             </table>
                        
        </div>
    </body>
</html>
