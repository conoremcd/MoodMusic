function audioPlayer() {
    var currentSong = 0;
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
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $(this).parent().addClass("current-song");

    });
    
    $("#previous").click(function (event) {
        event.preventDefault();
        currentSong--;
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
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