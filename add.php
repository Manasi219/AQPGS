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
        
        select,textarea{
            width: 100%;
            padding: 14px 10px;
            margin: 12px 0px;
            display: inline-block;
            border: none;
            background-color:aliceblue;
            overflow: auto;
        }
        label{
            color: #8c8b8b;
        }
        
    </style>
    <title>Home</title>
    <body>
        <div>
            
             <table width="100%" height="80%" border="0px">
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
                 </tr>
                 <tr>
                     <td> 
                         
                         <form action="add_auth.php" method="POST" id="add">
                             <table class="form1" bgcolor="white" width=30% align="center" cellspacing="8px" cellpadding="2px">
                                 <tr>
                                     <th colspan="2"><h1 style="color:deepskyblue">Add Question</h1><hr></th>
                                </tr>
                                 <tr>
                                     <th><label>Question: </label></th>
                                     <td><textarea name="ques" cols="auto" rows="auto"></textarea> </td>
                                 </tr>
                                 <tr>
                                     <th><label>Unit: </label></th>
                                     <td><input type="text" name="unit"></td>
                                 </tr> 
                                 <tr>
                                     <th><label>Marks: </label></th>
                                     <td><select name="marks">
                                             <option value="4">4</option>
                                             <option value="6">6</option>
                                         </select>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td colspan="2" align="right"><input type="submit" name="add" value="Add"></td>
                                 </tr>
                         </form> 
                     </td>
                 </tr>
             </table>
        </div>
    </body>
</html>
             


