<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>HOLLYWOOD Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>
	

    <?php
        echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo " <br>";
            echo "answer is :";
            echo "<br>";
            echo "1) Patna "; 
            echo "<br>";
            echo "2) 5 August 1994";
            echo "<br>";
            echo "3) Baywatch " ; 
            echo "<br>";
            echo "4) Alam Ara";
            echo "<br>";
            echo "5) Live Stunt.";
            echo "<br>";
            echo "6) From top of water tank.";
            echo "<br>";
            echo "7) Sridevi";
            echo "<br>";
            echo "8) 58";
            echo "<br>";
            echo "9) 2678 songs";
            echo "<br>";
            echo "10) Ankhen";
	?>
</body>

</html>