

<?php

$dbname = 'charliesfarm';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 



$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);




if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

if($_SERVER['REQUEST_METHOD']==='POST'){
    $temp = test_input($_POST["temp"]);
    $humidity = test_input($_POST["humidity"]);
    $water_temp = test_input($_POST["water_temp"]);
    $pH = test_input($_POST["pH"]);
    $ec= test_input($_POST["ec"]);
    $ph_up_pump= test_input($_POST["ph_up_pump"]);
    $ph_down_pump= test_input($_POST["ph_down_pump"]);
    $pmp_a= test_input($_POST["pmp_a"]);
    $pmp_b= test_input($_POST["pmp_b"]);


    $query = "INSERT INTO sensordata (temp, humidity,water_temp,pH,ec,ph_up_pump,ph_down_pump,pmp_a,pmp_b) VALUES ('".$temp."', '".$humidity."','".$water_temp."','".$pH."','".$ec."','".$ph_up_pump."','".$ph_down_pump."','".$pmp_a."','".$pmp_b."')";
    $result = mysqli_query($connect,$query);

    echo "Insertion Success!<br>"; 
}
if($_SERVER['REQUEST_METHOD']==='GET'){
    
    $SQL = "SELECT * FROM sensordata;";
    echo "GET request!<br>"; 
 }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}