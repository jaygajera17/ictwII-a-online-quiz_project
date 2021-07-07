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
  background-color: #1d3a79;
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

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.button a{
  text-decoration: none;
  color: white;
}
h1{
  height: 58px;
  font-size: 50px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We are Developers of this website.This is Our Term Work Project.</p>
  <p>If you want to know about Us or want to contact us here are some details and contact numbers.If you want You can contact Us.Hope you like this website.</p>
  <p>Thnak you for visitng our site..</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="jay gajera.png" alt="jay Gajera" style="width:94%">
      <div class="container">
        <h2>Jay Gajera</h2>
        <p class="title">Developer</p>
        <p>I am frontend and backend developer.</p>
        <p>Gajerajay9@gmail.com</p>
        <p><button class="button"><a href="tel:+919328527844">contact</a></button></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="prince jasakiya.jpg" alt="prince jasakiya" style="width:100%">
      <div class="container">
        <h2>Prince Jasakiya</h2>
        <p class="title">Developer</p>
        <p>I am frontend and backend developer.</p>
        <p>princejasakiya2712@gmail.com</p>
        <p><button class="button"><a href="tel:+918733873674">contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="jay sohagiya.png" alt="jay sohagiya" style="width:100%">
      <div class="container">
        <h2>Jay Sohagiya</h2>
        <p class="title">Developer</p>
        <p>I am frontend and backend developer.</p>
        <p>jaysohagiya3@gmail.com</p>
        <p><button class="button"><a href="tel:+919328961097">contact</a></button></button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      height: 100%;
      }
      body, h1, h3, input { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1, h3 {
      padding: 12px 0;
      font-weight: 400;
      }
      h1 {
      font-size: 28px;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%;
      min-height: 100%;
      background: url("/uploads/media/default/0001/01/49bff73f282c2c21f3341f1fe457fe35337b1792.jpeg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 86%; 
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      .info-item {
      width: 100%;
      }
      input {
      width: calc(100% - 57px);
      height: 36px;
      padding-left: 10px; 
      margin: 0 0 12px -5px;
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      .icon {
      padding: 9px 15px;
      margin-top: -1px;
      border-radius: 5px 0 0 5px;
      border: solid 0px #cbc9c9;
      background: #666;
      color: #fff;
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 0.5px solid #8ebf42;
      background: #fff;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 4px;
      border-bottom: 3px solid #8ebf42;
      border-left: 3px solid #8ebf42;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      textarea {
      width: 99%;
      margin-bottom: 12px;
      }
      button {
      width: 100%;
      padding: 8px;
      border-radius: 5px; 
      border: none;
      background: #8ebf42; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
      .grade-type div {
      display: flex;
      margin: 6px 0;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      .info-item {
      width: 48%;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Website Raiting Form</h1>
      <form action="/">
        <div class="info">
          <div class="info-item">
            <label class="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required/>
          </div>
          <div  class="info-item">
            <label class="icon" for="age"><i class="fas fa-calendar"></i></i></label>
            <input type="text" name="age" id="age" placeholder="Age" required/>
          </div>
          <div  class="info-item">
            <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="email" placeholder="Email" required/>
          </div>
          <div  class="info-item">
            <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
            <input type="text" name="phone" id="phone" placeholder="Phone" required/>
          </div>
        </div>
        <div class="grade-type">
          <h3>Rate Our Website</h3>
          <div> 
            <input type="radio" value="none" id="radioOne" name="grade" checked/>
            <label for="radioOne" class="radio">Excellent</label>
          </div>
          <div>
            <input type="radio" value="none" id="radioTwo" name="grade" />
            <label for="radioTwo" class="radio">Very Good</label>
          </div>
          <div>
            <input type="radio" value="none" id="radioThree" name="grade" />
            <label for="radioThree" class="radio">Good</label>
          </div>
          <div>
            <input type="radio" value="none" id="radioFour" name="grade" />
            <label for="radioFour" class="radio">Bad</label>
          </div>
          <div>
            <input type="radio" value="none" id="radioFive" name="grade" />
            <label for="radioFive" class="radio">Very Bad</label>
          </div>
        </div>
        <h3>Please Comment on Your Rating</h3>
        <textarea rows="4"></textarea>
        <button type="submit" href="index.php">Submit</button>
      </form>
    </div>
  </body>
</html>