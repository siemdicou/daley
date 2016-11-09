 function initMap(status = false) { //1
        if (!status){
            $('#tubular-play').fadeOut(1000);
            $('#vid-cont').fadeIn(1000);
        }//3
        
        
        else{
          $('#vid-cont').fadeOut(1000);
          $('#tubular-play').fadeIn(1000);
          
        }
    };
        //   $('#contactBanner').fadeIn(1000);}


document.getElementById("tubular-play").addEventListener("click", function(){
    initMap(false);
});
document.getElementById("tubular-back").addEventListener("click", function(){
    initMap(true);
});