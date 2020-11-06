<?php
session_start();


if(!empty ($_POST['generate']))
{
	$term=$_POST['term'];
	//$marks=$_POST['marks'];
	$year=$_POST['year'];
	$date=$_POST['date'];
	$time=$_POST['time'];
  
   
   
   require('mpdf/mpdf.php');
   $mpdf=new mPDF('','A4','','',18,12,16,10,10,10);
    $mpdf->setFooter('{PAGENO}');   
    $mpdf->SetDisplayMode('fullpage');
   ob_start();
    include "unit_auth.php";
     $html = ob_get_contents();
    ob_end_clean();
	$mpdf->WriteHTML($html);
    
	$mpdf->Output("question_paper.pdf","I");
	$pdf ->output();
	

}

 
?>

 
 
 