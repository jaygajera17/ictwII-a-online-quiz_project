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
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "B") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>
	

    <?php
      
            echo " <br>";
            echo "answer is :";
            echo "<br>";
            echo "1) 'WALL-E' "; 
            echo "<br>";
            echo "2) Groundhog Day";
            echo "<br>";
            echo "3) Hockey " ; 
            echo "<br>";
            echo "4) Tire salesman";
            echo "<br>";
            echo "5) Journey to the Center of the Earth";
            echo "<br>";
            echo "6) Marlon Brando";
            echo "<br>";
            echo "7) Citizen Kane";
            echo "<br>";
            echo "8) Snow White and the Seven Dwarfs";
            echo "<br>";
            echo "9) Christine";
            echo "<br>";
            echo "10) The Last House on the Left";
	?>
</body>

</html>