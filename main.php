

<!DOCTYPE html>

<html>
    <title>Go Vent Gone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- overall class !-->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- symbol hamburger! -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
      <!-- icon --------------->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- access the css file ที่แยกไว้-->
<head>
    <link rel="stylesheet" href="default_main.css">
</head>


<body>
  <!-- แท็บเมนูข้างๆไว้กดเลือก -->
    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%;">
      <a href="main.php"><img src="picture/gvg_logo.png" style="padding-left:15px;padding-top:15px;height:50px;"></a>
      <br></br>
      <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Explore Event <i class="fa fa-caret-down"></i></button>
        <div id="demoAcc" class="w3-hide w3-white w3-card">
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Art</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Community</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Fashion</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Film &amp; Medias</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Food &amp; Drink</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Music</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Science &amp; Technology</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Sport &amp; Fitness</a>
        </div>
      <a href="event_around_you.php" class="w3-bar-item w3-button">Event around you</a>
      <a href="#" class="w3-bar-item w3-button">Free ticket event</a>
      <a href="#" class="w3-bar-item w3-button">Selected event</a>
      <a href="#" class="w3-bar-item w3-button">History</a>
    </div>


<div style="margin-left:20%;">
  <!--slide picture!-->
  <div class="w3-container">
      <div class="w3-content w3-display-container" style="margin-top:1%;max-width:1200px;">
          <img class="mySlides" src="picture/ad_fashion.jpg" style="width:100%">
          <img class="mySlides" src="picture/ad_food.jpg" style="width:100%">
          <img class="mySlides" src="picture/ad_firework.jpg" style="width:100%">
          <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          </div>
      </div>
  </div>

  <!--recommended event-->
  <div class="maincolumn">
    <h3>Recommended events</h3>

    <div class="row">
    <div class="column">
      <div class="content">
        <div class="w3-display-container">
          <img src="picture/post_music_indeed.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft" id="timeFunc"></span>
          <h3>Music Hoolic Indeed</h3>
          <hr>
          <p><i class="fa fa-map-marker"></i> Central World, Bangkok</p>
          <p>&#9835; Music</p>
          <p><i class="fa fa-calendar"></i> 30 November 2017</p>
          <div align="center"> <button class="buttonMoreInfo">More Information</button></div>
          <br>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="picture/post_music.jpg" style="width:100%">
        <h3>Summer Party</h3>
        <hr>
        <p><i class="fa fa-map-marker"></i> Bangsaen, Chon Buri</p>
        <p>&#9835; Music</p>
        <p><i class="fa fa-calendar"></i> 3 December 2017</p>
        <div align="center"> <button class="buttonMoreInfo">More Information</button></div>
        <br>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="picture/post_art.jpg" style="width:100%">
        <h3>Maintenant Festival</h3>
        <hr>
        <p><i class="fa fa-map-marker"></i> Central Westgate, Nonthaburi</p>
        <p><i class="fa fa-desktop"></i> Science &amp;Tecnology</p>
        <p><i class="fa fa-calendar"></i> 8 December 2017</p>
        <div align="center"> <button class="buttonMoreInfo">More Information</button></div>
        <br>
      </div>
    </div>

    </div>
  </div>



    <!--  </div>-->
    </div>
  </div>

</div>

<script>
    //slide picture function//
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }

    ///////////////////////////////////////////////////////////////////////////////

    //Accordion menu//
    function myAccFunc(){
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-show", "");
        }
    }
    ///////////////////////////////////////////////////////////////////////////////

    // Set the date we're counting down to
    var countDownDate = new Date("Nov 22, 2017 17:30:30").getTime();

    // Update the count down every 1 second
    var count = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="timeFunc"
        document.getElementById("timeFunc").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(count);
            document.getElementById("timeFunc").innerHTML = "EXPIRED";
        }
    }, 1000);

    </script>

</body>
</html>
