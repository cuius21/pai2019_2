var ratedIndex = -1,
    uID = x;
$(document).ready(function() {
    resetStarColors();

    if (localStorage.getItem("ratedIndex") != null) {
        setStars(parseInt(localStorage.getItem("ratedIndex")));
        uID = localStorage.getItem("uID");
    }
    $(".fa-star").on("click", function() {
        ratedIndex = parseInt($(this).data("index"));
        $(".ocena").text(ratedIndex + 1 + "/10");
        saveToTheDB();
    });
    $(".fa-star").mouseover(function() {
        resetStarColors();
        var currentIndex = parseInt($(this).data("index"));
        setStars(currentIndex);
    });
    $(".fa-star").mouseleave(function() {
        resetStarColors();
        if (ratedIndex != -1) {
            setStars(ratedIndex);
        }
    });
    function setStars(max) {
        for (var i = 0; i <= max; i++) {
            $(".fa-star:eq(" + i + ")").css("color", "yellow");
        }
    }
    function resetStarColors() {
        $(".fa-star").css("color", "black");
    }
    function saveToTheDB() {
        var url = new URL(window.location.href);
        var idPlayer = url.searchParams.get("id_player");
        const apiUrl = "http://localhost:8000";
        $.ajax({
            url: apiUrl + "?page=ratingplayer&id_player=" + idPlayer,
            method: "POST",
            dataType: "json",
            data: {
                rate: 1,
                uID: uID,
                ratedIndex: ratedIndex
            },
            success: function(result, textStatus, xhr) {
                //   PO CO?
                // uID = result.id;
                // localStorage.setItem("uID", uID);
                console.log(xhr);
                if (xhr.status === 200) {
                    alert("Zagłosowałeś");
                } else if (xhr.status === 201) {
                    alert("Już kiedyś głosowałeś. Twoja ocena to " + result);
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }
});
