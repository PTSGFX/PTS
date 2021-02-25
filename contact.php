<?php
// variable setting

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['Email'];
$subject = S_REQUEST['Message'];

//check input fields
if (empty($fname) || empty($lname) || empty($subject)) {
echo('Please fill all the fields');
}else {
  mail("piyushtechs1@gmail.com", "Webtech Message", $fname, "From: $lname <$subject>");
echo "<script type='text/javascript'>alert( 'your message has been sent successfully');
window.history.log(-1)
</script>";
}

?>



