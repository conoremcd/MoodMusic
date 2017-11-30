<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <title>Color Selection</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="css/page_template.css">
	  <link rel="stylesheet" href="css/color_select.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/audioPlayer.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	</head>
	<body>
		<header class="container-fluid header">
			<div class="row" id="mobile-header">
				<div class="col-xs-1"></div>
				<div class="col-xs-11">
					<div class="inline bmprbx">
						<a href=""><img src="images/logo.svg" width="60" height="60" alt=""></a>
					</div>
					<div class="inline bmprbx">
						<h4 class="lt-h horizontal-align">How Do You Feel?</h4>
					</div>
				</div>
			</div>
		</header>
		<div class="container-fluid pnl">
			<div class="row bmprbx">
				<div class="col-sm-3"></div>
				<div class="col-xs-12 col-sm-9">
					<h5 class="drk-h">Select a color that matches your mood and click Load Playlist!</h5>
				</div>
			</div>
			
			<form action="m_player.php" method="post">
			
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
				
				<div class="row pnl">
					<div class="col-sm-9"></div>
					<div class="col-xs-12 col-sm-2">
						<button class="cnfrm-btn btn btn-md btn-block" type="submit">
							Load Playlist
						</button>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</form>
		</div>
	</body>
</html>
