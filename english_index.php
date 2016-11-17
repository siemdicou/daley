<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daley</title>
    <meta name="description" content="Daley is een website die mensen met alle leeftijden helpt met hun beperking door middel van een assistieve app.">
    <meta name="keywords" content="stribble, hulp, ouderen, autisme, alzheimer, digitaal hulp, onafhankelijker worden, makkelijker, *nog meer verzinnen!!*">
    

    <!-- Favicons ################################ -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet ############################## -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    
    <!-- Slider ################################ -->
    <link rel="stylesheet" href="css/unslider.css">
    <link rel="stylesheet" href="css/unslider-dots.css">
    
    <!-- Talen Select ################################ -->
    <link rel="stylesheet" href="css/language-select.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Custom JS ############################ -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>



  </head>
  <body>
  
    <!-- Navigation ############################# -->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
            <div class="language">
                
                    <select id="select" >
                        
                        <option id="dutch" value="index.php?lang=dutch" data-imagesrc="img/nl.png"></option>
                        <option id="english" value="index.php?lang=english"  data-imagesrc="img/en.png"></option>
                    </select>
                
            </div>  
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img class="daley" src="img/logodaley.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">How it works</a></li>
            <li><a href="#tf-about" class="page-scroll">What Daley does</a></li>
            <li><a href="#tf-we" class="page-scroll">News</a></li> 
            <li><a href="#tf-we" class="page-scroll">Benefits</a></li> 
            <!-- <li><a href="#tf-#" class="page-scroll">Registreren</a></li> -->
            <li><a href="#tf-contact" class="page-scroll"><div class="regist">Register/Login</div></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->

    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <span class="color"><h1>Daley, your daley assistant.</h1></span>

                
                 <p id="video-controls" class="black-65">

                 <a href="#" class="tubular-play " id="tubular-play"><img class="play-btn1" src="img/video/play-button.svg"></a> 
                 </p>

                <div id="vid-cont">
                <p>

                <a href="#" class="tubular-play"><img class="play-btn" src="img/video/play-button.svg"></a>
            
                <a href="#" class="tubular-pause"><img class="play-btn" src="img/video/pause.svg"></a>
                
                <a href="#" class="tubular-mute"><img class="play-btn" src="img/video/mute.svg"></a>

                <a href="#" class="tubular-back" id="tubular-back"><img class="play-btn" src="img/video/back.svg"></a>


                </p>

                </div>     
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about" class="text-center">
           <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        <div class="container">

            <div class="row wiestribble" >
                <div class="col-md-6">
                    <img src="img/uploads/<?php echo$result_ned[0]['image']?>" class="img-responsive">
                    <a href="#"><img  src="img/apple.jpg" class="apple"></a>
                    <a href="#"><img  src="img/google.jpg" class="playstore"></a>
                    <a href="#"><img  src="img/browsers.png" class="browsers"></a>
                    
                    
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2><?php   echo $result_ned[0]['pageTitle']; ?></h2>
                           <div class="clearfix"></div>
                            <hr>
                        </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <p class="waaromstrible">
                            <?php   echo $result_ned[0]['pageCont']; ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
                    

    </div>
    

    
        
   


        
        
        <div id="tf-about2" class="text-center">
           <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        <div class="container">

            <div class="row wiestribble" >
               
                <div class="col-md-6 tekstkleur">
                    <div class="about-text">
                        <div class="section-title">
                            <h2><?php   echo $result_ned[1]['pageTitle']; ?></h2>
                           <div class="clearfix"></div>
                            <hr>
                        </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <p class="waaromstrible">
                            <?php   echo $result_ned[1]['pageCont']; ?>
                        </p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <img src="img/uploads/<?php echo$result_ned[1]['image']?>" class="img-responsive">
                  
                    
                    
                </div>
            </div>

        </div>
                    

    </div>
      
       <!-- nieuws
    ==========================================-->
    <div id="tf-we" class="text-center">
        <div class="overlay">
            <div class="container containernieuws">
                <h1 class="wiezijnwij tekstkleur2">News</h1>
                <Br>
                    <div class="nieuwsvlak">
                    <div id="placeholderCurentNews">
                        <h3 class="nieuwstitle"><?php echo $row1["title"]; ?></h3>
                        <p class="nieuwstekst"><?php echo $row1["context"]; ?></p>
                        </div>
                    </div>
                     <div class="oudberichtcontainer">
                    <div id="placeholderNews"></div>


                         
                    <!-- <img src="img/pijltje.png" class="pijltje" /> -->
                </div>
            </div>
            
        </div>
       
    </div>
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">
            

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        
                        <h2 class="helpuzelf">Help someone and <strong><FONT COLOR="#fa9927">register!</FONT></strong></h2>
                        <div class="line">
                        </div>
                        <div class="clearfix"></div>
                        <small><em></em></small>            
                    </div>

                    <form>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Your name..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Surname</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Your surname..">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email adress</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="your email..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email adress again</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email again..">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Your password..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password again</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your password again..">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn tf-btn btn-default">send</button>
                    </form>

                </div>
            </div>

        </div>
    </div>



 
    <nav id="footer">
        <div class="container">
            
            <div class="pull-left fnav">
                <div class="copyright">
						© 2015 - 2016 All rights reserved. Trademark and intelectual property owned by <a style="color:#222222;" href="http://www.almisasolutions.com/" target="_blank">Almisa Solutions</a>. <a style="color:#222222;" href="http://kynsel.com/terms-and-conditions/">Terms and Conditions</a> - <a style="color:#222222;" href="http://kynsel.com/privacy-policy/">Privacy policy</a> - <a style="color:#222222;" href="http://kynsel.com/about-us/">About us</a> - <a style="color: #222222;" href="http://kynsel.com/faq/">FAQ's</a>					</div>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-2.2.1.min.js"></script>

    <!--<script type="text/javascript" src="js/jquery.1.11.1.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <!-- Javascripts
    ================================================== -->

    <script>
        jQuery(document).ready(function($) {
            var $slider = $('.my-slider').unslider({
            infinite: true
            });
                $slider.on('mouseover', function() {
        $slider.data('unslider').stop();
    }).on('mouseout', function() {
        $slider.data('unslider').start();
    });
        });
    </script>

 
    <script type="text/javascript" src="js/unslider.js"></script>  
    <script type="text/javascript" src="js/main.js"></script>
   
<script type="text/javascript" src="js/ddslick.js"></script>

<script>
        $('#select').ddslick({
    onSelected: function(selectedData){
    }   
});
</script>
<script>
$(document).ready( function() {
        $('#select .dd-option').click ( function(e) {
        e.preventDefault();
        location.href = ($(this).children('.dd-option-value').val());
        });
        getNews();
});
</script>
    <script type="text/javascript" src="js/tubalar.js">
    </script>
    <script>
    $('document').ready(function() {
    var options = { videoId: 'M8Kpo6NaeK0', start: 3 };
    $('.content').tubular(options);
    // f-UGhWj1xww cool sepia hd
    // 49SKbS7Xwf4 beautiful barn sepia
});

    //de data live door geven door ajax
    function getNews() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("placeholderNews").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getNews.php", true);
        xhttp.send();
    }
    // var clicked = document.getElementById("").click
    function updateNews(qrData) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("placeholderCurentNews").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/latestNews.php?clicked=" + qrData, true);
        xhttp.send();
    }

</script>
    <script type="text/javascript" src="js/hi.js"> </script>
    
  </body>
</html>