function audioPlayer() {
    var currentSong = 0;


    function updateAlbumCover(songName){
        var albumCover = null;
        switch (songName){
            case 'Silence':
                albumCover = "silence";
                break;
            case 'You and Me':
                albumCover = "you_and_me";
                break;
            case 'Alone':
                albumCover = "alone";
                break;
            case 'PTSD':
                albumCover = "ptsd";
                break;
            case 'Born Sinner':
                albumCover = "born_sinner";
                break;
            case 'Ill Mind of Hopsin':
                albumCover = "ill_mind_of_hopsin";
                break;
            case 'See You Again':
                albumCover = "see_you_again";
                break;
            case 'Goosebumps':
                albumCover = "goosebumps";
                break;
            case '1-800-273-8355':
                albumCover = "18002738255";
                break;
            case 'Starboy':
                albumCover = "starboy";
                break;
            case 'Through the Late Night':
                albumCover = "through_the_late_night";
                break;
            case 'Let Nas Down':
                albumCover = "let_nas_down";
                break;
            case "I Stand Alone":
                albumCover = "i_stand_alone";
                break;
            default:

        }
        $("#album-cover").get(0).src = "images/album-covers/" + albumCover +".jpg"; 
    }

    function updateSongInfo(currentSong){
        var audioElement = $("#playlist li a").get(currentSong);
        var artist = $(audioElement).data('artist');
        artist = artist.trim();
        var song = $(audioElement).data('song');
        song = song.trim();

        updateAlbumCover(song);

        $("#songInfo").html( song + "<br>" + artist);
    }

    updateSongInfo(currentSong);
    $("#audioPlayer")[0].src = $("#playlist li a")[0];
    $("#audioPlayer")[0].play();
    $("#playlist li a").click(function (event) {
        event.preventDefault();
        $("#audioPlayer")[0].src = this;
        $("#audioPlayer")[0].play();
        $("scrolling")[0].set();
        $("#playlist li").removeClass("current-song");
        currentSong = $(this).parent().index();
        $(this).parent().addClass("current-song");
    });
    
    $("#next").click(function (event) {
        event.preventDefault();
        currentSong++;
        if (currentSong === $("#playlist li a").length)
            currentSong = 0;

        updateSongInfo(currentSong);
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
        //show pause button since we want to autoplay the next track
        $("#play").addClass("hidden");
        $("#pause").removeClass("hidden");
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $(this).parent().addClass("current-song");

    });
    
    $("#previous").click(function (event) {
        event.preventDefault();
        currentSong--;
        updateSongInfo(currentSong);
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
        //show pause button since we want to autoplay the next track
        $("#play").addClass("hidden");
        $("#pause").removeClass("hidden");
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $(this).parent().addClass("current-song");
    });
    
    $("#pause").click(function (event) {
       $("#audioPlayer")[0].pause();
       $("#pause").addClass("hidden");
       $("#play").removeClass("hidden");
    });
    
    $("#play").click(function (event) {
        $("#audioPlayer")[0].play();
        $("#play").addClass("hidden");
        $("#pause").removeClass("hidden");
    });


    
	 $("#edit").click(function (event) {
        toggle = document.getElementById("edit-pnl").classList.contains('hidden');
			
		if (toggle) {
            document.getElementById('edit-pnl').classList.remove('hidden');
            document.getElementById('album-info').classList.add('hidden');
        } else {
            document.getElementById('edit-pnl').classList.add('hidden');
            document.getElementById('album-info').classList.remove('hidden');
        } 
    });
    
    $("#ch-clr").click(function (event) {
        document.getElementById("side-nav").style.width = "60%";
		$(".sd-nav-cntnt").fadeIn(1000);
    });
    
    $("#close-btn").click(function (event){
        document.getElementById("side-nav").style.width = "0";
		$(".sd-nav-cntnt").fadeOut("fast");
    });
	
    $("#next-m").click(function (event) {
        event.preventDefault();
        currentSong++;
        if (currentSong === $("#playlist li a").length)
            currentSong = 0;
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $(this).parent().addClass("current-song");

    });
    
    $("#previous-m").click(function (event) {
        event.preventDefault();
        currentSong--;
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $(this).parent().addClass("current-song");

    });
    
    $("#pause-m").click(function (event){
       $("#audioPlayer")[0].pause();
       $("#pause-m").addClass("hidden");
       $("#play-m").removeClass("hidden");
    });
    
    $("#play-m").click(function (event){
        $("#audioPlayer")[0].play();
        $("#play-m").addClass("hidden");
        $("#pause-m").removeClass("hidden");
    });
    
    $("#edit-m").click(function (event){
        toggle = document.getElementById("edit-pnl-m").classList.contains('hidden');
			
		if (toggle) {
            document.getElementById('edit-pnl-m').classList.remove('hidden');
            document.getElementById('album-info-m').classList.add('hidden');
        } else {
            document.getElementById('edit-pnl-m').classList.add('hidden');
            document.getElementById('album-info-m').classList.remove('hidden');
        } 
    });
    
    $("#ch-clr-m").click(function (event){
        document.getElementById("side-nav-m").style.width = "100%";
		$(".sd-nav-cntnt").fadeIn(1500);
    });
    
    $("#close-btn-m").click(function (event){
        document.getElementById("side-nav-m").style.width = "0";
		$(".sd-nav-cntnt").fadeOut("fast");
    });
    
    
    $("#audioPlayer")[0].addEventListener("ended", function () {
        currentSong++;
        if (currentSong === $("#playlist li a").length)
            currentSong = 0;
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
    });
}

function calculateTotalValue(length) {
  var minutes = Math.floor(length / 60);
    seconds_int = length - minutes * 60;
    seconds_str = seconds_int < 10 ? "0" + seconds_int.toString() : seconds_int.toString();
    seconds = seconds_str.substr(0, 2);
    time = minutes + ':' + seconds;

  return time;
}

function calculateCurrentValue(currentTime) {
  var current_hour = parseInt(currentTime / 3600) % 24,
    current_minute = parseInt(currentTime / 60) % 60,
    current_seconds_long = currentTime % 60,
    current_seconds = current_seconds_long.toFixed(),
    current_time = (current_minute < 10 ? "0" + current_minute : current_minute) + ":" + (current_seconds < 10 ? "0" + current_seconds : current_seconds);

  return current_time;
}

function initProgressBar() {
  var player = document.getElementById('audioPlayer');

  if( player.readyState === 0 ){ //don't load progress bar if audio is not loaded
    return;
  }
  var length = player.duration;
  console.log("duration" , length);
  var current_time = player.currentTime;

  // calculate total length of value
  var totalLength = calculateTotalValue(length)
  jQuery(".end-time").html(totalLength);

  // calculate current value time
  var currentTime = calculateCurrentValue(current_time);
  jQuery(".start-time").html(currentTime);

  var progressbar = document.getElementById('seekObj');
  progressbar.value = (player.currentTime / player.duration);
  progressbar.addEventListener("click", seek);

  if (player.currentTime == player.duration) {
    $('#play-btn').removeClass('pause');
  }


  function seek(evt) {
    var percent = evt.offsetX / this.offsetWidth;
    player.currentTime = percent * player.duration;
    progressbar.value = percent / 100;
  }
};
