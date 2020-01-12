var ratedIndex = -1, uID = 1;

$(document).ready(function () {
    resetStarColors();

    if(localStorage.getItem('ratedIndex') != null){
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        uID = localStorage.getItem('uID');
    }
    $('.fa-star').on('click', function(){
        ratedIndex = parseInt($(this).data('index'));
        $('.ocena').text(ratedIndex+1+'/10');
        saveToTheDB();
    });
    $('.fa-star').mouseover(function(){
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });
    $('.fa-star').onmouseleave(function (){
        resetStarColors();
        if(ratedIndex != -1){
            setStars(ratedIndex);
        }
    });
    function setStars(max){
        for (var i=0; i<=max; i++){
            $('.fa-star:eq('+i+')').css('color', 'yellow');
        }
    }
    function resetStarColors(){
        $('.fa-star').css('color', 'black');
    }
    function saveToTheDB(){
        const apiUrl = "http://localhost:8000";
        $.ajax({
           url: apiUrl + '/?page=rating',
            method: "POST",
            dataType: 'json',
            data: {
               save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            }, success: function (r){
                uID = r.id;
                localStorage.setItem('uID', uID);
            }
        });
    }
});