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

    // $("#editSong").click(function (event) {//need to create that button
    //
    //     var mysql = require('mysql');
    //
    //     var con = mysql.createConnection({
    //         host: "localhost",
    //         user: "root",
    //         password: "",
    //         database: "moodMusicDB"
    //     });
    //
    //     var songChange = $("#playlist li a")[currentSong].href;
    //     console.log(songChange);
    //
    //     con.connect(function(err) {
    //         if (err) throw err;
    //         var sql = string.concat("UPDATE songList SET colors = ' ",val1, " ' WHERE songname = '",val2,"'");
    //         con.query(sql, function (err, result) {
    //             if (err) throw err;
    //             console.log(result.affectedRows + " record(s) updated");
    //         });
    //     });
    // })

    // $('#color_radio input').on('change', function () {
    //     alert($('input[name=editColor]:checked', '#color_radio').val());
    // })
}