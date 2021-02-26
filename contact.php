<?php
// variable setting

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['Email'];
$subject = S_REQUEST['Message'];

//check input fields
if (empty($fname) || empty($lname) || empty($subject)) {
echo('Please fill all the fields');
}else {
  $to ="traidevindia@gmail.com"; 	 
  $headers = "Form : $fname \r\n";	
  $headers .= "Reply-To : $lname \r\n"; 	
  $run = mail($to,$fname,$lname,$subject,$headers); 
  if($run)	 
    echo "<script>alert('Form Submitted!');
    location.href='index.html';
    </script>";	 




?>



