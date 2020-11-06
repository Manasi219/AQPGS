<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="Form.css">
    </head>
    <title>Home</title>
    <body>
       
 <div>
          
             <table width="100%" height="60%" border="0px">
                  
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
                         
                         <form action="mail_auth.php" method="POST" id="mail">
                            <table class="form1" bgcolor="white" width="30%" align="center" cellspacing="5px" cellpadding="1px">
                             
                                <tr>
                                     <th colspan="6"><h1 style="color:deepskyblue">Send Mail</h1><hr></th>
                                </tr>
                                    <tr>
                                     <th><label>Name: </label></th>
                                     <td><input type="text" name="name" id="name">
                                    </tr>
                                    <tr>
                                     <th><label>File: </label></th>
                                     <td><input type="file" name="file" id="file">
                                    </tr>
                                        <tr>
                                                <td>
                                                <td colspan="2" align="right"><input type="submit" name="mail" value="Send a E-mail">
                                                </td>
                                        </tr>
				       </form>
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

					 