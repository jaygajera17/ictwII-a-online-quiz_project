<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>python quiz answer</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
         echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo " <br>";
            echo "answer is :";
            echo "<br>";
            echo "1) #"; 
            echo "<br>";
            echo "2) it indicates a private variable of a class";
            echo "<br>";
            echo "3) val " ; 
            echo "<br>";
           echo "4) try";
           echo "<br>";
            echo "5)  print()";
        ?>
	
	</div>
	

</body>

</html>