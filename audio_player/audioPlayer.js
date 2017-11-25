function audioPlayer() {
    var currentSong = 0;
    $("#audioPlayer")[0].src = $("#playlist li a")[0];
    $("#audioPlayer")[0].play();
    $("#playlist li a").click(function (event) {
        event.preventDefault();
        $("#audioPlayer")[0].src = this;
        $("#audioPlayer")[0].play();
        $("scrolling")[0].set
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
    $("#pause").click(function (event){
       $("#audioPlayer")[0].pause();
    });
    $("#play").click(function (event){
        $("#audioPlayer")[0].play();
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