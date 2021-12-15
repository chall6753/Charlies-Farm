<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5" >
    <link rel="stylesheet" type="text/css" href="src/style.css" media="screen"/>

	<title> Sensor Data </title>

</head>

<body>

    <h1>SENSOR DATA</h1>
    <button id='relay1' type='button' value='on'>on/off</button>
<?php
    // include_once 'database.php';
     //Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, temp_air, humidity,temp_water, date FROM sensor_data ORDER BY id DESC"; /*select items to display from the sensordata table in the data base*/
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);


echo '<button type="button" value="on">asdf</button>';
echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <th>ID</th> 
        <th>Date - Time</th> 
        <th>Temperature &deg;C</th> 
        <th>Humidity &#37;</th>
        <th>Water Temp &deg;C</th>
             
      </tr>';


if ($resultCheck >0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row_id = $row["id"];
        $row_date = $row["date"];
        $row_temp = $row["temp"];
        $row_humidity = $row["humidity"];
        $row_water_temp = $row["water_temp"];
      
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_date . '</td> 
                <td>' . $row_temp . '</td> 
                <td>' . $row_humidity . '</td> 
                <td>' . $row_water_temp . '</td> 

               
                
              </tr>';


        
    }
    $result->free();
}

$conn->close();
?> 
</body>

    <script src='index.js'></script>
</html>