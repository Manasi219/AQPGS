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
        
        select,input[type=date],[type=time]{
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
                         
                         <form action="unit1.php" method="POST" id="generate">
                            <table class="form1" bgcolor="white" width=auto align="center" cellspacing="5px" cellpadding="1px">
                             
                                 <tr>
                                     <th colspan="6"><h1 style="color:deepskyblue">Generate Unit Test Question Paper</h1><hr></th>
                                </tr>
                    
                                 <tr>
                                     <th><label>Term: </label></th>
                                     <td><select name="term">
                                             <option value="even">even</option>
                                             <option value="odd">odd</option>
                                         </select>
                                         
                                    <th><label>Year: </label></th>
                                     <td><input type="text" name="year"></td>
                                 </tr>
                                 
                                 <tr>
                                      
                                     <th><label>Date: </label></th>
                                     <td><input type="date"  name="date"></td>
                                     <th><label>Time: </label></th>
                                     <td><input type="time" name="time"></td>  
                                 </tr>
                                 
                                  <tr>
								     <th><label>Test</label></th>
                                    <td><input type="text" name="test"></td>
								    
                                    <th><label>Total Marks:</label></th>
                                    <td><input type="text" name="m"></td>
                                  </tr>
                                 
                                  <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      
                                  </tr>
                                 <tr>
                                     <th><label>Unit: </label></th>
                                     <td><input type="text" name="unit1"></td>
                                     <td>*Note: Selects 3 Questions</td>
                                 </tr>
                                 <tr>
                                     <th><label>Unit: </label></th>
                                     <td><input type="text" name="unit2"></td>
                                     <td>*Note: Selects 2 Questions</td>
                                 </tr>
                                 <tr>
                                     <th><label>Unit: </label></th>
                                     <td><input type="text" name="unit3"></td>
                                     <td>*Note: Selects 1 Questions</td>
                                 </tr>
                                 
                                 <tr>
                                     <td colspan="4" align="center"><input type="submit" name="generate" value="Generate Paper"></td>
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
