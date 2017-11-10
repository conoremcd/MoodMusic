<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audio Player</title>
    <style>
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color: black;
            text-decoration: none;
        }
        #playlist .current-song a{
            color: blue;
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>
<body>
<?php
    echo "<audio src='' controls id='audioPlayer'></audio>";
    $file = "DefaultPlaylist.txt";
    $file = fopen($file, "r") or die("Unable to open file!");
    echo '<ul id="playlist">';
    $start = 1;
    while(!feof($file)) {
        $line = fgets($file);
        if($line === false) break;
        $array = explode("||", $line);
        if ($start === 1) {
            echo "<li class='current-song'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
            $start = 0;
        }else {
            echo "<li><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
        }
    }
    echo '</ul>';
?>

<input type="button" id="previous" value="Previous Song">
<input type="button" id="next" value="Next Song">
<input type="button" id="pause" value="Pause">
<input type="button" id="play" value="Play">


<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="audioPlayer.js"></script>
<script>
    audioPlayer();
</script>
</body>
</html>