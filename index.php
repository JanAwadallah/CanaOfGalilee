<?php
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_counts";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 $sql ="select * from counts_tbl";
  $records = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($records)) 
   {
   $current_count = $row['current'];
   $New_count = $current_count + 1;
   $update = "UPDATE `counts_tbl` SET `current`= $New_count";
   $update_counts = mysqli_query($conn, $update);
   
   }

?>


<!DOCTYPE HTML>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Cana of Galilee Married Couples Meeting</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 
  <link rel="stylesheet" type="text/css" href="style/style2.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 
<style type="text/css">
      div.container{
      background-image: url("css/SunOfRighteousness copy.jpg");
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center;
       background-size: 100% 100%; 
        background-color: rgba(192,192,192,0.8);
        margin-top: 25px;
    }
     div.body{
      background-color: rgba(192,192,192,0.8);
      text-align: center;
      font-weight: bold;
      width: 100%;
      height: 100%;

    }
      .body h2{
      color: #071163;
      font-size: 2em;
      font-family: 'Chonburi', cursive;
      text-align: center;
      font-weight: bold;
    }
      .body p{
      color: black;
      font-size: 1.5em;
      /*font-family: 'Chonburi', cursive;*/
      text-align: center;
      font-weight: bold;
      line-height: 30px;

    }
    </style>
</head>

<body>
  <!-- <div class="container"> -->

  <!-- <div id="main">
    <img src="style\logo.jpg" class="img-fluid">
   
  </div>  -->
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><img src="style\Cana.jpg" style="width: 100px; height: 50px;"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Retreat 2018 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="RetreatVenue.html">Retreat venue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Register.html">Register</a>
      </li>
      </ul>
         <span class="navbar-text">

       <a class="nav-link disabled" href="https://www.facebook.com/SGChurchmelbourne/" target="_blank"><img src="style\find-us-on-facebook-button.png" style="width: 100px; height: 50px;"></a>
    </span>
     
     
   
  </div>
</nav>
 


      <div class="container">
        <div class="body">
        <h2>Welcome to Cana of Galilee Married Couples Meeting <br><span>Annual retreat 2018</span></h1>
        <p>We are so pleased to invite you, a memorable adventure again!</p>
        <p>We've got to take a journey. One that involves a commitment, a joy, an adventure and a point of no return.</p>
        <p>Through teaching sessions, videos, guided periods of reflections, questions, answers and small group discussions, this will be something far more than a retreat-its an expedition of the heart.</p>
        <p>The adventure will begin on the afternoon of Friday, November 16'th at 12:00 pm It'll be based at Great Ocean Road Resort.</p>
        
        <p>Our prayer is that this weekend will be a blessing to all of us.</p>
        <h2>God Bless</h2>
     </div>
   
  </div>
    
   


    <div id="footer">
      <p><a href="index.html">Retreat 2018</a> | <a href="RetreatVenue.html">Retreat venue</a> | <a href="Register.html">Register</a></p>
      
        <button type="button" class="btn btn-primary">
  Visitor <span class="badge badge-light"><?php echo $New_count ?></span>
  <span class="sr-only">unread messages</span>
</button>

    </div>
 
  
  <script src="http://code.jquery.com/jquery-latest.min.js"></script> <script src="js/bootstrap.min.js"></script> <script> $(function(){ $('.nav-tabs a:first').tab('show'); }); </script>
</body>



 <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
