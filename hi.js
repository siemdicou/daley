function initMap(status = false) { //1
        if (!status){
            console.log("test2");
            $('#closeMap').fadeOut(1000);
            $('.contactform').fadeIn(1000);
        }//3
        
        
        else{
          $('.contactform').fadeOut(1000);
          $('#closeMap').fadeIn(1000);
          
          
        //   $('#contactBanner').fadeIn(1000);}


document.getElementById("openMap").addEventListener("click", function(){
    initMap(true);
    console.log(status);
});
document.getElementById("closeMap").addEventListener("click", function(){
    initMap(false);
    console.log(status);
});