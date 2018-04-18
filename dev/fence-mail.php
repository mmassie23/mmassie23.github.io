<?/*
File: fence-mail.php
Author; Marquis Massie
Author's Email: massiemarquis@gmail.com
Description: 
*/

//POST data from fence-contact.html contact form will be processed and sent from the script

$nameErr = $emailErr  = "";
$name = $email = $comment = "";

//Validate data from form and save in variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $nameErr = "Name is required";
  } else {
    $name = validate($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["useremail"])) {
    $emailErr = "Email is required";
  } else {
    $email = validate($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["message"])) {
    $comment = "";
  } else {
    $comment = validate($_POST["message"]);
  }
  
  //Only send email AFTER ALL DATA IS VALIDATED
  mail("iefencing@gmail.com", "Fence Services", $comment, "From:"+$email.com);
  
}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>