<?php
	
    // $dbName = 'charliesfarm' ;
    // $dbHost = 'localhost' ;
    // $dbUsername = 'root';
    // $dbUserPassword = '';
        
    // $conn = mysqli_connect($dbHost, $dbUsername, $dbUserPassword, $dbName );
		
   
    //Get Heroku ClearDB connection information

$cleardb_server = "us-cdbr-east-05.cleardb.net";
$cleardb_username = "b91483d47a3214";
$cleardb_password = "b7b270b2";
$cleardb_db = "heroku_bb2becdba3767a9";

// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>