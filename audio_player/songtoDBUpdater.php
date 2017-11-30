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


$table="songList";


$file = "DefaultPlaylist3.txt";
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
            
                $sqlQuery = "UPDATE $table
							SET moods = '$moods', colors = '$colors'
							WHERE songname = '$songname'";
				
                           //$start = $start + 5;
                
                $result = mysqli_query($db, $sqlQuery);
                
                if ($result) {
                    echo "<h3>The entry has been updated in the database</h3>";
                } else { 				   
                    echo "Updating records failed.".mysqli_error($db);
                }
            
            //}
        }

$conn->close();
?>
</html>