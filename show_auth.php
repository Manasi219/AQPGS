<?php
session_start();
include 'config.php';

$unit = $_POST['unit'];
$marks = $_POST['marks'];
if(isset($_POST['show'])){
?>
    <html>
        <head>
            <link rel="stylesheet" href="Main.css">
            <style>
                table,th,td{
                    border:1px solid black;
                    background-color: white;
                }
                th{
                    font-size: 20px;
                }
                a:link{
                    background-color: coral;
                    padding: 14px 25px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                }
                a:hover{
                    color: white;
                }
                
                
                
            </style>        
        </head>
        <body>
            <?php
            if(isset($_POST['show'])){
            ?>
            <table width="70%" height="auto" align="center" cellspacing="0px" cellpadding="5px">
                <tr>
                    <th>Question ID</th>
                    <th>Question</th>
                    <th>Marks</th>
                </tr>
                <?php
                    if($marks == 6){
                        $sql = mysql_query ("SELECT * FROM ".unit.$unit._a);
                        while($row = mysql_fetch_assoc($sql)) {
                        ?>  <tr>
                            <td align="center"> <?php echo $row['qid'] ?></td>
                            <td> <?php echo $row['qname'] ?></td>
                            <td align="center"> <?php echo $row['marks'] ?></td>
                            </tr>
                        <?php
                    }
                    }
                    else{
                    $sql = mysql_query ("SELECT * FROM ".unit.$unit);
                    }
                    while($row = mysql_fetch_assoc($sql)) {
                        ?>  <tr>
                            <td align="center"> <?php echo $row['qid'] ?></td>
                            <td> <?php echo $row['qname'] ?></td>
                            <td align="center"> <?php echo $row['marks'] ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
            <br>
            <div id="back" align="center"><a href="show.php">BACK</a></div><
            <?php
            }
            ?>
        </body>
    </html> <?php
}

