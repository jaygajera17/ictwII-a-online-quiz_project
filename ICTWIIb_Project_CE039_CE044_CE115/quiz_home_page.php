<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: crimson;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {    display: inline-block;
    background-color: crimson;
    color: white;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 16px;
    margin-bottom: 20px;
    border-radius: 6px;
    border: 3px solid crimson;
    transition: all 0.3s ease;
}


.button:hover {
  background-color: black;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.logout{
  display: flex;
  float: right;
  text-decoration: none;
  color: white;
  transition: all 0.3s ease;
  padding: 8px;
  border-radius: 6px;
  top: 15px;
  margin: 15px;
}

.logout:hover{
  color: black;
  background-color: white;
}
h1{
  text-align: center;
}
footer{
    background: #111;
    padding: 20px 23px;
    color: white;
    text-align: center;
}
</style>
</head>
<body>
  <a href="logout.php" class="logout">LOGOUT</a>
  <div class="about-section">
  <h1> Quizers Quiz</h1>
  <p> PROGRAMMING QUIZ</p>
  <p>  MOVIE QUIZ </p>
  <p> sports quiz </p>
</div>
<hr>
<h2 style="text-align:center"> PROGRAMMING QUIZ  </h2>
<hr>
<div class="row">
  <div class="column">
    <div class="card">
     <img src="C.png" alt="2014" style="width:50%" height=":50%" >
      <div class="container">
        <center><h2>C </h2><center>
       <center> <p class="title"> basic c language questions <br> time: 10 minutes <br> questions: 30</p></center>
    <center>    <a href="home.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="data:image/jpeg;base64,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" alt="2014" style="width:55%" height=":50%" >
      <div class="container">
        <center><h2> PYTHON </h2><center>
       <center> <p class="title"> basic python language questions  <br>time: 4 minutes <br> questions:5 </p></center>
    <center>    <a href="pyt.php"> <button class="button" > start</p></button></center></a>
       
     </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="data:image/png;base64,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" alt="2014" style="width:111%"  height=":50%" >
      <div class="container">
        <center><h2> PHP </h2><center>
       <center> <p class="title"> basic php language questions <br> time: 4 minute <br> questions:5</p></center>
    <center>    <a href="php.php"> <button class="button" > start</p></button></center></a>
       </div>
      </div>
    </div>
  </div>

<hr>
  <h2 style="text-align:center"> MOVIE QUIZ  </h2>
  <hr>
  <div class="row">
  <div class="column">
    <div class="card">
     <img src="hollywood-logo.png" alt="HOLLYWOOD" style="width:62%" height=":50%" >
      <div class="container">
        <center><h2>HOLLYWOOD</h2><center>
       <center> <p class="title"> Basic Hollywood related questions</p></center>
    <center>    <a href="hollywood.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="bollywood-logo.jfif" alt="BOLLYWOOD" style="width:83%" height=":50%" >
      <div class="container">
        <center><h2>BOLLYWOOD</h2><center>
       <center> <p class="title"> Basic Bollywood related questions</p></center>
    <center>    <a href="bollywood.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="tollywood-logo.jfif" alt="TOLLYWOOD" style="width:50%" height=":50%" >
      <div class="container">
        <center><h2>TOLLYWOOD</h2><center>
       <center> <p class="title"> Basic Tollywood related questions</p></center>
    <center>    <a href="tolly.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>


  <hr>
  <h2 style="text-align:center"> SPORTS QUIZ  </h2>
  <hr>
  <hr>
  <div class="row">
  <div class="column">
    <div class="card">
     <img src="cricket-logo.jpg" alt="CRICKET" style="width:77%" height=":50%" >
      <div class="container">
        <center><h2>CRICKET</h2><center>
       <center> <p class="title"> Basic cricket related questions</p></center>
    <center>    <a href="cricket.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="football-logo.jfif" alt="FOOTBALL" style="width:58%" height=":50%" >
      <div class="container">
        <center><h2>FOOTBALL</h2><center>
       <center> <p class="title"> Basic football related questions</p></center>
    <center>    <a href="football.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="vollyball-logo.jfif" alt="VOLLYBALL" style="width:50%" height=":50%" >
      <div class="container">
        <center><h2>VOLLYBALL</h2><center>
       <center> <p class="title"> Basic vollyball related questions</p></center>
    <center>    <a href="vollyball.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

<hr>
  <footer>
      <p>Created By Prince Jasakiya, Jay Gajera And Jay Sohagiya  |  2021 All rights reserved</p>
  </footer>
</body>
</html>
</body>
</html>