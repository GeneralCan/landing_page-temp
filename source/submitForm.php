<?php
session_start();
$UsrEmail = $_POST['email'];

require_once('../../sets.php');

// connect to database
	 mysql_connect ($someHost, $usrname, $password) or die ('Error: ' . mysql_error());
//select the DataBase
mysql_select_db($emailDB)or die ('cannot select DB :('. mysql_error());

$query="INSERT INTO `raffleiz_emails`.`emails` (`ID`, `emails`) VALUES (NULL, '".$UsrEmail."')" or die ('cannot select DB :('. mysql_error());
mysql_query($query) or die ('Error Updating Data');

//send email to user
$to = $UsrEmail;
 $subject = "Welcome to Raffleize";
 $body = "Welcome,\n\n Thank you for signing up for Raffleize, we're working hard to make raffles awesome! \n It's going to be a rather short wait before we are hosting some raffles but not to \n worry we will keep you updated on our progress and definetly notify you of our \n launch! \n\n\n All the best, \n\n The Raffleize Team.";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
$_SESSION['ON-OFF'] = 1;
  
header( 'Location: ../home.php' ) ;
?>