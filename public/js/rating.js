$(document).ready(function () {
    $("#s1").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1").css("color", "yellow");
        $(".star-value").text('1');
        $(".ocena").text('1/10');
    });
    $("#s2").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2").css("color", "yellow");
        $(".star-value").text('2');
        $(".ocena").text('2/10');
    });
    $("#s3").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3").css("color", "yellow");
        $(".star-value").text('3');
        $(".ocena").text('3/10');
    });
    $("#s4").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4").css("color", "yellow");
        $(".star-value").text('4');
        $(".ocena").text('4/10');
    });
    $("#s5").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4, #s5").css("color", "yellow");
        $(".star-value").text('5');
        $(".ocena").text('5/10');
    });
    $("#s6").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4, #s5, #s6").css("color", "yellow");
        $(".star-value").text('6');
        $(".ocena").text('6/10');
    });
    $("#s7").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4, #s5, #s6, #s7").css("color", "yellow");
        $(".star-value").text('7');
        $(".ocena").text('7/10');
    });
    $("#s8").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8").css("color", "yellow");
        $(".star-value").text('8');
        $(".ocena").text('8/10');
    });
    $("#s9").click(function () {
        $(".fa-star").css("color", "black");
        $("#s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8, #s9").css("color", "yellow");
        $(".star-value").text('9');
        $(".ocena").text('9/10');
    });
    $("#s10").click(function () {
        $(".fa-star").css("color", "black");
        $(".fa-star").css("color", "yellow");
        $(".star-value").text('10');
        $(".ocena").text('10/10');
    });
});