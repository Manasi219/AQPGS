<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="form.css">
        <style>
            
            label{
                color: #8c8b8b;
                font-weight: bold;
                font-size: 20px;
            }
            
            .heading{
                alignment-adjust: central;
                background-color: white;
                font-size: 50;
                color: deepskyblue;
                box-shadow: 0 10px 10px -10px #8c8b8b inset;
                
            }
            
        </style>    
        <title>login</title>
    </head>
    <body>
       
        <div>
             <h1 class="heading" align="center">Automatic Question Paper Generator</h1>
             <form action="auth.php" method="POST" id="login_form">
                <br><br><br><br><br>
                <center>
                    <table class="form1" bgcolor="white" width=22% align="center" cellspacing="8px" cellpadding="2px">
                    <tr>
                        <th colspan="2"><h1 style="color:deepskyblue">Login</h1><hr></th>
                    </tr>
                    <tr>
                        <td align="center"><label>Username</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" </td>
                    </tr>
                    <tr>
                        <td align="center"><label>Password</label></td>
                    </tr>
                    <tr>
                         <td><input type="password" name="password" </td>
                    </tr>
                    <tr>
                         <td align="center"><input type="submit" name="login" value="Login"</td>
                    </tr>
                    </table>
                </center>
            </form>
        </div>
    </body>
</html>

