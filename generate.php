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
                         
                         <form action="new 1.php" method="POST" id="generate">
                            <table class="form1" bgcolor="white" width=auto align="center" cellspacing="5px" cellpadding="1px">
                             
                                 <tr>
                                     <th colspan="6"><h1 style="color:deepskyblue">Generate Question Paper</h1><hr></th>
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
                                 
                                     <th><label>Marks: </label></th>
                                     <td><input type="radio" name="marks" value="4marks">4 marks<br>
                                         <input type="radio" name="marks" value="6marks">6 marks<br></td>
                                     <th><label>Set: </label></th>
                                  <td><input type="text" name="set"></td>
                                 </tr>

                                 <tr>
                                      
                                     <th><label>Date: </label></th>
                                     <td><input type="date"  name="date"></td>
                                     <th><label>Time: </label></th>
                                     <td><input type="time" name="time"></td>
                                 </tr>        
                                
                                  <tr>
                                  <th><label>Total Marks:</label></th>
                                  <td><input type="text" name="m"></td>
                                  </tr>
                                  <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                 <tr>
                                     <th><label>Q.1) Unit: </label></th>
                                     <td><input type="text" name="unit1"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks1"></td>
                                 
                                 </tr>
                                 
                              
                                 <tr>
                                
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq1"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve1"></td>
                                       
                                 </tr>
                                 <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                 <tr>
                                     
                                     <th><label>Q.2) Unit: </label></th>
                                     <td><input type="text" name="unit2"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks2"></td>
                                 
                                 </tr>
                             
                                 
                                 <tr>
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq2"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve2"></td>
                            
                                 </tr>
                                 <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                 <tr>
                                     <th><label>Q.3) Unit: </label></th>
                                     <td><input type="text" name="unit3"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks3"></td>
                                 
                                 </tr>
                                 
                                 <tr>
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq3"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve3"></td>
                                 
                                  </tr>
                                  <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                  <tr>
                                     <th><label>Q.4) Unit: </label></th>
                                     <td><input type="text" name="unit4"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks4"></td>
                                 
                                  </tr>
             
                                  <tr>
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq4"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve4"></td>
                                     
                                  </tr>
                                  <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                  <tr>
                                     <th><label>Q.5) Unit: </label></th>
                                     <td><input type="text" name="unit5"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks5"></td>
                                 
                                  </tr>
                                  
                                  <tr>
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq5"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve5"></td>
                                 
                                  </tr>
                                  <tr>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                      <td><hr></td>
                                  </tr>
                                  <tr>
                                     <th><label>Q.6) Unit: </label></th>
                                     <td><input type="text" name="unit6"></td>
                                     <th><label>marks: </label></th>
                                     <td><input type="text" name="marks6"></td>
                                 
                                  </tr>
                           
                                  <tr>
                                     <th><label>Total question</label></th>
                                     <td><input type="text" name="tq6"></td>
                                     <th><label>Solve</label></th>
                                     <td><input type="text" name="solve6"></td>
                                  
                                  </tr>
                                 <tr>
                                     <td colspan="6" align="center"><input type="submit" name="generate" value="Generate Paper"></td>
                                 </tr>
                                
                         </form> 
                     </td>
                 </tr>
                 </div>
             </table>
                        
        </div>
    </body>
</html>
