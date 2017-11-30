<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "moodmusic";
$password = "moodpass";

// Create connection
$conn = new mysqli("localhost", $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE moodmusicDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else if (strpos($conn->error, "database exists")) {

} else {
    echo "Error creating database: " . $conn->error;
}

$sqlQuery = "CREATE TABLE songList (
songname VARCHAR(30) NOT NULL,
artist VARCHAR(30) NOT NULL,
moods VARCHAR(30) NOT NULL,
colors VARCHAR(30) NOT NULL
)";

$base = "moodMusicDB";

$db = connectToDB($servername, $username, $password, $base);

function connectToDB($host, $user, $password, $database) {
	$db = mysqli_connect($host, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Connect failed.\n".mysqli_connect_error();
		exit();
	}
	return $db;
}

$result = mysqli_query($db, $sqlQuery);
                
                if ($result) {
                    echo "Table creation success.";
                } else if (strpos(mysqli_error($db), "already exists")) { 				   
                    
                } else {
					echo "Table creation failed.".mysqli_error($db);
				}

$table="songList";


$file = "DefaultPlaylist2.txt";
        $file = fopen($file, "r") or die("Unable to open file!");
        echo '<ul id="playlist">';
        $start = 0;
        while(!feof($file)) {
            
                       
            $line = fgets($file);
            if($line === false) break;
            $array = explode("||", $line);
            //while ( $start < (sizeof($array)-1) ) {
                
                $songname = $array[$start];
                $artist = $array[$start+1];
                $moods = $array[$start+3];
                $colors =$array[$start+4];
            
                $sqlQuery = sprintf("insert into $table (songname,artist, moods, colors) values ('%s', '%s', '%s', '%s')", 
                    $songname, $artist, $moods, $colors);
            
                //$start = $start + 5;
                
                $result = mysqli_query($db, $sqlQuery);
                
                if ($result) {
                    echo "<h3>The entry has been added to the database</h3>";
                } else { 				   
                    echo "Inserting records failed.".mysqli_error($db);
                }
            
            //}
        }

$conn->close();
?>
</html>