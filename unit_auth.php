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
    <form action="unit1.php" method="POST">
<?php
if(!empty ($_POST['generate']))
  {
		$term=$_POST['term'];
		$year=$_POST['year'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$total_marks=$_POST['m'];
		$unit_1=$_POST['unit1'];
		$unit_2=$_POST['unit2'];
		$unit_3=$_POST['unit3'];
		$test=$_POST['test'];
		
  }
  ?>
      <h2><p align="center">CUSROW WADIA INSTITUTE OF TECHNOLOGY,PUNE-1</p></h2>
    <table cellspacing="0px" cellpadding="5px" height="auto" width ="100%">
	<tr>
		<td colspan="2"><b><?php echo "Test:". $test ; ?></b></td>
	
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
  <td colspan=2 align="center" ><b>Attempt as per instructions</b></td>
    <td><?php echo"<b>Course: ".$_SESSION['course']."(".$_SESSION['id'].")</b>";?></td>
   </tr>
   </table>
   <?php
error_reporting(E_ERROR);
include('config.php');
            
                ?> <h3 style="float: left; width: 50%;"><?php echo  "Q.1 Solve any 5" ?></h3>
                    <h3 style="float: right; width: 50%; text-align: right;"><?php echo "$total_marks" ?></h3>
			  <?php
			      $res=mysql_query("select * from ".unit.$unit_1." order by rand() limit 0,3");
                 $s=str_shuffle($res);
                $i=1;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	        //echo "<br><br>";

			      $res=mysql_query("select * from ".unit.$unit_2." order by rand() limit 0,2");
                 $s=str_shuffle($res);
                $i=4;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	       // echo "<br><br>";
			
			      $res=mysql_query("select * from ".unit.$unit_3." order by rand() limit 0,2");
                 $s=str_shuffle($res);
                $i=6;
             
                    while($s=  mysql_fetch_assoc($res))
              {
                    echo $i.") ";
                    echo $s['qname']."<br> ";
                    $i++ ;
               }
			  
	       //echo "<br><br>";
			?>
   </form>
</body>
</html>
	