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




<title>Reports</title>
</head>
<body>
    
    


<form method="post" action="Reports.php">
    
     <select name='Type'>
         <option value="">Choose filter</option>
    <option value="Studio Suite - $320">Studio Suite - $320</option>
    <option value="Spa Suite - $330">Spa Suite - $330</option>
    <option value="Twin Share - $330">Twin Share - $330</option>
    <option value="One bedroom Suite - $340">One bedroom Suite - $340</option>
    <option value="Two Bedroom Suite - $550">Two Bedroom Suite - $550</option>
    <option value="Two Bedroom Deluxe Apartment - $560">Two Bedroom Deluxe Apartment - $560</option>
    <option value="Two Bedroom Waterfront Apartment - $600">Two Bedroom Waterfront Apartment - $600</option>
</select>
    <button type="submit">Filter</button>
</form>

<?php


$Report = filter_input(INPUT_POST, 'Type');
$Report=str_replace(' ', '-', $Report);
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


 

 $sql ="select * from reservation_tbl where AcceptedChoice='$Report'";
  $records = mysqli_query($conn, $sql);

?>





<div class="table-responsive">
<table style="width: 100%;" class="table table-hover">
  <thead>
    <tr>
      
      <th>Husband's Name</th>
      <th>AcceptedChoice</th>
      <th>Room#</th>
      
    </tr>
  </thead>
  
  <tbody>

  
 <?php
   while($row = mysqli_fetch_array($records)) 

   {

    echo "<tr>";
    
    
    
    echo "<td> ".$row[ 'HusbandName' ]." </td>";
        echo "<td> ".$row[ 'AcceptedChoice' ]." </td>";
    echo "<td><input type=text name=Room value=' ".$row['Room']." '>";
    echo "<td><input type=hidden name=ID value=' ".$row['ID']." '>";
    echo "</tr>";
    
    }
echo "Filtered for "  .$Report;
 
    if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<div>Total $rowcount</div>";
  // Free result set
//   mysqli_free_result($result);
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


