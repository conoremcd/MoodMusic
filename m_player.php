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
	  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/audioPlayer.js"></script>
	</head>
	<body>
		<!-- Mobile Elements -->
		<div class="container-fluid visible-xs-block pnl">
			
			<!-- Color Select Side Nav -->
			<div class="positioned">
				<div id="side-nav-m" class="sd-nav">
					<div class="container-fluid">
						<div class="row">
							<button id="close-btn-m" class="cls-btn gr-btn">
								<i class="material-icons">clear</i>
							</button>
						</div>
						<div class="row">
							<div class="container-fluid">
								<div class="row bmprbx">
									<h4 class="lt-h horizontal-align sd-nav-cntnt">How do you feel?</h4>
								</div>
								<div class="row bmprbx">
									<p class="gr-h horizontal-align sd-nav-cntnt">Select a color and click Load Playlist!</p>
								</div>
								<div class="row bmprbx">
									<div class="col-sm-3"></div>
								    <div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn rd sd-nav-cntnt" name="colorPref" value="red"></button>
								    </div>
									<div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn orng sd-nav-cntnt" name="colorPref" value="orange"></button>
									</div>
									<div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn yllw sd-nav-cntnt" name="colorPref" value="yellow"></button>
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="row bmprbx">
									<div class="col-sm-3"></div>
									<div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn grn sd-nav-cntnt" name="colorPref" value="green"></button>
									</div>
									<div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn blu sd-nav-cntnt" name="colorPref" value="blue"></button>
									</div>
									<div class="col-xs-4 col-sm-2 horizontal-align">
										<button class="clr-slct-btn prpl sd-nav-cntnt" name="colorPref" value="purple"></button>
									</div>
									<div class="col-sm-3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
			<div class="row info-pnl">
				<div class="col-xs-12 pnl bmprbx">
					<!-- Mobile Album Info Panel -->
                    <div id="album-info-m" class="row pnl">
                        <div class="col-xs-12 pnl">
							<div class="row player-pnl">
								<div class="player-img-sm"></div>
							</div>
							<div class="row progress-pnl">
								<p style="text-align: center">progress bar</p>
							</div>
						</div>
                    </div>
						
					<!-- Mobile Song Data Editing Panel -->
                    <div id="edit-pnl-m" class="row hidden">
						<div class="col-xs-12">
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
					<button id="ch-clr-m" class="clr-btn edit-btn lt-btn horizontal-align">
						<img src="images/change-color.svg" alt="hi">
					</button>
				</div>
				<div class="col-xs-3 bmprbx">
					<button class="edit-btn lt-btn horizontal-align"  type="submit">
						<i class="material-icons" style="font-size: 20px; vertical-align: middle;">queue_music</i>
					</button>
				</div>
				<div class="col-xs-3 bmprbx">
					<button id="add-m" class="edit-btn lt-btn horizontal-align">
						<i class="material-icons" style="font-size: 20px; vertical-align: middle;">add</i>
					</button>
				</div>
				<div class="col-xs-3 bmprbx">
					<button id="edit-m" class="edit-btn lt-btn horizontal-align">
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
							<button id="ch-clr" class="clr-btn drk-btn btn btn-sm btn-block btm-bmpr">
								<img src="images/change-color.svg" alt="">
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6 class="top-brdr">SELECT MOOD</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<form action="m_player.php" method="post">
								<ul class="nav">
								<!-- on load, generate an unordered list of possible moods as button links -->
									<li>
										<input class="link-btn" type="submit" value="Enjoying Life" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="Furious" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="Pick Me Up" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="Pumped Up" name="moodPref">
									</li>
									<li>
										<input class="link-btn" type="submit" value="Chilled Out" name="moodPref">
									</li>
								</ul>
							</form>
						</div>
					</div>	
				</div>
				<div class="col-sm-10 pnl">
					<!-- Desktop Center Panel (album art and song editing windows) -->
					<div class="row center-pnl">
						<div class="col-sm-12 pnl">
							
							<!-- Desktop Color Select Panel -->
							<div class="positioned">
								<div id="side-nav" class="sd-nav">
									<div class="container-fluid">
										<div class="row">
											<button id="close-btn" class="cls-btn gr-btn">
												<i class="material-icons">clear</i>
											</button>
										</div>
										<div class="row">
											<div class="container-fluid">
												<div class="row bmprbx">
													<h4 class="lt-h horizontal-align sd-nav-cntnt">How do you feel?</h4>
												</div>
												<div class="row bmprbx">
													<p class="gr-h horizontal-align sd-nav-cntnt">Select a color and click Load Playlist!</p>
												</div>
                                                <form action="m_player.php" method="post">
                                                	<div data-toggle="buttons">
	                                                    <div class="row bmprbx">
	                                                        <div class="col-sm-2"></div>
	                                                        <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                            <label class="btn clr-slct-btn rd">
																	<input class="color-radio-btn" type="radio" name="colorPref" value="red" autocomplete="off" checked="checked">
																</label>
	                                                        </div>
	                                                        <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                            <label class="btn clr-slct-btn orng">
																	<input class="color-radio-btn" type="radio" name="colorPref" value="orange" autocomplete="off" >
																</label>
	                                                        </div>
	                                                        <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                            <label class="btn clr-slct-btn yllw">
																	<input class="color-radio-btn" type="radio" name="colorPref" value="yellow" autocomplete="off" >
																</label>
	                                                        </div>
	                                                        <div class="col-sm-1"></div>
	                                                    </div>
	                                                    <div class="row bmprbx">
	                                                        <div class="col-sm-2"></div>
	                                                            <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                                <label class="btn clr-slct-btn grn">
																		<input class="color-radio-btn" type="radio" name="colorPref" value="green" autocomplete="off" >
																	</label>
	                                                            </div>
	                                                            <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                                <label class="btn clr-slct-btn blu">
																		<input class="color-radio-btn" type="radio" name="colorPref" value="blue" autocomplete="off" >
																	</label>
	                                                            </div>
	                                                            <div class="col-xs-4 col-sm-3 horizontal-align">
	                                                                <label class="btn clr-slct-btn prpl">
																		<input class="color-radio-btn" type="radio" name="colorPref" value="purple" autocomplete="off" >
																	</label>
	                                                            </div>
	                                                        <div class="col-sm-1"></div>
	                                                    </div>
                                                    </div>
													<div class="row bmprbox">
														<br>
														<br>
														<div class="col-sm-8"></div>
														<div class="col-sm-3">
															<button class="cnfrm-btn btn btn-sm btn-block sd-nav-cntnt" type="submit">Load Playlist</button>
														</div>
														<div class="col-sm-1"></div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Desktop Album Info Panel -->
                            <div id="album-info" class="row">
                                <div class="col-sm-2"></div>
								<div class="col-sm-8 bmprbx">
									<div class="player-img-lg"></div>
									   <div class="player-controls ">
      										<div id="songInfo" class="col-sm-offset-5"></div>
      										<span id="seekObjContainer">
			  									<progress id="seekObj" value="0" max="1"></progress>
											</span>
      										<br>
      										<small class="start-time"></small>
  											<small class="end-time"></small>
  										</div>
								</div>
								<div class="col-sm-2"></div>
                            </div>
						
							<!-- Desktop Song Data Editing Panel -->
                            <div id="edit-pnl" class="row hidden">
								<div class="col-sm-12">
									<div class="row bmprbx">
										<h5 class="drk-h">How does this song make you feel??</h5>
									</div>
                                    <form id="color_radio">
                                        <div data-toggle="buttons">
                                            <div class="row bmprbx">
                                                <div class="col-sm-3"></div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn rd">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="red" autocomplete="off" checked="checked">
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn orng">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="orange" autocomplete="off" >
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn yllw">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="yellow" autocomplete="off" >
                                                        </label>
                                                    </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                            <div class="row bmprbx">
                                                <div class="col-sm-3"></div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn grn">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="green" autocomplete="off" >
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn blu">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="blue" autocomplete="off" >
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-2 horizontal-align">
                                                        <label class="btn clr-slct-btn prpl">
                                                            <input class="color-radio-btn" type="radio" name="editColor" value="purple" autocomplete="off" >
                                                        </label>
                                                    </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                    </form>
								</div>
                            </div>
						</div>
					</div>
					
					<!-- Desktop Audio Control Panel -->
					<div class="row drk-pnl control-pnl vertical-align">
						<div class="col-sm-3">
							<button id="add" class="edit-btn gr-btn horizontal-align" data-toggle="tooltip" title="Add">
								<i class="material-icons" style="font-size: 20px; vertical-align: middle;">add</i>
							</button>
						</div>
						<div class="col-sm-6">
							<div class="audio-btn-group">
								<button id="previous" class="audio-btn gr-btn" data-toggle="tooltip" title="Previous Track">
									<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_previous</i>
								</button>
								<button id="play" class="play audio-btn gr-btn hidden" data-toggle="tooltip" title="Play">
									<i class="material-icons" style="font-size: 36px; vertical-align: middle;">play_arrow</i>
								</button>
								<button id="pause" class="pause audio-btn gr-btn" data-toggle="tooltip" title="Pause">
									<i class="material-icons" style="font-size: 36px; vertical-align: middle;">pause</i>
								</button>
								<button id="next" class="audio-btn gr-btn" data-toggle="tooltip" title="Next Track">
									<i class="material-icons" style="font-size: 24px; vertical-align: middle;">skip_next</i>
								</button>
							</div>
						</div>
						<div class="col-sm-3">
							<button data-toggle="tooltip" title="Rate Song" id="edit" class="edit-btn gr-btn horizontal-align">
								<i class="material-icons" style="font-size: 20px; vertical-align: middle;">create</i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
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
    require_once('dbInfo.php');
	require_once('songtoDBLoader.php');
	$db = new mysqli($host, $user, $password, $database);

	$mood = "";
	$color = "";
	
	if (isset($_POST['colorPref'])) {
		$color = $_POST['colorPref'];
		$mood=null;
	}
	
	if (isset($_POST['moodPref'])) {
			$mood = $_POST['moodPref'];
			$color=null;
	}
	
    echo "<audio src='' id='audioPlayer'></audio>";
    $file = "audio_player/DefaultPlaylist.txt";
    $file = fopen($file, "r") or die("Unable to open file!");
    echo '<ul id="playlist" style="display: none;">';
    $start = 1;
	
	if ($db->connect_error) {
		die($db->connect_error);
	} 
	
	/* Query */
	if ( $mood != null ) {
		$query = "select * from songList where moods = '$mood'";
	} else if ( $color != null ) {
		$query = "select * from songList where colors = '$color'";
	} else {
		$query = "select * from songList";
	}
			
	
	/* Executing query */
	$result = $db->query($query);
	if (!$result) {
		die("Retrieval failed: ". $db->error);
	} else {
		/* Number of rows found */
		$num_rows = $result->num_rows;
		if ($num_rows === 0) {
		//	echo "Empty Table<br>";
		} else {
			for ($row_index = 0; $row_index < $num_rows; $row_index++) {
				$result->data_seek($row_index);
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$link = $row['link'];
				$artist = $row['artist'];
				$song = $row['songname'];
				if ($start === 1) {
				echo "<li class='current-song'><a href=$link data-artist='{$artist}' data-song='{$song}'>". $artist . " - " . $song . "</a></li>";
				$start = 0;
				} else {
					echo "<li><a href=$link data-artist='{$artist}' data-song='{$song}'>". $artist . " - " . $song . "</a></li>";
				}
				
				//echo "Link: {$row['link']}";
			}
		}
	}
    echo '</ul>';
    ?>
    <script>
		audioPlayer();
		$(document).ready(function(){
			$('#audioPlayer').on("timeupdate" , initProgressBar);
   			$('[data-toggle="tooltip"]').tooltip();   
		});
    </script>
</html>
