



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body class="container">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Start a new Reservation</h1>
    <p class="lead">Please fill in the following details</p>
  </div>
</div>

<form class="needs-validation" form method="post" action="connect.php">
  <div class="row">
  <!-- <div class="form-row"> -->
    <div class="col">
      <label for="01">Husband Name</label>
      <input name="HusbandName" type="text" class="form-control"  placeholder="Name"  required>
      <div class="valid-tooltip">
      </div>
            <label for="01">E-mail Address</label>
      <input name="e-mail" type="text" class="form-control"  placeholder="e-mail"  required>
      <div class="valid-tooltip">
      </div>
    </div>
    <div class="col">
      <label for="validationTooltip02">Wife Name</label>
      <input name="WifeName" type="text" class="form-control"  placeholder="Partner Name"  required>
      <div class="valid-tooltip">
    
      </div>
    </div>

    <div class="col">
      <label for="validationTooltip02">Kids</label>
      <input name="KidsNumber" type="number" min="0" class="form-control"  placeholder="Number"  required>
      <div class="valid-tooltip">
    
      </div>
    </div>
  
    <div class="col">
      <label for="validationTooltip05">1st Choice</label>

<!--<input name="RoomFirst" type="text" class="form-control" id="validationTooltip02" placeholder="1st Choice"  required>-->
<select name='RoomFirst' required>
    <option value=''>Please Select your first choice</option>
    <option value="Studio Suite - 340">Studio Suite - $340</option>
    <option value="Spa Suite - $345">Spa Suite - $345</option>
    <option value="One bedroom Suite - $350">One bedroom Suite - $350</option>
    <option value="Twin Share - $350">Twin Share - $350</option>
    <option value="Two Bedroom Suite - $580">Two Bedroom Suite - $580</option>
    <option value="Two Bedroom Deluxe Apartment - $590">Two Bedroom Deluxe Apartment - $590</option>
    <option value="Two Bedroom Waterfront Apartment - $600">Two Bedroom Waterfront Apartment - $600</option>
    
</select>


<label for="validationTooltip05">2nd Choice</label>

 <!--<input name="RoomSecond" type="text" class="form-control" id="validationTooltip02" placeholder="2nd Choice"  required>-->
<select name='RoomSecond' required>
    <option value=''>Please Select your second choice</option>
    <option value="Studio Suite - 340">Studio Suite - $340</option>
    <option value="Spa Suite - $345">Spa Suite - $345</option>
    <option value="One bedroom Suite - $350">One bedroom Suite - $350</option>
    <option value="Twin Share - $350">Twin Share - $350</option>
    <option value="Two Bedroom Suite - $580">Two Bedroom Suite - $580</option>
    <option value="Two Bedroom Deluxe Apartment - $590">Two Bedroom Deluxe Apartment - $590</option>
    <option value="Two Bedroom Waterfront Apartment - $600">Two Bedroom Waterfront Apartment - $600</option>
    
</select>
    
 

      <label for="validationTooltip05">3rd Choice</label>

<!--<input name="RoomThird" type="text" class="form-control" id="validationTooltip02" placeholder="3rd Choice"  required>-->
<select name='RoomThird' required>
    <option value=''>Please Select your third choice</option>
    <option value="Studio Suite - 340">Studio Suite - $340</option>
    <option value="Spa Suite - $345">Spa Suite - $345</option>
    <option value="One bedroom Suite - $350">One bedroom Suite - $350</option>
    <option value="Twin Share - $350">Twin Share - $350</option>
    <option value="Two Bedroom Suite - $580">Two Bedroom Suite - $580</option>
    <option value="Two Bedroom Deluxe Apartment - $590">Two Bedroom Deluxe Apartment - $590</option>
    <option value="Two Bedroom Waterfront Apartment - $600">Two Bedroom Waterfront Apartment - $600</option>
    
</select>
<input name="ShareWith" type="text" class="form-control" id="01" placeholder="Share With">
    <!--   <div class="invalid-tooltip">
      <div class="invalid-tooltip">
     
      </div>
    </div> -->
    <button class="btn btn-primary" type="submit">Submit</button>

  </div>



</form>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>