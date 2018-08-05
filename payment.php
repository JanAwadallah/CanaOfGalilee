

<?php
date_default_timezone_set('Australia/Melbourne');
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 



if(isset($_POST['Assign']))
{


$UpdateTable = "update reservation_tbl set Cost='$_POST[Cost]', Paid= '$_POST[Paid]', PaymentDate='$_POST[PaymentDate]' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    header("Location: http://canaofgalilee.info/payments.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);

}

?>