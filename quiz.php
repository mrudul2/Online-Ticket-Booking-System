<html>
<body>
<?php
include('header.php');
?>

<style>
body, html {
    height: 100%;
}

.spidey-image {
  
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://blogs-images.forbes.com/games/files/2018/09/Marvels-Spider-Man_20180903142447.jpg");

  /* Set a specific height */
  height: 90%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.sooryavanshi-image {
  
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.indianexpress.com/2021/11/sooryavanshi-1200.jpg");

  /* Set a specific height */
  height: 90%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.eternals-image {
  
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("http://ocdn.eu/images/pulscms/NjA7MDA_/6bc24486e96dd87e0b9852c054bf67f7.png");

  /* Set a specific height */
  height: 90%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


/* Place text in the middle of the image */
.quiz-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}


</style>

<div class="spidey-image">
  <div class="quiz-text">
    <h1>Spiderman</h1>
    <p>Show us how much you have our dear spidey</p>
     <a href="https://forms.gle/JQVg9R1dJFCYjeMT7 ">
       <input type="Submit" name="submit" value="Take our Quiz"/>
     </a>
  </div>
</div>

<div class="sooryavanshi-image">
  <div class="quiz-text">
    <h1>Sooryavanshi</h1>
    <p>Are you as smart as our Mumbai chi police? Show us</p>
     <a href="https://docs.google.com/forms/d/e/1FAIpQLSeoxubhmBR9VSLwFU6Oxqful7rSNkd0xXiyrBmJhBsDC-hD3g/viewform">
       <input type="Submit" name="submit" value="Take our Quiz"/>
     </a>
  </div>
</div>

<div class="eternals-image">
  <div class="quiz-text">
    <h1>Eternals</h1>
    <p>Eternally an Eternal's fan? Show us</p>
     <a href="https://docs.google.com/forms/d/e/1FAIpQLSdYujj1rFTZ4L4Vml6BqQmGq-rtIGDQgGccXQ_nPAu_HcVjzA/viewform">
       <input type="Submit" name="submit" value="Take our Quiz"/>
     </a>
  </div>
</div>


</body>
</html>