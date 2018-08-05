<div class="div" class="container">
  <div id="jumbo" class="jumbotron jumbotron-fluid">
    <div class="container">
      <div id="pageTitle">
	       <h2 id="h2" style="display: inline;">Accepted Reservations </h2>
      </div><br>
    </div>
  </div>



<div class="container">

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


<title>Accepted Reservations</title>
</head>
<body>

<?php



$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


 

 $sql ="select * from reservation_tbl where Approved='Yes' order by ReservationDate";
  $records = mysqli_query($conn, $sql);

?>





<div class="table-responsive">
<table style="width: 100%;" class="table table-hover">
  <thead>
    <tr>
      
      <th>Husband's Name</th>
      <th>Wife's Name</th>
      <th>#of Kids</th>
      <!--<th>1st Choice</th>-->
      <!--<th>2nd Choice</th>-->
      <!--<th>3rd Choice</th>-->
      <th>Sharing with</th>
      <th>Date</th>
      <th>AcceptedChoice</th>
      <th>Room#</th>
      <th>Assign</th>
      
    </tr>
  </thead>
  
  <tbody>

  
 <?php
   while($row = mysqli_fetch_array($records)) 

   {

    echo "<tr><form action='e-mail.php' method=post>";
    
    
    
    echo "<td> ".$row[ 'HusbandName' ]." </td>";
    echo "<td>".$row['WifeName']."</td>";
    echo "<td>".$row['KidsNumber']."</td>";
    // echo "<td>".$row['RoomFirst']."</td>";
    // echo "<td>".$row['RoomSecond']."</td>";
    // echo "<td>".$row['RoomThird']."</td>";
    echo "<td>".$row['ShareWith']."</td>";
    echo "<td>".$row['ReservationDate']."</td>";
    echo "<td><select place name='AcceptedChoice'>";
    echo "<option value=".$row['AcceptedChoice'].">".$row['AcceptedChoice']."</option>";
    echo "<option value=".$row['RoomFirst'].">1st->".$row['RoomFirst']."</option>";
    echo "<option value=".$row['RoomSecond'].">2nd->".$row['RoomSecond']."</option>";
    echo "<option value=".$row['RoomThird'].">3rd->".$row['RoomThird']."</option>";
    echo "</select></td>";
 
    // echo "<td><input type=text name=Room value=' ".$row['AcceptedChoice']." '>";
    echo "<td><input type=text name=Room value=' ".$row['Room']." '>";
    echo "<td><input type=submit name=Assign value=Assign>";
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


