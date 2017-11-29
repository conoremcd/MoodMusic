<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <title>Mood Music Player</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="css/page_template.css"
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/login.js"></script>
      <script type="text/javascript" src="js/audioPlayer.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	</head>
	<body>
		<!-- Mobile Elements -->
		<div class="container-fluid visible-xs-block">
			<div class="row">
				<div id="viewer" class="col-sm-12">
					
				</div>
			</div>
			<div class="row cntrl-pnl">
				<div id="control_panel" class="col-sm-12">
					
				</div>
			</div>
		</div>
	
			
		<!-- Desktop Elements -->
		<div class="container-fluid hidden-xs pnl">
			<div class="row pnl">
				<div class="sd-br col-sm-2">
					<div class="row">
						<div class="col-sm-5 bmprbx">
							<img src="images/logo_placeholder.png" width="60" height="60" alt="">
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
							<h6 class="top-brdr"><a href="colorRequestor.php">SELECT COLOR</a></h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 col-md-7">
							<form action="colorRequestor.php" onsubmit="return getColor(this)" method="post">
								<button id="ch_color" class="ch-clr-btn btn btn-sm btn-block bmprbx btm-bmpr"  type="submit">
									<img src="images/logo_placeholder.png" width="40" height="40" alt="">
								</button>
							</form>
						</div>
						<div class="col-sm-3 col-md-5"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6 class="top-brdr"><a href="requestor.php">SELECT MOOD</a></h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<form action="music_player.html" onsubmit="return getMood(this)" method="post">
								<ul class="nav">
									<!-- on load, generate an unordered list of possible moods as button links -->
								</ul>
							</form>
						</div>
					</div>	
				</div>
				<div class="col-sm-10 pnl">
					<!-- Desktop Center Panel (album art and song editing windows) -->
					<div class="row center-pnl">
						<div id="viewer" class="col-sm-12">
							<!-- Desktop Album Art Panel -->
						
							<!-- Desktop Song Data Editing Panel --> 
							<div id="mood_changer" class="container-fluid hidden">
								<form action="m_player.html" onsubmit="return getMood(this)" method="post">
									<div class="row hidden-xs">
										<div class="col-sm-1"></div>
										<div class="col-sm-5">
											<div class="form-group bmprbx">
												<input type="search" name="moodSearch" class="form-control input-sm" id="mdsearch" required="required">
												<div class="bmprbx">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>Mood</th>
																</tr>
															</thead>
															<tbody></tbody>	
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					<!-- Desktop Audio Control Panel -->
					<div class="row vertical-align control-pnl">
						<div class="col-sm-3">
							<button class="pnl-btn btn btn-sm vertical-align">
								<i class="material-icons" style="font-size: 30px; text-align: center;">add</i>
							</button>
						</div>
						<div class="col-sm-2">
							<button class="pnl-btn btn btn-sm vertical-align" style="float: right;">
								<i id="previous" class="material-icons" style="font-size: 48px; text-align: center;">skip_previous</i>
							</button>
						</div>
						<div class="col-sm-2">	
							<button class="pnl-btn btn btn-sm vertical-align">
								<i id="play" class="material-icons" style="font-size: 62px; text-align: center;">play_arrow</i>
							</button>
						</div>
						<div class="col-sm-2">
							<button class="pnl-btn btn btn-sm vertical-align" style="float: left;">
								<i id="next" class="material-icons" style="font-size: 48px; text-align: center;">skip_next</i>
							</button>
						</div>
						<div class="col-sm-3">
							<button class="pnl-btn btn btn-sm vertical-align">
								<i class="material-icons" style="font-size: 30px; text-align: center;">create</i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="container-fluid footer">
			<div class="row visible-xs-block" id="mobile-footer">
					<div class="col-xs-1"></div>
					<div class="col-xs-10">
						Copyright &copy; 2017 All Rights Reserved
					</div>
					<div class="col-xs-1"></div>
				</div>
				<div class="row hidden-xs" id="dsktop-footer">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						Copyright &copy; 2017 All Rights Reserved
					</div>
					<div class="col-sm-1"></div>
				</div>
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
				echo "<li class='current-song' style='display: none'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
				$start = 0;
			}else {
				echo "<li style='display: none'><a href=$array[2]>$array[1]" . " - " . "$array[0]</a></li>";
			}
		
		} 
    }
    echo '</ul>';
    ?>
    <script>
        audioPlayer();
    </script>
</html>
