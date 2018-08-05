<div class="div" class="container">
  <div id="jumbo" class="jumbotron jumbotron-fluid">
    <div class="container">
      <div id="pageTitle">
	       <h2 id="h2" style="display: inline;">Accepted Reservations </h2>
      </div><br>
    </div>
  </div>



<div class="">

<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <script>
$(document).ready(function(){
    $("input").click(function(){
        $("td").css("color", "red");
    });
});
</script> -->


<title>Payments</title>
</head>
<body>

<?php



$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


 

 $sql ="select *,
 Cost - Paid as 'Outstanding'
 from reservation_tbl where Approved='Yes' order by ID";
  $records = mysqli_query($conn, $sql);

?>





<div class="table-responsive">
<table style="width: 100%;" class="table table-hover">
  <thead>
    <tr>
      
      <th>Husband's Name</th>
      <th>E-mail</th>
      <th>AcceptedChoice</th>
      <th>Room#</th>
      <th>Cost</th>
      <th>Paid</th>
      <th>Outstanding</th>
      <th>Payment Date</th>
      
    </tr>
  </thead>
  
  <tbody>

  
 <?php
   while($row = mysqli_fetch_array($records)) 

   {

    echo "<tr><form action='payment.php' method=post>";
    
    
    
    echo "<td> ".$row[ 'HusbandName' ]." </td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['AcceptedChoice']."</td>";
    echo "<td>".$row['Room']."</td>";
    echo "<td><input style='width: 60px' type=text name=Cost value=' ".$row['Cost']." '>";    
    echo "<td><input style='width: 60px' type=text name=Paid value=' ".$row['Paid']." '>";     
    echo "<td><input style='width: 60px' type=text name=Outstanding value=' ".$row['Outstanding']." '>";  
echo "<td><input style='width: 100px' type=text name=PaymentDate value=' ".$row['PaymentDate']." '>";    
    echo "<td><input type=submit name=Assign value=OK>";
    echo"<input type=hidden name=Assign value=1";
    echo "<td><input type=hidden name=email value=' ".$row['email']." '>";
    echo "<td><input type=hidden name=HusbandName value=' ".$row['HusbandName']." '>";
    echo "<td><input type=hidden name=ID value=' ".$row['ID']." '>";
    echo "</form></tr>";
    
    }

  ?>
  </tbody>
  </table>
 <div id='wrap'>
 </div>
  



</div>
</div>

</body>
</html>


