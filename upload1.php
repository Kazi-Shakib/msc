<?php

if(isset($_POST['okk'])){
	

 // Connect to MySql
	$db = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'sakibsakib#',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


function secure($value) {

	global $db;

	// Stripslashes
	if (get_magic_quotes_gpc()) {
	$value = stripslashes($value);
	}

	// Quote if not a number
	if (!is_numeric($value)) {
	$value = mysqli_real_escape_string($db, $value);
	}

	return $value;
}


	// Loop through POST variables
	foreach($_POST as $input => $value) {
	$_POST[$input] = secure($value);
	}

	 // sakib , you start code from here ////////
	 $type1_msc_phd=$_POST['type_msc_phd'];
	 $student_type=$_POST['student_type'];
	 $student_name=$_POST['name'];
	 $f_name=$_POST['f_name'];
	 $m_name=$_POST['m_name'];
	 $dep=$_POST['dep'];
     $b_day=$_POST['b_day']."-".$_POST['b_month']."-".$_POST['b_year'];
     $gender1=$_POST['gender'];
     $nationality=$_POST['nation'];
     $religion=$_POST['religion'];
     $present_address=$_POST['present_care'].",".$_POST['present_vill'].",".$_POST['present_dist'].",".$_POST['present_upazila'].",".$_POST['present_post'].",".$_POST['present_pcode'].".";
     $permanent_address=$_POST['permanent_care'].",".$_POST['permanent_vill'].",".$_POST['permanent_dist'].",".$_POST['permanent_upazila'].",".$_POST['permanent_post'].",".$_POST['permanent_pcode'].".";
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $degree_name=$_POST['exam1'].",".$_POST['exam2'].",".$_POST['exam3'].",".$_POST['exam4'];
     $institute=$_POST['institute1'].",".$_POST['institute2'].",".$_POST['institute3'].",".$_POST['institute4'];
     $passing_dept=$_POST["subject1"].",".$_POST['subject2'].",".$_POST['subject3'].",".$_POST['subject4'];
     $cgpa=$_POST['result1']."-".$_POST['result_gpa1'].",".$_POST['result2']."-".$_POST['result_gpa2'].",".$_POST['result3']."-".$_POST['result_gpa3'].",".$_POST['result4']."-".$_POST['result_gpa4'];
     $passing_year=$_POST['year1']."-".$_POST['year2']."-".$_POST['year3']."-".$_POST['year4'];
     $occupation=$_POST['job_no']."-".$_POST['job_post1']."-".$_POST['organization1']."-".$_POST['t_day1']."/".$_POST['t_month1']."/".$_POST['t_year1']."..".$_POST['f_day1']."/".$_POST['f_month1']."/".$_POST['f_year1']."..".$_POST['job_res1'];
    echo $photo=$_POST['phone']."_".$_FILES['photo']['name'];
     $signature=$_POST['phone']."_".$_FILES['signature']['name'];
     $zip=$_POST['phone']."_".$_FILES['zip']['name'];
     $bank_slip=$_POST['phone']."_".$_FILES['bank_slip']['name'];
     $NOC=$_POST['phone']."_".$_FILES['NOC']['name'];
     if($type1_msc_phd=1){
         $type_msc_phd="Masters";
     }
     elseif($type1_msc_phd=2){
         $type_msc_phd="P.hD";
     }
     
     if($gender1=1){
         $gender="Male";
     }
     elseif($gender1=2){
         $gender="Female";
     }
     else{
         $gender="Others";
     }
     echo $sql = "INSERT INTO student (type_msc_phd,student_type,student_name, f_name,m_name,dep,b_day,gender,nation,religion,present_address,permanent_address,phone,email,degree_name,institute,passed_dept,cgpa,passing_year,occupation,pic_upload,signature_upload,certificate_upload,bank_slip,NOC)
VALUES ('$type_msc_phd','$student_type', '$student_name', '$f_name','$m_name','$dep','$b_day','$gender','$nationality','$religion','$present_address',' $permanent_address','$phone','$email','$degree_name','$institute','$passing_dept','$cgpa','$passing_year','$occupation','$photo','$signature','$zip','$bank_slip','$NOC')";
 //echo $sql = "INSERT INTO student (type_msc_phd, student_name, f_name,m_name,b_day,gender,nation,religion,present_address,permanent_address,phone,email,degree_name,institute,passing_dept,cgpa,passing_year,occupation,pic_upload,signature_upload,,certificate_upload,bank_slip)
//VALUES ('$type_msc_phd', '$student_name', '$f_name','$m_name','$b_day','$gender','$nationality','$religion','$present_address',' $permanent_address','$phone','$email','$degree_name','$institute','$passing_dept','$cgpa','$passing_year','$occupation','$photo','$signature','$zip','$bank_slip')";

mysqli_query($db, $sql);
	$photo1 = $_FILES["photo"]["name"];
	$photo2=$_POST['phone']."_".$photo1;
  print_r($photo1);
  $photo1Name = $_FILES["photo"]["name"];
  $photoTmpName = $_FILES["photo"]["tmp_name"];
  $photoType = $_FILES["photo"]["type"];
  $photoSize= $_FILES["photo"]["size"];
  $photoError = $_FILES["photo"]["error"];
  $photoExt=explode('.',$photo1Name);
  echo $photoActualExt=strtolower(end($photoExt));
  $allowed=array('jpg','png','jpeg');
  if(in_array($photoActualExt,$allowed)){
     if($photoError==0){
         if($photoSize<100000){
            $photoNewName=$_POST['phone'].uniqid('',true).".".$photoActualExt;
            $photoDestination='pic/'.$photoNewName;
            move_uploaded_file($photoTmpName,$photoDestination);
           echo $sql1 = "UPDATE student SET `pic_upload`='$photoNewName' WHERE `pic_upload`='$photo2'";
            mysqli_query($db, $sql1);
         }
         else{
              echo"Invalid Photo Size";
         }
     }
     else{
         echo "There was a problem uploading photo";
     }
     
  }
  else{
              echo"Invalid file formats";
         }
  $signature1= $_FILES["signature"]["name"];
  $signature2=$_POST['phone']."_".$signature1;
  print_r($signature1);
  $signature1Name = $_FILES["signature"]["name"];
  $signatureTmpName = $_FILES["signature"]["tmp_name"];
  $signature1Type = $_FILES["signature"]["type"];
  $signatureSize= $_FILES["signature"]["size"];
  $signatureError = $_FILES["signature"]["error"];
  $signatureExt=explode('.',$signature1Name);
  echo $signatureActualExt=strtolower(end($signatureExt));
  $allowed=array('jpg','png','jpeg');
  if(in_array($signatureActualExt,$allowed)){
     if($signatureError==0){
         if($signatureSize<100000){
            $signatureNewName=$_POST['phone'].uniqid('',true).".".$signatureActualExt;
            $signatureDestination='pic/'.$signatureNewName;
            move_uploaded_file($signatureTmpName,$signatureDestination);
           echo $sql2 = "UPDATE student SET `signature_upload`='$signatureNewName' WHERE `signature_upload`='$signature2'";
            mysqli_query($db, $sql2);
            
         }
         else{
              echo"Invalid Signature Size";
         }
     }
     else{
         echo "There was a problem uploading Signature";
     }
    
  }
   else{
              echo"Invalid file formats";
         }
  $zip1= $_FILES["zip"]["name"];
    $zip2=$_POST['phone']."_".$zip1;
  print_r($zip1);
  $zip1Name = $_FILES["zip"]["name"];
  $zipTmpName = $_FILES["zip"]["tmp_name"];
  $zip1Type = $_FILES["zip"]["type"];
  $zipSize= $_FILES["zip"]["size"];
  $zipError = $_FILES["zip"]["error"];
  $zipExt=explode('.',$zip1Name);
  echo $zipActualExt=strtolower(end($zipExt));
  $allowed=array('zip','tar','rar');
  if(in_array($zipActualExt,$allowed)){
     if($zipError==0){
         if($zipSize<100000000){
            $zipNewName=$_POST['phone'].uniqid('',true).".".$zipActualExt;
            $zipDestination='zip/'.$zipNewName;
            move_uploaded_file($zipTmpName,$zipDestination);
            echo $sql3 = "UPDATE student SET `certificate_upload`='$zipNewName' WHERE `certificate_upload`='$zip2'";
            mysqli_query($db, $sql3);
            
         }
         else{
              echo"Invalid Uploaded_file Size";
         }
     }
     else{
         echo "There was a problem uploading Files zip";
     }
    
  }
   else{
              echo"Invalid file formats";
         }
   $bank_slip1= $_FILES["bank_slip"]["name"];
   $bank_slip2=$_POST['phone']."_".$bank_slip1;
  print_r($bank_slip1);
  $bank_slip1Name = $_FILES["bank_slip"]["name"];
  $bank_slipTmpName = $_FILES["bank_slip"]["tmp_name"];
  $bank_slipType = $_FILES["bank_slip"]["type"];
  $bank_slipSize= $_FILES["bank_slip"]["size"];
  $bank_slipError = $_FILES["zip"]["error"];
  $bank_slipExt=explode('.',$bank_slip1Name);
  echo $bank_slipActualExt=strtolower(end($bank_slipExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx');
  if(in_array($bank_slipActualExt,$allowed)){
     if($bank_slipError==0){
         if($bank_slip1Size<1000000){
            $bank_slipNewName=$_POST['phone'].uniqid('',true).".".$bank_slipActualExt;
            $bank_slipDestination='pic/'.$bank_slipNewName;
            move_uploaded_file($bank_slipTmpName,$bank_slipDestination);
           echo $sql4 = "UPDATE student SET `bank_slip`='$bank_slipNewName' WHERE `bank_slip`='$bank_slip2'";
            mysqli_query($db, $sql4);
         }
         else{
              echo"Invalid Uploaded_bank_slip Size";
         }
     }
     else{
         echo "There was a problem uploading bank_slip";
     }
    
  }
   else{
              echo"Invalid file formats bank_slip";
         }
    $NOC1= $_FILES["NOC"]["name"];
     $NOC2=$_POST['phone']."_".$NOC1;
 
  $NOC1Name = $_FILES["NOC"]["name"];
  
  $NOCTmpName = $_FILES["NOC"]["tmp_name"];
  $NOCType = $_FILES["NOC"]["type"];
  $NOCSize= $_FILES["NOC"]["size"];
  $NOCError = $_FILES["NOC"]["error"];
  $NOCExt=explode('.',$NOC1Name);
$NOCActualExt=strtolower(end($NOCExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($NOCActualExt,$allowed)){
     if($NOCError==0){
         if($NOCSize<100000){
            $NOCNewName=$_POST['phone'].uniqid('',true).".".$NOCActualExt;
            $NOCDestination='pic/'.$NOCNewName;
            move_uploaded_file($NOCTmpName,$NOCDestination);
            echo $sql5 = "UPDATE student SET `NOC`= '$NOCNewName' WHERE `NOC`= '$NOC2'";
            mysqli_query($db, $sql4);
         }
         else{
              echo"Invalid Uploaded_NOC Size";
         }
     }
     else{
         echo "There was a problem uploading NOC";
     }
    
  }
   else{
              echo"Invalid file formats NOC";
         }	

}
else{echo"No Way";}


