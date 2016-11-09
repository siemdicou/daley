 function initMap(status = false) { //1
        if (!status){
            $('#tubular-play').fadeOut(1000);
            $('#vid-cont').fadeIn(1000);
            $('#tf-home .overlay').css("background", "-webkit-radial-gradient(top center, ellipse cover, rgba(255,255,255,0.0) 0%,rgba(0,0,0,0.0) 100%)")
        }//3
        
        
        else{
          $('#vid-cont').fadeOut(1000);
          $('#tubular-play').fadeIn(1000);
          $('#tf-home .overlay').css("background", "-webkit-radial-gradient(top center, ellipse cover, rgba(255,255,255,0.2) 0%,rgba(0,0,0,0.5) 100%)")
          
        }
    };
        //   $('#contactBanner').fadeIn(1000);}


document.getElementById("tubular-play").addEventListener("click", function(){
    initMap(false);
});
document.getElementById("tubular-back").addEventListener("click", function(){
    initMap(true);
});