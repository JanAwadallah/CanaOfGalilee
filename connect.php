 <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
date_default_timezone_set('Australia/Melbourne');

$HusbandName = filter_input(INPUT_POST, 'HusbandName');
$email = filter_input(INPUT_POST, 'e-mail');
$WifeName = filter_input(INPUT_POST, 'WifeName');
$KidsNumber = filter_input(INPUT_POST, 'KidsNumber');
$RoomFirst = filter_input(INPUT_POST, 'RoomFirst');
$RoomFirst=str_replace(' ', '-', $RoomFirst);
$RoomSecond = filter_input(INPUT_POST, 'RoomSecond');
$RoomSecond=str_replace(' ', '-', $RoomSecond);
$RoomThird = filter_input(INPUT_POST, 'RoomThird');
$RoomThird=str_replace(' ', '-', $RoomThird);
$ShareWith = filter_input(INPUT_POST, 'ShareWith');
$updated = date("d/M/Y G:i:s");
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$selectFirstQuery = "SELECT * FROM reservation_tbl WHERE email = '$email'";
$queryResult = $conn->query($selectFirstQuery);
$foundRows = mysqli_num_rows($queryResult);
// Check connection
if($foundRows >= 1) {
    echo "<div style='text-align: center;' class='jumbotron'><h2>$email is already registerd, please wait for the confirmation email and check your spam folder if you did not receive any email</h2></div>";
    
}else{
 $sql = "INSERT INTO reservation_tbl (HusbandName, email, WifeName, KidsNumber, RoomFirst, RoomSecond, RoomThird, ShareWith, ReservationDate)
VALUES ('$HusbandName','$email', '$WifeName', '$KidsNumber', '$RoomFirst', '$RoomSecond', '$RoomThird', '$ShareWith', '$updated')";}

if ($conn->query($sql) === TRUE) {

	$to      = "jan.awadallah@gmail.com, Rami.Georges@gmail.com, youssefmaurice@gmail.com, ".$email;
    $subject = "2018 Retreat New Reservation from $HusbandName ($email)";
    $message = "Reservation expression of interest was received,\n please wait for a reservation confirmation subject to availability";
    $message = wordwrap($message,70);
      $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
    mail($to, $subject, $message, $headers);

  header("Location: http://canaofgalilee.info/index.php");

} else {
    echo "<div style='text-align: center;' class='jumbotron'><h3>Please go back and check yor details</h3></div>" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>