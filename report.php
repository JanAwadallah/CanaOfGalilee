

<?php
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";
$Report = filter_input(INPUT_POST, 'Type');



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


    echo $Report;