<!DOCTYPE html>
<html>
<head>
<title>  C language mega quiz</title>
<style>
body {
/* background-color: rgb(24, 197, 91); */
background-image: url("bg.jpg");
font-family: Helvetica;
}

#main {
width: 80%;
max-width: 950px;
border: 1px gray solid;
margin: auto;
padding: 10px;
background-color: white;
border-radius: 10px;
}

#header {
margin-top: 0;
border: 2px solid black;
padding: 5px;
height: 250px;
background: beige;
background-image: url("bg.jpg");
color: blue;
}

label {
display: block;
}

input {
width: 30px;
margin-left: 20px;
}

h2 {
clear: both;
padding-top: 20px;
}

button {
width: 100px;
margin-top: 20px;
}

p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
 <!----------------logout after 100 second --------->
<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
                      location.href = 'quiz_home_page.php'; 
               }, (60 * 10000));
</script>


</head>
<body>
<div id="main">
<div id="header">
<h1><center><u style="padding: 65px;"> C language mega quiz</u></center></h1>
</div>
<p id="demo"></p>
<form id="form1">

<h2>High-level languages like C, Fortran are also known as —-.?</h2>
<label for="a"><input type="radio" name="variable" value="1" id="var_string" />procedural languages</label>
<label for="b"><input type="radio" name="variable" value="0" id="var_join" />Object oriented language</label>
<label for="c"><input type="radio" name="variable" value="0" id="var_info" />form-based language</label>
<label for="d"><input type="radio" name="variable" value="0" id="var_condition"/>both a and b</label>

<h2>One of the basic concepts in Object Oriented Programming approach is bundling both data
and functions into one unit known as —-.
</h2>
<label for="sub_string"><input type="radio" name="sub" value="0" id="sub_string"/> Simple variable</label>
<label for="sub_join"><input type="radio" name="sub" value="1" id="sub_join"/>objects</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />bundle</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />both a an b</label>

<h2>Which of the following shows the Operator overloading feature in C++?</h2>
<label for="cat_string"><input type="radio" name="con" value="1" id="cat_string" />polymorphism</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" />inheritance</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" />message passing
</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />both a and b</label>

<h2>One of the alternatives to nested if is the —–
</h2>
<label for="if_1"><input type="radio" name="if1" value="0" id="if_1" />break statement</label>
<label for="if_2"><input type="radio" name="if1" value="0" id="if_2" /> Jump statement </label>
<label for="if_3"><input type="radio" name="if1" value="1" id="if_3" /> switch statement </label>
<label for="if_4"><input type="radio" name="if1"  value="0" id="if_4" /> both a and b </label>

<h2>In the switch case statement, every case should have a —- statement as the last statement
?</h2>
<label for="if_5"><input type="radio" name="if2" value="0" id="if_5" /> jump </label>
<label for="if_6"><input type="radio" name="if2" value="1" id="if_6" /> break </label>
<label for="if_7"><input type="radio" name="if2" value="0" id="if_7" /> exit </label>
<label for="if_8"><input type="radio" name="if2"  value="0" id="if_8" /> both a and b </label>

<h2>Conditional operator (?:) is a handy operator which acts as a shortcut for —-?</h2>
<label for="if_string"><input type="radio" name="if3" value="1" id="if_string" /> if-else statement </label>
<label for="if_join"><input type="radio" name="if3" value="0" id="if_join" /> switch statement </label>
<label for="if_info"><input type="radio" name="if3" value="0" id="if_info" /> break statement </label>
<label for="if_condition"><input type="radio" name="if3"  value="0" id="if_condition" />  goto statement </label>

<h2> Arrays are —– data types.?</h2>
<label for="if_string"><input type="radio" name="if4" value="1" id="if_string" /> primitive </label>
<label for="if_join"><input type="radio" name="if4" value="0" id="if_join" /> non primitive </label>
<label for="if_info"><input type="radio" name="if4" value="0" id="if_info" /> user defined </label>
<label for="if_condition"><input type="radio" name="if4"  value="0" id="if_condition" /> both b and c </label>

<h2>In two-dimensional arrays, elements can be accessed by —– indexes.?</h2>
<label for="if_string"><input type="radio" name="if5" value="0" id="if_string" /> one </label>
<label for="if_join"><input type="radio" name="if5" value="0" id="if_join" /> four </label>
<label for="if_info"><input type="radio" name="if5" value="0" id="if_info" /> three </label>
<label for="if_condition"><input type="radio" name="if5"  value="1" id="if_condition" /> two </label>

<h2>. Strings are nothing but —– arrays?</h2>
<label for="if_string"><input type="radio" name="if6" value="1" id="if_string" /> character </label>
<label for="if_join"><input type="radio" name="if6" value="0" id="if_join" /> integer </label>
<label for="if_info"><input type="radio" name="if6" value="0" id="if_info" /> floating point </label>
<label for="if_condition"><input type="radio" name="if6"  value="0" id="if_condition" /> both b and c </label>

<h2>If there is no value returned by the function, then the function return type should be specified
as?</h2>
<label for="if_string"><input type="radio" name="if7" value="1" id="if_string" /> void  </label>
<label for="if_join"><input type="radio" name="if7" value="0" id="if_join" /> function name only </label>
<label for="if_info"><input type="radio" name="if7" value="0" id="if_info" /> int </label>
<label for="if_condition"><input type="radio" name="if7"  value="0" id="if_condition" /> float </label>

<h2>Which escape character can be used to begin a new line in C?</h2>
<label for="if_string"><input type="radio" name="if8" value="0" id="if_string" /> \a </label>
<label for="if_join"><input type="radio" name="if8" value="0" id="if_join" /> \b </label>
<label for="if_info"><input type="radio" name="if8" value="0" id="if_info" /> \m </label>
<label for="if_condition"><input type="radio" name="if8"  value="1" id="if_condition" />\n  </label>

<h2>. Which escape character can be used to beep from speaker in C?</h2>
<label for="if_string"><input type="radio" name="if9" value="1" id="if_string" /> \a </label>
<label for="if_join"><input type="radio" name="if9" value="0" id="if_join" /> \b </label>
<label for="if_info"><input type="radio" name="if9" value="0" id="if_info" /> \m </label>
<label for="if_condition"><input type="radio" name="if9"  value="0" id="if_condition" /> \n </label>

<h2>Character constants should be enclosed between ___?</h2>
<label for="if_string"><input type="radio" name="if10" value="1" id="if_string" /> Single quotes
 </label>
<label for="if_join"><input type="radio" name="if10" value="0" id="if_join" /> double quotes
 </label>
<label for="if_info"><input type="radio" name="if10" value="0" id="if_info" /> both a and b </label>
<label for="if_condition"><input type="radio" name="if10"  value="0" id="if_condition" /> none  </label>

<h2>string constants should be enclosed between ___?</h2>
<label for="if_string"><input type="radio" name="if11" value="0" id="if_string" /> Single quotes
 </label>
<label for="if_join"><input type="radio" name="if11" value="1" id="if_join" /> double quotes
 </label>
<label for="if_info"><input type="radio" name="if11" value="0" id="if_info" /> both a and b </label>
<label for="if_condition"><input type="radio" name="if11"  value="0" id="if_condition" /> none  </label>

<h2>Which of the following is invalid?</h2>
<label for="if_string"><input type="radio" name="if12" value="0" id="if_string" /> '' </label>
<label for="if_join"><input type="radio" name="if12" value="0" id="if_join" /> "" </label>
<label for="if_info"><input type="radio" name="if12" value="0" id="if_info" /> 'a' </label>
<label for="if_condition"><input type="radio" name="if12"  value="1" id="if_condition" /> 'abc' </label>

<h2>The maximum length of a variable in C is ___</h2>
<label for="if_string"><input type="radio" name="if13" value="1" id="if_string" /> 8 </label>
<label for="if_join"><input type="radio" name="if13" value="0" id="if_join" /> 16 </label>
<label for="if_info"><input type="radio" name="if13" value="0" id="if_info" /> 32</label>
<label for="if_condition"><input type="radio" name="if13"  value="0" id="if_condition" /> 64 </label>

<h2>What will be the maximum size of a float variable?</h2>
<label for="if_string"><input type="radio" name="if14" value="0" id="if_string" /> 1 byte </label>
<label for="if_join"><input type="radio" name="if14" value="0" id="if_join" /> 2 byte </label>
<label for="if_info"><input type="radio" name="if14" value="1" id="if_info" /> 4 byte </label>
<label for="if_condition"><input type="radio" name="if14"  value="0" id="if_condition" /> 8 byte </label>

<h2>What will be the maximum size of a double variable?</h2>
<label for="if_string"><input type="radio" name="if15" value="0" id="if_string" /> 1 byte </label>
<label for="if_join"><input type="radio" name="if15" value="0" id="if_join" /> 4 byte </label>
<label for="if_info"><input type="radio" name="if15" value="1" id="if_info" /> 8 byte </label>
<label for="if_condition"><input type="radio" name="if15"  value="0" id="if_condition" /> 16 byte </label>

<h2>. A declaration float a,b; occupies ___ of memory
</h2>
<label for="if_string"><input type="radio" name="if16" value="0" id="if_string" /> 1 byte </label>
<label for="if_join"><input type="radio" name="if16" value="0" id="if_join" /> 4 byte </label>
<label for="if_info"><input type="radio" name="if16" value="1" id="if_info" /> 8 byte </label>
<label for="if_condition"><input type="radio" name="if16"  value="0" id="if_condition" /> 16 byte </label>

<h2>The size of a String variable is?</h2>
<label for="if_string"><input type="radio" name="if17" value="0" id="if_string" /> 1 byte </label>
<label for="if_join"><input type="radio" name="if17" value="0" id="if_join" /> 8 bytes </label>
<label for="if_info"><input type="radio" name="if17" value="0" id="if_info" /> 16 bytes </label>
<label for="if_condition"><input type="radio" name="if17"  value="1" id="if_condition" /> none </label>

<h2>Which of the following is an example of compounded assignment statement?</h2>
<label for="if_string"><input type="radio" name="if18" value="0" id="if_string" /> a=5 </label>
<label for="if_join"><input type="radio" name="if18" value="1" id="if_join" /> a+=5 </label>
<label for="if_info"><input type="radio" name="if18" value="0" id="if_info" /> a=b=c </label>
<label for="if_condition"><input type="radio" name="if18"  value="0" id="if_condition" /> a=b </label>

<h2>The operator && is an example for ___ operator.</h2>
<label for="if_string"><input type="radio" name="if19" value="0" id="if_string" /> assignment </label>
<label for="if_join"><input type="radio" name="if19" value="0" id="if_join" /> increment </label>
<label for="if_info"><input type="radio" name="if19" value="1" id="if_info" /> logical </label>
<label for="if_condition"><input type="radio" name="if19"  value="0" id="if_condition" /> rational </label>

<h2>The operator & is used for</h2>
<label for="if_string"><input type="radio" name="if20" value="1" id="if_string" /> bitwise AND </label>
<label for="if_join"><input type="radio" name="if20" value="0" id="if_join" /> bitwise OR </label>
<label for="if_info"><input type="radio" name="if20" value="0" id="if_info" /> logical AND </label>
<label for="if_condition"><input type="radio" name="if20"  value="0" id="if_condition" /> logical OR </label>

<h2>The operator / can be applied to
</h2>
<label for="if_string"><input type="radio" name="if21" value="0" id="if_string" /> integer values </label>
<label for="if_join"><input type="radio" name="if21" value="1" id="if_join" /> float values </label>
<label for="if_info"><input type="radio" name="if21" value="0" id="if_info" /> double values </label>
<label for="if_condition"><input type="radio" name="if21"  value="0" id="if_condition" />all of these</label>

<h2>The equality operator is represented by</h2>
<label for="if_string"><input type="radio" name="if22" value="0" id="if_string" /> := </label>
<label for="if_join"><input type="radio" name="if22" value="0" id="if_join" />EQ.
</label>
<label for="if_info"><input type="radio" name="if22" value="0" id="if_info" />=</label>
<label for="if_condition"><input type="radio" name="if22"  value="1" id="if_condition" />==</label>

<button type="submit" value="Submit" > Submit</button>

</form>
    
<p>Your grade is: <span id="grade">__</span></p>
<p id="grade2"></p>



<script>
document.getElementById("form1").onsubmit=function() {
       variable = parseInt(document.querySelector('input[name = "variable"]:checked').value);
	   sub = parseInt(document.querySelector('input[name = "sub"]:checked').value);
	   con = parseInt(document.querySelector('input[name = "con"]:checked').value);
	   if1 = parseInt(document.querySelector('input[name = "if1"]:checked').value);
       if2 = parseInt(document.querySelector('input[name = "if2"]:checked').value);
       if3 = parseInt(document.querySelector('input[name = "if3"]:checked').value);
       if4 = parseInt(document.querySelector('input[name = "if4"]:checked').value);
 
       if5 = parseInt(document.querySelector('input[name = "if5"]:checked').value);
       if6 = parseInt(document.querySelector('input[name = "if6"]:checked').value);
       if7 = parseInt(document.querySelector('input[name = "if7"]:checked').value);
       if8 = parseInt(document.querySelector('input[name = "if8"]:checked').value);
   
       if9 = parseInt(document.querySelector('input[name = "if9"]:checked').value);
       if10 = parseInt(document.querySelector('input[name = "if10"]:checked').value);
       if11 = parseInt(document.querySelector('input[name = "if11"]:checked').value);
       if12 = parseInt(document.querySelector('input[name = "if12"]:checked').value);
	   
       if13 = parseInt(document.querySelector('input[name = "if13"]:checked').value);
       if14 = parseInt(document.querySelector('input[name = "if14"]:checked').value);
       if15 = parseInt(document.querySelector('input[name = "if15"]:checked').value);
       if16 = parseInt(document.querySelector('input[name = "if16"]:checked').value);
       if17 = parseInt(document.querySelector('input[name = "if17"]:checked').value);
       if18 = parseInt(document.querySelector('input[name = "if18"]:checked').value);
       if19 = parseInt(document.querySelector('input[name = "if19"]:checked').value);
       if20 = parseInt(document.querySelector('input[name = "if20"]:checked').value);
	   if21 = parseInt(document.querySelector('input[name = "if21"]:checked').value);
       if22 = parseInt(document.querySelector('input[name = "if22"]:checked').value);
	   
	   result = variable + sub + con + if1 + if2 + if3 + if4 +if5 +if6 +if7 +if8 +if9 +if10+ if11 +if12 +if13 +if14 +if15 +if16+ if17 +if18 +if19 +if20 + if21 + if22;
	   
	document.getElementById("grade").innerHTML = result;

 grading = [
	   {score:0,feedback:" You need to spend more time. Try again", image: "sad.png"},
	   {score:1,feedback:"You need to spend more time. Try again", image: "sad.png"},
           {score:2,feedback:" You need to spend more time. Try again", image: "sad.png"},
	   {score:3,feedback:"You need to spend more time. Try again", image: "sad.png"},
           {score:4,feedback:" You need to spend more time. Try again", image: "sad.png"},
	   {score:5,feedback:"You need to spend more time. Try again", image: "sad.png"},
           {score:6,feedback:"You need to spend more time. Try again", image: "sad.png"},
           {score:7,feedback:" You need to spend more time. Try again", image: "sad.png"},
	   {score:8,feedback:"You need to spend more time. Try again", image: "sad.png"},
           {score:9,feedback:" You need to spend more time. Try again", image: "sad.png"},
	   {score:10,feedback:"You need to spend more time. Try again", image: "sad.png"},
 
            {score:11,feedback:"so close. Try again", image: "goodluck.png"},
             {score:12,feedback:"so close. Try again", image: "goodluck.png"},
             {score:13,feedback:"so close. Try again", image: "goodluck.png"},
               {score:14,feedback:"so close. Try again", image: "goodluck.png"},
             {score:15,feedback:"so close. Try again", image: "goodluck.png"},
             {score:16,feedback:"so close. Try again", image: "goodluck.png"},
               {score:17,feedback:"so close. Try again", image: "goodluck.png"},
             {score:18,feedback:"so close. Try again", image: "goodluck.png"},
             {score:19,feedback:"so close. Try again", image: "goodluck.png"},
              {score:20,feedback:"so close. Try again", image: "goodluck.png"},

             {score:21,feedback:"excellent ", image: "perfect.png"},
              {score:22,feedback:"excellent ", image: "perfect.png"},
               {score:23,feedback:"excellent ", image: "perfect.png"},
                {score:24,feedback:"excellent ", image: "perfect.png"},
               {score:25,feedback:"excellent ", image: "perfect.png"},
          
            ];
	  
for(i=0; i<grading.length; i++) {
    if(result == grading[i].score) {
    result2 = grading[i].feedback + "<br /><img src='" + grading[i].image + "' width='300'  />";
	  }
	  }


document.getElementById("grade2").innerHTML = result2; 

return false; // required to not refresh the page; just leave this here
} //this ends the submit function

</script>
<script>
    // Set the date we're counting down to
    var countDownDate = (new Date().getTime() + (60 * 10000));
    // Update the count down every 1 second
    var x = setInterval(function() {
    
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

</div>
</body>
</html>



