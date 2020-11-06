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
            border-radius: 5px;
            border-bottom: 2px solid coral;
            overflow: auto;
        }
        
    </style>
    <title>adminhome</title>
    <body>
        <div>
             <h1 class="heading">Automatic Question Paper Generator</h1>
             <table width="100%" height="80%" border="0px">
                 <tr>
                     <td class="menu">
                        <div class="navbar">
                            <a href="admin_home.php">Home</a>
                            <a href="teacher.php">Teacher</a>
                            <a href="subject.php">Subject</a>
                            <a href="question.php">Question</a>
                            <li style="float:right"><a class="active" href="logout.php">Logout</a>
                            </li>
                        </div>
                     </td>
                 </tr>
                  <tr>
                     <td> 
                         
                         <form action="question_auth.php" method="POST" id="question">
                             <table class="form1" bgcolor="#63CCCF" width=30% align="center" cellspacing="8px" cellpadding="2px">
                                 <tr>
                                     <th colspan="2"><h1>Question</h1><hr></th>
                                </tr>
                                 <tr>
                                     <th><label>Subject: </label></th>
                                     <td><select name="subject">
                                             <option value="OOMD">OOMD</option>
                                             <option value="PCM">PCM</option>
                                             <option value="Linux">Linux</option>
                                             <option value="CF">CF</option>
                                             <option value="DBMS">DBMS</option>
                                         </select>
                                     </td>
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