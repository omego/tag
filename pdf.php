<?php
 require_once('fpdf/fpdf.php');
 require_once('fpdi/fpdi.php');
 
 include 'connect.php';
 


 //
 
 //$member_id = $_GET['id'];
 
 //$member_id_tickets = mysql_query("select * from tickets_entry where id = $member_id");
 
 //
 
 //$row1 = mysql_fetch_array($member_id_tickets); 
 
 
 
  //$Engineer_ID = $row1['Engineer_ID'];
 
 //echo $Engineer_ID;
//$eng_badge = mysql_query("select Badge from users where Real_Name = '". $row1['Engineer_Name'] ."'");

//$row2 = mysql_fetch_array($eng_badge); 

//$Engineer_IDLIST = $row2['Badge'];
 
 //echo $Engineer_IDLIST;


 //
 // $Report_No = $row1['Report_No'];
 $prefix = $_POST['prefix'] . " " . $_POST['fname'] . " " . $_POST['lname']; 
 $title = $_POST['title'];
 $email = $_POST['email'] . "," . " Ext. " . $_POST['ext'];

// include BarcodeQR class 
include "BarcodeQR.php"; 

// set BarcodeQR object 
$qr = new BarcodeQR(); 

// create URL QR code 
$qr->text($_POST['prefix'] . " " . $_POST['fname'] . " " . $_POST['lname'] . ", " . $_POST['title'] . ", " . $_POST['email'] . "," . " Ext. " . $_POST['ext']); 

$qr->draw(150, "tmp/" . $_POST['email'] . ".png");

 // $Ticket_Create_Time = $row1['Ticket_Create_Time'];
 // //$Ticket_title = $row1['Ticket_title'];
 // $Location_Building = $row1['Location_Building'];
 // $Location_Room_No = $row1['Location_Room_No'];
 // $Location_Floor = $row1['Location_Floor'];
 // $Service_Description = $row1['Service_Description'];
 // $Engineer_Name = $row1['Engineer_Name'];
 //$Ticket_Category = $row1['Ticket_Category'];

 
 // initiate FPDI  
 $pdf = new FPDI();  
 // add a page
 $pdf->AddPage('L');  
 // set the sourcefile  
 $pdf->setSourceFile('pdf/tag-small.pdf');
 // import page 1  
 $tplIdx = $pdf->importPage(1);  
 // use the imported page and place it at point 10,10 with a width of 200 mm   (This is    the image of the included pdf)
 $pdf->useTemplate($tplIdx, 0, 0, 297);  
 // now write some text above the imported page
 $pdf->SetTextColor(0,0,0);

//
 $pdf->Image("tmp/" . $_POST['email'] . ".png",200,95,18);

 $pdf->SetFont('Arial','',16);
 $pdf->SetTextColor(161, 127, 36);
 $pdf->SetXY(85, 99);
 $pdf->Write(0, $prefix);  
 
 $pdf->SetFont('Arial','',14);
 $pdf->SetTextColor(117, 117, 117);
 $pdf->SetXY(85, 105.5); 
 $pdf->Write(0, $title); 
 
 $pdf->SetFont('Arial','',10);
 $pdf->SetTextColor(117, 117, 117);
 $pdf->SetXY(85, 112); 
 $pdf->Write(0, $email);  

 
//  $pdf->SetFont('Arial','',10);
//  $pdf->SetXY(140, 79); 
//  $pdf->Write(0, $Location_Floor);
 
//  //
 

//  $pdf->SetFont('Arial','',10);
// $pdf->SetXY(30,86.5); 
// $pdf->MultiCell(152, 5, $Service_Description, 0, 'L'); 
 

 
//  $pdf->SetFont('Arial','',10);
//  $pdf->SetXY(53, 125.5); 
//  $pdf->Write(0, $Engineer_Name);
 
//  $pdf->SetFont('Arial','',10);
//  $pdf->SetXY(135, 125.5); 
//  $pdf->Write(0, $Engineer_IDLIST);
 
//  $pdf->SetFont('Arial','',10);
//  $pdf->SetXY(66, 125.5); 
//  $pdf->Write(0, $Ticket_Category);
 
 $pdf->Output('1.pdf', 'I');
?>