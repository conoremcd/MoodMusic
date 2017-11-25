<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Media Player</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
  <div class="navbar" id="title">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()" id="openNav">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
      <marquee behavior="scroll" direction="left" id="scrolling">This should print out the song information here </marquee>
    </span>
  </div>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()" style="text-decoration: none">&times;</a>
    <div id="logo">
      <img src="logo.png" width="150px" height="150px" style="padding-left: 30px">
    </div>
    <strong id="changeMoodTitle" style="padding-left: 55px; color: white;">Change Mood</strong>
    <hr>
    <strong id="changebyColorTitle" style="padding-left: 55px; color: white;">Color Selection</strong>
    <br>
    <div id="color">
      <img src="logo.png" width="150px" height="150px" style="padding-left: 30px">
    </div><hr>
    <br>
    <div id="mood">
      <strong id="changebyMoodTitle" style="padding-left: 55px; color: white;">Mood Selection</strong><br><br>
      <font color="white">Print out the list of moods from the database we have</font>
      <ul style="color: white">
        <li>Happy</li>
        <li>Sad</li>
        <li>Etc...</li>
      </ul>
    </div><br><br><br><br>
  </div>

  <div id="main">
    <h1>Main page</h1>
      this will change according to what the user selects. it should be defaulted to the album picture
    <?php
        echo "<audio src='' controls id='audioPlayer' style='display: none'></audio>";
        $file = "DefaultPlaylist.txt";
        $file = fopen($file, "r") or die("Unable to open file!");
        echo '<ul id="playlist">';
        $start = 1;
        while(!feof($file)) {
            $line = fgets($file);
            if($line === false) break;
            $array = explode("||", $line);
            if ($start === 1) {
                echo "<li class='current-song' style='display: none'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
                $start = 0;
            }else {
                echo "<li style='display: none'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
            }
        }
        echo '</ul>';
    ?>
  </div>
  <header id="toolbar">
  </header>
  <header>
    <span id="playBtn" ">
      <i id="play" class="fa fa-play-circle" style="font-size:80px; display: none" onclick="playSwitch()"></i>
    </span>
  </header>
  <header>
    <span id="pauseBtn" ">
      <i id="pause" class="fa fa-pause-circle" style="font-size:80px;" onclick="pauseSwitch()"></i>
    </span>
  </header>
  <header>
    <span id="forwardBtn" ">
      <i id="next" class="fa fa-step-forward"  style="font-size:55px;"></i>
    </span>
  </header>
  <header>
    <span id="backBtn"">
      <i id="previous" class="fa fa-step-backward"  style="font-size:55px;"></i>
    </span>
  </header>
  <header>
    <span id="fullscrnBtn" ">
      <i id="fullBtn" class="fa fa-expand"  style="font-size:40px;"></i>
    </span>
  </header>
  <header>
    <span id="ratingBtn"">
      <i id="rating" class="fa fa-pencil-square"  style="font-size:60px;"></i>
    </span>
  </header>
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
      document.getElementById('toolbar').style.marginLeft = '250px';
      document.getElementById('title').style.marginLeft = '250px';
      document.getElementById("openNav").style.display = 'none';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
      document.getElementById('toolbar').style.marginLeft = '0';
      document.getElementById('title').style.marginLeft = '0';
      document.getElementById("openNav").style.display = "inline-block";
    }
    
    function playSwitch() {
        document.getElementById('play').style.display = 'none';
        document.getElementById('pause').style.display = 'inline-block';

    }
    function pauseSwitch() {
        document.getElementById('play').style.display = 'inline-block';
        document.getElementById('pause').style.display = 'none';

    }
  </script>
  <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
  <script src="audioPlayer.js"></script>
  <script>
      audioPlayer();
  </script>
</body>
</html>
