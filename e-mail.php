

<?php
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 


if(isset($_POST['button_pressed']))
{
   
    $to      = "jan.awadallah@gmail.com";
    $subject = "Retreat 2018 reservation".$_POST[email];
    $message = "Reservation approved";
    $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
// ini_set("SMTP","mail.canaofgalilee.info");
// ini_set("smtp_port","587");
    mail($to, $subject, $message, $headers);

$UpdateTable = "update reservation_tbl set Approved='Yes' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    // header("Location: http://canaofgalilee.info/reservationDB.php");
    header("Location: http://canaofgalilee.info/reservationDB.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);

}
if(isset($_POST['Assign']))
{
   
    $to      = "$_POST[email]";
    $member = $_POST[HusbandName];
    $subject = "Retreat 2018 reservation";
    $message = "Dear <strong>$_POST[HusbandName]</strong> the beloved member of Cana of Galilee meeting, We would like to inform you that your expression of interest (EOI) for attending our event <strong>Beyond The Border(The Annual Retreat)</strong> has been approved and your booking is ready now to be paid.
 
<br>So please find the information below to complete your reservation and secure your place with us in this blessed event by paying at least 50% deposit of the total accommodation cost.
 
<br>Please be aware that if you only paid the 50% deposit then the balance must be paid in full by 01/09/2018.
 <br>
<br>Member name : <strong> $member</strong>
 <br>
<br>Room type: <strong>$_POST[AcceptedChoice]</strong>
 <br>
 
<br>All payment should be done online to the following account and confirm your payment by sending email to Rami on rami.georges@gmail.com to let him know.
<br>
<br>Account Name: RAMI GEORGES
 <br>
<br>BSB: 733695     Account #: 636600
 <br>
<br>Description: 'Please write your name'
<br>
<br>Please remember the service in your prayers
";
    $message = wordwrap($message,70);
    $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
// ini_set("SMTP","mail.canaofgalilee.info");
// ini_set("smtp_port","587");
    mail($to, $subject, $message, $headers);

$UpdateTable = "update reservation_tbl set Room='$_POST[Room]', AcceptedChoice= '$_POST[AcceptedChoice]' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    // header("Location: http://canaofgalilee.info/reservationDB.php");
    header("Location: http://canaofgalilee.info/accepted.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);

}

?>