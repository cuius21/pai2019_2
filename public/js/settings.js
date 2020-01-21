var firstTeam = -1;
var secondTeam = -1;

$(document).ready(function () {
    $(".team").on("click", function () {
        firstTeam = parseInt($(this).data("index"));
        saving();
    });
    $(".team2").on("click", function () {
        secondTeam = parseInt($(this).data("index"));
        //saving();
    });
    $(".team").click(function (){
        var currentndex = parseInt($(this).data("index"));
        setColor1(currentndex);
    });
    $(".team2").click(function (){
        var currentndex = parseInt($(this).data("index"));
        setColor2(currentndex);
    });
    function setColor1(i){
        var z = i -1;
        $(".team:eq("+z+")").css("background-color", "#06523B");
    }
    function setColor2(i){
        var z = i- 1;
        $(".team2:eq("+z+")").css("background-color", "#06523B");
    }
    function saving(){
        var url = new URL(window.location.href);
        const apiUrl = "http://localhost:8000";
        $.ajax({
            url: apiUrl + "?page=comparison",
            method: "POST",
            dataType: "json",
            data: {
                rate: 1,
                firstTeam: firstTeam,
                secondTeam: secondTeam
            },
            success: function (result, textStatus, xhr) {
                console.log(xhr);
                if(xhr.status === 200){
                    alert("Powinna wygrac druga w kolejnosci wybrania druzyna, srednia - "+ result);
                } else if(xhr.status === 201){
                    alert("Brak mozliwosci sprawdzenia");
                }else if(xhr.status === 202){
                    alert("Powinna wygrac pierwsza w kolejnosci wybrania druzyna, srednia -"+ result);
                }else if(xhr.status === 203){
                    alert(result);
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    }
});