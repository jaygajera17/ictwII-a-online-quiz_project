<script>function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>
<span id='ct6' style="background-color: #FFFF00"></span>


<!DOCTYPE html>
<html>

<div class="container">
  <h1 id="headline"> START QUIZ AFTER</h1>
  <div id="countdown">
    <ul>
      <li><span id="days"></span>days</li>
      <li><span id="hours"></span>Hours</li>
      <li><span id="minutes"></span>Minutes</li>
      <li><span id="seconds"></span>Seconds</li>
    </ul>
  </div>
  <div id="content" class="emoji">
    <span> let's</span>
    <span>  START</span>
    <span>  </span>
  </div>
</div>


<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
  margin: 0;
}

body {
  align-items: center;
  background-color: #ffd54f;
  display: flex;
  font-family: -apple-system, 
    BlinkMacSystemFont, 
    "Segoe UI", 
    Roboto, 
    Oxygen-Sans, 
    Ubuntu, 
    Cantarell, 
    "Helvetica Neue", 
    sans-serif;
}

.container {
  color: #333;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-weight: normal;
  letter-spacing: .125rem;
  text-transform: uppercase;
}

li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

li span {
  display: block;
  font-size: 4.5rem;
}

.emoji {
  display: none;
  padding: 1rem;
}

.emoji span {
  font-size: 4rem;
  padding: 0 .5rem;
}

@media all and (max-width: 768px) {
  h1 {
    font-size: 1.5rem;
  }
  
  li {
    font-size: 1.125rem;
    padding: .75rem;
  }
  
  li span {
    font-size: 3.375rem;
  }
}</style>


<script>

(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "july 7, 2021 18:29:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
            let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "It's my birthday!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
          location.href = 'quiz_home_page.php';
          
        }
        //seconds
      }, 0)
  }());</script>