<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <title>Mood Music Player</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="css/page_template.css">
	  <link rel="stylesheet" href="css/m_player.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/audioPlayer.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	</head>
	<body>
		<!-- Mobile Elements -->
		<div class="container-fluid visible-xs-block pnl">
			<div class="row title-pnl">
				<div class="col-xs-1"></div>
				<div class="col-xs-10">
					<div class="player-title">
						<h6 id="song-title" class="lt-h">Song Title</h6>
						<h6 id="album-title" class="gr-h">Album Title</h6>
					</div>
				</div>
				<div class="col-xs-1"></div>
			</div>
			<div class="row player-pnl lt-pnl">
				<div class="col-xs-12 bmprbx pnl">
					<div class="player-img horizontal-align">
						<!-- album art image here -->
						
					</div>
				</div>
			</div>
			<div class="row info-pnl">
				<div class="col-xs12 bmprbx">
					<span class="horizontal-align">progress bar</span>
				</div>
			</div>
			<div class="row control-pnl vertical-align">
				<div class="col-xs-12">
					<div class="audio-btn-group">
						<button id="previous-m" class="audio-btn lt-btn">
							<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_previous</i>
						</button>
						<button id="play-m" class="play audio-btn lt-btn hidden">
							<i class="material-icons" style="font-size: 36px; vertical-align: middle;">play_arrow</i>
						</button>
						<button id="pause-m" class="pause audio-btn lt-btn">
							<i class="material-icons" style="font-size: 36px; vertical-align: middle;">pause</i>
						</button>
						<button id="next-m" class="audio-btn lt-btn">
							<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_next</i>
						</button>
					</div>
				</div>
			</div>
			<div class="row edit-pnl">
				<div class="col-xs-3 bmprbx">
					<form action="colorRequestor.php" onsubmit="getColor(this)" method="post">
						<button id="ch_color" class="clr-btn edit-btn lt-btn horizontal-align"  type="submit">
							<img src="images/change-color.svg" alt="hi">
						</button>
					</form>
				</div>
				<div class="col-xs-3 bmprbx">
					<form action="requestor.php" onsubmit="getColor(this)" method="post">
						<button class="edit-btn lt-btn horizontal-align"  type="submit">
							<i class="material-icons" style="font-size: 20px; vertical-align: middle;">queue_music</i>
						</button>
					</form>
				</div>
				<div class="col-xs-3 bmprbx">
					<button class="edit-btn lt-btn horizontal-align">
						<i class="material-icons" style="font-size: 20px; vertical-align: middle;">add</i>
					</button>
				</div>
				<div class="col-xs-3 bmprbx">
					<button class="edit-btn lt-btn horizontal-align">
						<i class="material-icons" style="font-size: 20px; vertical-align: middle;">create</i>
					</button>
				</div>
			</div>
		</div



		<!-- Desktop Elements -->
		<div class="container-fluid hidden-xs pnl">
			<div class="row pnl">
				<div class="sd-br col-sm-2">
					<div class="row">
						<div class="col-sm-5 bmprbx">
							<a href="mood_select.html"><img src="images/logo.svg" width="60" height="60" alt=""></a>
						</div>
						<div class="col-sm-7"></div>
					</div>
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-11">
							<h4 class="drk-h">CHANGE MOOD</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6 class="top-brdr">SELECT COLOR</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 col-md-7">
<!--							<form action="colorRequestor.php" onsubmit="return getColor(this)" method="post">-->
								<button id="ch_color" class="clr-btn drk-btn btn btn-sm btn-block btm-bmpr" onclick="colorPanelSlider()">
									<img src="images/change-color.svg" alt="">
								</button>
<!--							</form>-->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6 class="top-brdr">SELECT MOOD</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
<!--						<form action="music_player.html" onsubmit="return getMood(this)" method="post">-->
							<form action="m_player.php" method="post">
								<ul class="nav">
								<!-- on load, generate an unordered list of possible moods as button links -->
									<li>
										<input class="link-btn" type="submit" value="happy" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="angry" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="sad" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="excited" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="relaxed" name="moodPref">
									</li>
								</ul>
							</form>
						</div>
					</div>	
				</div>
				<div class="col-sm-10 pnl">
					<!-- Desktop Center Panel (album art and song editing windows) -->
					<div class="row center-pnl">
						<div class="col-sm-12" >
							<!-- Desktop Album Info Panel -->
                            <div id="album-info" class="row">
                                <div class="col-sm-2"></div>
								<div class="col-sm-8 bmprbx">
									<div class="player-img-lg"></div>
								</div>
								<div class="col-sm-2"></div>
                            </div>
						
							<!-- Desktop Song Data Editing Panel -->
                            <div id="edit-pnl" class="row hidden">
								<div class="col-sm-12">
									<div class="row bmprbx">
										<h5 class="drk-h">How does this song make you feel?</h5>
									</div>
								    <div class="row bmprbx">
										<div class="col-sm-3"></div>
								        <div class="col-xs-4 col-sm-2 horizontal-align">
								            <button class="clr-slct-btn rd" name="colorPref" value="red"></button>
								        </div>
										<div class="col-xs-4 col-sm-2 horizontal-align">
											<button class="clr-slct-btn orng" name="colorPref" value="orange"></button>
									    </div>
									    <div class="col-xs-4 col-sm-2 horizontal-align">
									        <button class="clr-slct-btn yllw" name="colorPref" value="yellow"></button>
									    </div>
									    <div class="col-sm-3"></div>
									</div>
									<div class="row bmprbx">
									    <div class="col-sm-3"></div>
									    <div class="col-xs-4 col-sm-2 horizontal-align">
									        <button class="clr-slct-btn grn" name="colorPref" value="green"></button>
									    </div>
									    <div class="col-xs-4 col-sm-2 horizontal-align">
									        <button class="clr-slct-btn blu" name="colorPref" value="blue"></button>
										</div>
									    <div class="col-xs-4 col-sm-2 horizontal-align">
										    <button class="clr-slct-btn prpl" name="colorPref" value="purple"></button>
									    </div>
									    <div class="col-sm-3"></div>
								    </div>
								</div>
                            </div>
						</div>
					</div>
					
					<!-- Desktop Audio Control Panel -->
					<div class="row drk-pnl control-pnl vertical-align">
						<div class="col-sm-3">
							<button id="add" class="edit-btn gr-btn horizontal-align">
								<i class="material-icons" style="font-size: 20px; vertical-align: middle;">add</i>
							</button>
						</div>
						<div class="col-sm-6">
							<div class="audio-btn-group">
								<button id="previous" class="audio-btn gr-btn">
									<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_previous</i>
								</button>
								<button id="play" class="play audio-btn gr-btn hidden">
									<i class="material-icons" style="font-size: 36px; vertical-align: middle;">play_arrow</i>
								</button>
								<button id="pause" class="pause audio-btn gr-btn">
									<i class="material-icons" style="font-size: 36px; vertical-align: middle;">pause</i>
								</button>
								<button id="next" class="audio-btn gr-btn">
									<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_next</i>
								</button>
							</div>
						</div>
						<div class="col-sm-3">
							<button id="edit" class="edit-btn gr-btn horizontal-align">
								<i class="material-icons" style="font-size: 20px; vertical-align: middle;">create</i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--        Creates the slide bar for select color-->
<!--        Need to change the z-index of the main sidebar so that this slide bar is just right behind it.-->
<!--        Just needs to bigger than 1-->
        <div id="sideNav" class="sd-nav">
            <a href="#" class="btn-close" onclick="closeNav()">&times;</a>
        </div>
<!---->
        <div class="col-sm-3 col-md-5"></div>
		<footer class="container-fluid footer">
			<div class="row">
				<div class="col-xs-1 col-sm-1"></div>
				<div class="col-xs-9 col-sm-10">
					Copyright &copy; 2017 All Rights Reserved
				</div>
				<div class="col-xs-2 col-sm-1"></div>
			</div>
		</footer>
	</body>
	
	<?php
	
	$mood = "happy";
	$color = "";
	
	if (isset($_POST['colorPref'])) {
		$color = $_POST['colorPref'];
		$mood=null;
	}
	
	if (isset($_POST['moodPref'])) {
			$mood = $_POST['moodPref'];
			$color=null;
	}
	
    echo "<audio src='' controls id='audioPlayer' style='display: none'></audio>";
    $file = "audio_player/DefaultPlaylist.txt";
    $file = fopen($file, "r") or die("Unable to open file!");
    echo '<ul id="playlist">';
    $start = 1;
		
    while(!feof($file)) {
				
		
        $line = fgets($file);
        if($line === false) break;
        $array = explode("||", $line);
        
		//echo "<pre>".$array[3]."/n"."</pre>";
		
		if ( ( ( ( $mood != null ) && strpos($array[3], $mood) ) || (strpos($array[4], $color)) ) || ($mood==null
																										&& $color==null)) {
		
			if ($start === 1) {
				echo "<li class='current-song' style='display: none;'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
				$start = 0;
			} else {
				echo "<li style='display: none;'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
			}
		
		} 
    }
    echo '</ul>';
    ?>
    <script>
		audioPlayer();
		
		function colorPanelSlider(){
           document.getElementById("sideNav").style.width = "60em";
		}

		function closeNav() {
			document.getElementById("sideNav").style.width = "0";
		}
    </script>
</html>
