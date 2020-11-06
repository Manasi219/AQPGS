<?php
session_start();
?>
<html>
    <head>
        <style>
            table,th,td{
                border:1px black;
                border-style: solid;
                border-collapse: collapse;
            }
            .marks{
                display: inline;
                float: left;
                color:blue;
            }
           
        </style>
    </head>
<body>
    <form action="new 1.php" method="POST">
<?php
  if(!empty ($_POST['generate']))
  {
		$term=$_POST['term'];
		$year=$_POST['year'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$marks=$_POST['marks'];
                $set=$_POST['set'];
                
                $unit_1=$_POST['unit1'];
                $marks1=$_POST['marks1'];
                $total_question1=$_POST['tq1'];
                $solve1=$_POST['solve1'];
                $total_marks=$_POST['m'];
                 //$question2=$_POST['question2'];
                $unit_2=$_POST['unit2'];
                $marks2=$_POST['marks2'];
                $total_question2=$_POST['tq2'];
                $solve2=$_POST['solve2'];
                 //$question3=$_POST['question3'];
                $unit_3=$_POST['unit3'];
                $marks3=$_POST['marks3'];
                $total_question3=$_POST['tq3'];
                $solve3=$_POST['solve3'];
                // $question4=$_POST['question4'];
                $unit_4=$_POST['unit4'];
                $marks4=$_POST['marks4'];
                $total_question4=$_POST['tq4'];
                $solve4=$_POST['solve4'];
                 //$question5=$_POST['question5'];
                $unit_5=$_POST['unit5'];
                $marks5=$_POST['marks5'];
                $total_question5=$_POST['tq5'];
                $solve5=$_POST['solve5'];
                 //$question6=$_POST['question6'];
                $unit_6=$_POST['unit6'];
                $marks6=$_POST['marks6'];
                $total_question6=$_POST['tq6'];
                $solve6=$_POST['solve6'];
                
                $tot_marks = $marks1+$marks2+$marks3+$marks4+$marks5+$marks6;  
                if(tot_marks != 80){
                    
                    $msg = "Total not 80..!!";
                    echo "<script type='text/javascript'>window.alert('$message');";
                    echo "window.location='generate.php'";
                    echo "</script>";
                }
   }
?>
    <h2><p align="center">CUSROW WADIA INSTITUTE OF TECHNOLOGY,PUNE-1</p></h2>
    <table cellspacing="0px" cellpadding="5px" height="auto" width ="100%">
	<tr>
		<td colspan=2><b>AUTONOMY EXAMINATION: <?php echo $year ; ?></b></td>
	
                <td><b>ENROLLMENT NO: </b></td>
	</tr>
	<tr>
		<td colspan=3 align="center"><b>DIPLOMA PROGRAMME IN COMPUTER ENGINEERING</b></td>
	</tr>
	<tr>
                <td><b><?php echo "Term: ".$term ; ?></b></td>
                <td><?php echo "<b>Date: </b>".$date ; ?></td>
		<td><?php echo "<b>Time: </b>".$time; ?></td>
		
                
	</tr>
        <tr>
                <td> <?php echo "<b>Set: </b>".$set ;?> </td>
                <td> <?php echo "<b>Course: ".$_SESSION['course']."(".$_SESSION['id'].")</b>" ;?> </td>
                <td><?php echo"<b>Marks: </b> ".$total_marks ?></td>
        </tr>
        <tr>
  <td colspan=3 align="center" ><b>INSTRUCTIONS</b></td>
    <tr>
        <td colspan=3>1)Answer to the two sections must be written in separate answer books.<br>
            2)All questions are compulsory.<br>
            3)Illustrate your answer with neat sketches wherever necessary.<br>
            4)Use of Mathematical Tables is permissible.<br>
            5)Use of mobile/cell phone/programmable calculator is strictly prohibited.<br>
            6)Figures to the right indicate full marks.<br>
            7)Assume suitable additional data,if necessary.</td>
    </table>
	 <h3><p align="center">SECTION  I </p></h3>
		
<?php
error_reporting(E_ERROR);
include('config.php');
            
                ?> <h3 style="float: left; width: 50%;"><?php echo "1)Solve any ".$solve1 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks1" ?></h3>
			  <?php
                        
                         
                         
                 $res=mysql_query("select * from ".unit.$unit_1." order by rand() limit ".$total_question1."");
                 $s=str_shuffle($res);
                $i=1;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	        echo "<br><br>";	
                ?><h3 style="float: left; width: 50%;"><?php echo "2)Solve any ".$solve2 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks2" ?></h3>
			  <?php
                        
                         
                         
                 $res=mysql_query("select * from ".unit.$unit_2." order by rand() limit ".$total_question2."");
                 $s=str_shuffle($res);
                $i=1;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	        echo "<br><br>";	
				
             if($marks == 6)
	 {
		?> <h3 style="float: left; width: 50%;"><?php echo "3)Solve any ".$solve3 ?></h3>
                   <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks3" ?></h3>
		   <?php
                    $res=mysql_query("select * from ".unit.$unit_3._6." order by rand() limit ".$total_question3."");
                    $s=str_shuffle($res);
                    $i=1;
                     while($s=mysql_fetch_assoc($res))
                {
                  echo $i.") ";
                  echo $s['qname']."<br>";
                  $i++;
                }
	    }
		  else
		  {
			 ?>
			  <h3 style="float: left; width: 50%;"><?php echo "3)Solve any ".$solve3 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks3" ?></h3>
			  <?php
			  $res=mysql_query("select * from ".unit.$unit_3." order by rand() limit ".$total_question3."");
                 $s=str_shuffle($res);
                 $i=1;
              while($s=  mysql_fetch_assoc($res))
              { 
                   echo $i.") ";
                 echo $s['qname']."<br>";
                 $i++;
              }
              
		   }
		   ?><br><br><br><br><br><h3><p align="center">SECTION II</p></h3><br><br>
                   <h3 style="float: left; width: 50%;"><?php echo "4)Solve any  ".$solve4 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks4" ?></h3>
			  <?php
                        
                         
                         
                 $res=mysql_query("select * from ".unit.$unit_4." order by rand() limit ".$total_question4."");
                 $s=str_shuffle($res);
                $i=1;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	       
				echo"<br><br>"; ?>
                    <h3 style="float: left; width: 50%;"><?php echo "5)Solve any ".$solve5 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks5" ?></h3>
			  <?php
                        
                         
                         
                 $res=mysql_query("select * from ".unit.$unit_5." order by rand() limit ".$total_question5."");
                 $s=str_shuffle($res);
                $i=1;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	        echo "<br><br>"; ?>
                   <?php  
			 if($marks == 6)
			 {
				 ?><h3 style="float: left; width: 50%;"><?php echo "6)Solve any ".$solve6 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks6" ?></h3>
				 <?php
                 $res=mysql_query("select * from ".unit.$unit_6._6." order by rand() limit ".$total_question6."");
                 $s=str_shuffle($res);
                 $i=1;
              while($s=  mysql_fetch_assoc($res))
              {
                  echo $i.") ";
                  echo $s['qname']."<br>";
                  $i++;
              }
		  }
		  else
		  {
			 ?>
			  <h3 style="float: left; width: 50%;"><?php echo "6)Solve any ".$solve6 ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$marks6" ?></h3>
			  <?php
			  $res=mysql_query("select * from ".unit.$unit_6." order by rand() limit ".$total_question6."");
                 $s=str_shuffle($res);
                 $i=1;
              while($s=  mysql_fetch_assoc($res))
              {
                  echo $i.") ";
                  echo $s['qname']."<br>";
                  $i++;
              }
		   }
		  
		  
	
?>
</form>
</body>
</html>


