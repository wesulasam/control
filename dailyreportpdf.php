<?php

require ("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont("Arial","B",16);
$pdf -> Cell(0,10,"welcome",1,1);
$pdf -> output();


$date_sampled = $_POST['date_sampled'];
$product_being_received = $_POST['product_being_received'];
$line_quality = $_POST['line_quality'];

//volume
$six_zero_one = $_POST['six_zero_one'];
$six_zero_two = $_POST['six_zero_two'];
$six_zero_three =$_POST['six_zero_three'];
$vol_six_zero =$_POST['vol_six_zero'];

//pumpable
$a_six_zero_one =$_POST['a_six_zero_one'];
$a_six_Zero_two =$_POST['a_six_zero_two'];
$a_six_zero_three =$_POST['a_six_zero_three'];
$a_result_six = $_POST['a_result_six'];

//Available
$six_zero_three =$_POST['six_zero_three'];
$six_zero_three =$_POST['six_zero_three'];
$six_zero_three =$_POST['six_zero_three'];
$six_zero_three =$_POST['six_zero_three'];

//Composition
$c_six_zero_one =$_POST['c_six_zero_one'];
$c_six_zero_two =$_POST['c_six_zero_two'];
$c_six_zero_three =$_POST['c_six_zero_three'];

//tank Status total volume
$twenty_five_one_zero_one =$_POST['twenty_five_one_zero_one'];
$twenty_five_one_zero_two =$_POST['twenty_five_one_zero_two'];
$twenty_five_two_zero_one =$_POST['twenty_five_two_zero_one'];
$twenty_five_two_zero_two =$_POST['twenty_five_two_zero_two'];
$result_one_and_two =$_POST['result_one_and_two'];

//end point flash pointe
$e_twenty_five_one_zero_one =$_POST['e_twenty_five_one_zero_one'];
$e_twenty_five_one_zero_two =$_POST['e_twenty_five_one_zero_two'];
$e_twenty_five_two_zero_one =$_POST['e_twenty_five_two_zero_one'];
$e_twenty_five_two_zero_two =$_POST['e_twenty_five_two_zero_two'];

//tank 301 25TK302
$three_zero_one =$_POST['three_zero_one'];
$three_zero_two =$_POST['three_zero_two'];
$three_zero_result =$_POST['three_zero_result'];

//end point flash point for tank 301 and 302
$e_three_zero_one =$_POST['e_three_zero_one'];
$e_three_zero_two = $_POST['e_three_zero_two'];
$e_three_zero_result =$_POST['e_three_zero_result'];

//tank 501 and tank 502
$first_number =$_POST['first_number'];
$second_number= $_POST['second_number'];
$five_result = $_POST['five_result'];

//end point for 501 and 502
$e_first_number =$_POST['e_first_number'];
$e_second_number =$_POST['e_second_number'];

//Handover
$handover =$_POST['handover'];


//AOB
$AOB =$_POST['AOB'];

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont("Arial","B",16);
$pdf -> Cell(0,10,"welcome{$date_sampled}",1,1,);
$pdf -> output();



if (!empty ($_POST['submit']))

{

  $date_sampled = mysql_real_escape_string ($_POST['date_sampled']);
  $product_being_received = mysql_real_escape_string ($_POST['product_being_received']);
  $line_quality = mysql_real_escape_string ($_POST['line_quality']);

  //volume
  $six_zero_one = mysql_real_escape_string ($_POST['six_zero_one']);
  $six_zero_two = mysql_real_escape_string ($_POST['six_zero_two']);
  $six_zero_three =mysql_real_escape_string ($_POST['six_zero_three']);
  $vol_six_zero = mysql_real_escape_string ($_POST['vol_six_zero']);

  //pumpable
  $a_six_zero_one =mysql_real_escape_string ($_POST['a_six_zero_one']);
  $a_six_Zero_two =mysql_real_escape_string ($_POST['a_six_zero_two']);
  $a_six_zero_three =mysql_real_escape_string($_POST['a_six_zero_three']);
  $a_result_six = mysql_real_escape_string ($_POST['a_result_six']);

  //Available
  $six_zero_three =mysql_real_escape_string ($_POST['six_zero_three']);
  $six_zero_three =mysql_real_escape_string ($_POST['six_zero_three']);
  $six_zero_three =mysql_real_escape_string ($_POST['six_zero_three']);
  $six_zero_three =mysql_real_escape_string ($_POST['six_zero_three']);

  //Composition
  $c_six_zero_one =mysql_real_escape_string ($_POST['c_six_zero_one']);
  $c_six_zero_two =mysql_real_escape_string ($_POST['c_six_zero_two']);
  $c_six_zero_three =mysql_real_escape_string ($_POST['c_six_zero_three']);

  //tank Status total volume
  $twenty_five_one_zero_one =mysql_real_escape_string ($_POST['twenty_five_one_zero_one']);
  $twenty_five_one_zero_two =mysql_real_escape_string ($_POST['twenty_five_one_zero_two']);
  $twenty_five_two_zero_one =mysql_real_escape_string ($_POST['twenty_five_two_zero_one']);
  $twenty_five_two_zero_two =mysql_real_escape_string ($_POST['twenty_five_two_zero_two']);
  $result_one_and_two =mysql_real_escape_string ($_POST['result_one_and_two']);

  //end point flash pointe
  $e_twenty_five_one_zero_one =mysql_real_escape_string ($_POST['e_twenty_five_one_zero_one']);
  $e_twenty_five_one_zero_two =mysql_real_escape_string ($_POST['e_twenty_five_one_zero_two']);
  $e_twenty_five_two_zero_one =mysql_real_escape_string ($_POST['e_twenty_five_two_zero_one']);
  $e_twenty_five_two_zero_two =mysql_real_escape_string ($_POST['e_twenty_five_two_zero_two']);

  //tank 301 25TK302
  $three_zero_one =mysql_real_escape_string ($_POST['three_zero_one']);
  $three_zero_two =mysql_real_escape_string ($_POST['three_zero_two']);
  $three_zero_result =mysql_real_escape_string ($_POST['three_zero_result']);

  //end point flash point for tank 301 and 302
  $e_three_zero_one =mysql_real_escape_string ($_POST['e_three_zero_one']);
  $e_three_zero_two = mysql_real_escape_string ($_POST['e_three_zero_two']);
  $e_three_zero_result =mysql_real_escape_string ($_POST['e_three_zero_result']);

  //tank 501 and tank 502
  $first_number =mysql_real_escape_string ($_POST['first_number']);
  $second_number =mysql_real_escape_string ($_POST['second_number']);
  $five_result = mysql_real_escape_string ($_POST['five_result']);

  //end point for 501 and 502
  $e_first_number =mysql_real_escape_string ($_POST['e_first_number']);
  $e_second_number =mysql_real_escape_string ($_POST['e_second_number']);

  //Handover
  $handover =mysql_real_escape_string ($_POST['handover']);

  //AOB
  $AOB =mysql_real_escape_string ($_POST['AOB']);


}
 ?>
