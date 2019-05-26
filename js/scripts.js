$(function() {
    loadPage();

    $(".video-link").on("click", function() {
        showMedia($(this).attr("data-target"));
    });

    $(".video-overlay").on("click", function() {
       hideMedia();
    });

    $(".video-overlay video").on("click", function(event) {
        event.stopPropagation();
    });

    $("video").each(function() {
      $(this)[0].onended = function () {
            hideMedia();
        }
    });
});

function loadPage() {
    $("body").removeClass("fade");
    setTimeout(function(){
        //wait for card1 flip to finish and then flip 2
        $("body").addClass('load_content');
    }, 900);
}

function showMedia(videoId) {
    $("body").addClass("video");
    $("#" + videoId).fadeIn();
    $("#" + videoId)[0].load();
    $("#" + videoId)[0].play();

}

function hideMedia() {
    $("body").removeClass("video");
    $("video").each(function () {
        $(this).fadeOut(function() {
            $(this)[0].load();
        });
    })

}