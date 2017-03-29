<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Project 3</title>
    <!-- Favicon and Core CSS files -->
    <link type="image/png" rel="shortcut icon" href="../images/favicon.png" />
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Embedded styles -->
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Raleway:900|Montserrat');
    	
        body {
        	color: #575454;
        	font-family: 'Montserrat', sans-serif;
            text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        	background: #ed4545;
        }
        
        tr:nth-child(odd) {
        	background: #f0ebeb;
        }
        
        td {
        	padding: 20px;
        }
        
    	.project-3-wrapper {
        	text-align: center;
            display: block;
            margin: 0 auto;
        }
        
    	.quiz-title-wrapper {
            margin: 50px 0;
        }
        
        .quiz-title {
        	color: #fff;
        	font-family: 'Raleway', sans-serif;
            letter-spacing: 1px;
            text-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        }
        
        .form-wrapper {
        	width: 350px;
            max-width: 90%;
            height: auto;
            margin: 0 auto;
        }
        
        .form-line {
        	border: 2px solid #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        
        .form-info-title,
        .form-major-title {
        	margin: 5px 0;
        }
        
        .form-control {
        	border: 0;
            border-bottom: 2px solid #ed7979;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
        }
        
        .form-control::-webkit-input-placeholder,
        .form-control::-moz-input-placeholder,
        .form-control:-ms-input-placeholder {
        	color: rgba(0, 0, 0, 0.4);
        }
        
        textarea:focus,
        input[type="name"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        .uneditable-input:focus {
       		border: 0;
          	border-bottom: 2px solid #e0c528;
            border-radius: 0;
          	outline: 0;
            box-shadow: none;
            transition: all 300ms ease-in-out;
        }
        
        .question-number {
        	background: #c9b124;
            border-radius: 20px 5px 0 0;
        	position: absolute;
            top: 0;
            right: 0;
            left: 0;
        }
        
        .question-number h5 {
        	color: #fff;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }
        
        .question-info {
        	margin: 40px 0 0 0;
        }
        
        .question-choice {
        	text-align: left;
        	display: inline-block;
        }
        
        .results-wrapper {
        	max-width: 80%;
            height: auto;
            margin: 0 auto;
        }
        
        .results-info {
        	display: inline-block;
            text-align: center;
        }
        
        .results-caption {
        	color: #fff;
        	text-align: center;
            background: #b39d1e;
            padding: 5px;
        }
        
        .results-table {
        	background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
            margin: 20px auto 60px;
        }
        
        .results-row td {
        	color: #fff;
            font-size: 18px;
        	background: #c9b124;
        }
        
        .results-row-none:last-child {
        	display: none;
        }
        
        .card {
        	background: #fff;
            border-radius: 20px 5px 20px 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            margin: 60px 0;
            padding: 20px;
        }
        
        .sm {
        	width: 350px;
        }
        
        .btn {
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            border: 0;
            border-radius: 10px 5px 10px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 20px 5px;
            padding: 5px 30px;
            transition: background 300ms ease-in-out;
        }
        
        .btn-primary {
        	background: #c9b124;
        }
        
        .btn-primary:hover {
        	background: #b8a11a;
        }
        
        .btn-default {
        	background: #fff;
        }
        
        .btn-default:hover {
        	background: #deddd5;
        }
        
        .text-danger {
        	display: block;
            margin: 5px 0 0 0;
        }
    </style>
  </head>
  
  <body>
  
  	<!-- Embedded functions -->
  	<?php
    	$name = $email = $questionOne = $questionTwo = $questionThree = $questionFour = $questionFive = "";
        $nameError = $emailError = "";
        $postName = $_POST["name"];
        $postEmail = $_POST["email"];
        $questionOne = $_POST["Q1"];
        $questionTwo = $_POST["Q2"];
        $questionThree = $_POST["Q3"];
        $questionFour = $_POST["Q4"];
        $questionFive = $_POST["Q5"];
        $date = date("m/d/Y");
        $time = date("h:i:sa");
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $submit = $_POST["submit"];
        
        function testInput($input) {
          $input = trim($input);
          $input = htmlspecialchars($input);
          return $input;
    	}
        
        if(isset($submit)) {
        	// If name is empty
        	if(empty($postName)) {
            	$nameError = "* Name is required!";
            }
            
            else {
            	$name = $postName;
            }
            
            // If email is empty or invalid
            if(empty($postEmail)) {
            	$emailError = "* Email is required!";
            }
            
            else {
            	$email = testInput($postEmail);
                if(!filter_var($postEmail, FILTER_VALIDATE_EMAIL)) {
                	$emailError = "Invalid email address!";
                }
            }
            
            $choiceOne = testInput($questionOne);
            $choiceTwo = testInput($questionTwo);
            $choiceThree = testInput($questionThree);
            $choiceFour = testInput($questionFour);
            $choiceFive = testInput($questionFive);
        }
    ?>
  
  	<div id="project-1">
    	<div class="project-3-wrapper">
        	
            <!-- Title -->
        	<div class="quiz-title-wrapper">
            	<h1 class="quiz-title">A Survey in PHP</h1>
            </div>
            
            <!-- Form -->
            <div class="form-wrapper">
            	
                <!-- Action -->
            	<div class="form-group-wrapper">
                	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    	
                        <!-- Input -->
                        <div class="form-info card">
                          <div class="form-info-title">
                          	Information:
                          </div>
                          
                          <div class="form-group">
                              <input class="form-control" type="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
                              <span class="text-danger"><?php echo $nameError; ?></span>
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email address">
                              <span class="text-danger"><?php echo $emailError; ?></span>
                          </div>
                        </div>

                        <hr class="form-line">

                        <!-- Questions -->
                        <div class="questions-wrapper">

                            <div class="question card">
                            	<div class="question-number">
                                  <h5>Q1</h5>
                                </div>
                                <div class="question-info">
                                  <p>How old are you?</p>
                                  <div class="question-choice">
                                    <div class="form-group">
                                      <input class="form-control" type="number" name="Q1" value="<?php echo $choiceOne; ?>" placeholder="Age">
                                  	</div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q2</h5>
                                </div>
                                <div class="question-info">
                                  <p>On average, how long do you use computers everyday?</p>
                                  <div class="question-choice">
                                    <div class="form-group">
                                      <input class="form-control" type="number" name="Q2" value="<?php echo $choiceTwo; ?>" placeholder="Average">
                                  	</div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q3</h5>
                                </div>
                                <div class="question-info">
                                  <p>What's your gender?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceThree == "A") echo "checked"; ?>
                                                name="Q3">Male</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceThree == "B") echo "checked"; ?>
                                                name="Q3">Female</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceThree == "C") echo "checked"; ?>
                                      			name="Q3">I prefer not to answer</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q4</h5>
                                </div>
                                <div class="question-info">
                                  <p>PHP programming is challenging.</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceFour == "A") echo "checked"; ?>
                                                name="Q4">Strongly agree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceFour == "B") echo "checked"; ?>
                                                name="Q4">Agree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceFour == "C") echo "checked"; ?>
                                                name="Q4">Neutral</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceFour == "D") echo "checked"; ?>
                                                name="Q4">Disagree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="E" 
                                      			<?php if($choiceFive == "E") echo "checked"; ?>
                                                name="Q4">Strongly disagree</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q5</h5>
                                </div>
                                <div class="question-info">
                                  <p>PHP programming is fun.</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceFive == "A") echo "checked"; ?>
                                                name="Q5">Strongly agree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceFive == "B") echo "checked"; ?>
                                                name="Q5">Agree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceFive == "C") echo "checked"; ?>
                                                name="Q5">Neutral</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceFive == "D") echo "checked"; ?>
                                                name="Q5">Disagree</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="E" 
                                      			<?php if($choiceFive == "E") echo "checked"; ?>
                                                name="Q5">Strongly disagree</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>

                        <hr class="form-line">

                        <!-- Submission -->
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                            <input class="btn btn-default" type="reset" name="reset" value="Reset">
                        </div>
                        
      				</form>
              	</div>
                
            </div>
                
            <!-- Embedded functions -->
            <?php
              // If user submits, this should happen
              if($submit) {
                date_default_timezone_set("America/New_York");

                // Organize contents
                $personInfo = "";
                $personInfo .= $postName;
                $personInfo .= "\t";
                $personInfo .= $postEmail;
                $personInfo .= "\t";
                $personInfo .= $choiceOne;
                $personInfo .= "\t";
                $personInfo .= $choiceTwo;
                $personInfo .= "\t";
                $personInfo .= $choiceThree;
                $personInfo .= "\t";
                $personInfo .= $choiceFour;
                $personInfo .= "\t";
                $personInfo .= $choiceFive;
                $personInfo .= "\t";
                $personInfo .= $date;
                $personInfo .= "\t";
                $personInfo .= $time;
                $personInfo .= "\t";
                $personInfo .= $ipAddress;
                $personInfo .= "\n";

                // Store in person-info.txt
                file_put_contents("person-info.txt", $personInfo, FILE_APPEND | LOCK_EX);
              }

              if($name && $email != NULL) {
                $fileName = "person-info.txt";
                $studentStr = file_get_contents($fileName);
                $studentList = explode("\n", $studentStr);
                foreach($studentList as $student) {
                  $studentInfo = explode("\t", $student);
                  foreach($studentInfo as $info) {
                    if($info == $name)
                      $nameExists = "Yes";
                  }
                }

                if($nameExists == "Yes") {
                  echo "<hr class='form-line sm'>";

                  echo "<div class='results-wrapper'>";
                    echo "<div class='results'>";
                      echo "<div class='results-info card sm'>";
                      echo "<h3 class='results-info'>
                                You've already taken the survey!
                            </h3>";
                      echo "</div>";
                }
                
                else {
                  echo "<hr class='form-line sm'>";

                  echo "<div class='results-wrapper'>";
                    echo "<div class='results'>";
                      echo "<div class='results-info card sm'>";
                      echo "<h3 class='results-info'>
                                Thank you for taking this survey!
                            </h3>";
                      echo "</div>";
                }

                    // Display percentage of participants based on gender
                    $fileName = "person-info.txt";
                    $studentStr = file_get_contents($fileName);
                    $studentList = explode("\n", $studentStr);
                    $genders = array(
                      "A",
                      "B",
                      "C"
                    );
                    $gendersSpecific = array(
                      "Male",
                      "Female",
                      "Preferred not to answer"
                    );
                    $numGender = array(0, 0, 0);
                    $totalGender = count($studentList);
                    foreach($studentList as $student) {
                      $studentInfo = explode("\t", $student);
                      for($i = 0; $i < count($genders); $i++) {
                        if($genders[$i] == $studentInfo[4])
                          $numGender[$i]++;
                      }
                    }
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Percentage of participates based on gender (" . $totalGender . ")
                            </caption>";
                      echo "<tr class='results-row'>
                              <td class='results-gender'>Gender</td>
                              <td class='results-percent'>Percentage</td>
                            </tr>";
                      for($i = 0; $i < count($genders); $i++) {
                        echo "<tr>";
                          echo "<td>$gendersSpecific[$i]</td>
                            <td>" .
                              "<progress value=" . $numGender[$i] .
                              " max=" . $totalGender . "></progress> " . 
                              number_format($numGender[$i] / $totalGender * 100, 2) . "% " .
                            "</td>";
                        echo "<tr/>";
                      }
                    echo "</table>";

                    // Display percentage of participants who think PHP is challenging
                    $fileName = "person-info.txt";
                    $studentStr = file_get_contents($fileName);
                    $studentList = explode("\n", $studentStr);
                    $categories = array(
                      "A",
                      "B",
                      "C",
                      "D",
                      "E"
                    );
                    $categoriesSpecific = array(
                      "Strongly agree",
                      "Agree",
                      "Neutral",
                      "Disagree",
                      "Strongly disagree"
                    );
                    $numCategory = array(0, 0, 0, 0, 0);
                    $totalCategory = count($studentList);
                    foreach($studentList as $student) {
                      $studentInfo = explode("\t", $student);
                      for($i = 0; $i < count($categories); $i++) {
                        if($categories[$i] == $studentInfo[5])
                          $numCategory[$i]++;
                      }
                    }
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Percentage of participants who think PHP is challenging (" . $totalCategory . ")
                            </caption>";
                      echo "<tr class='results-row'>
                              <td class='results-gender'>Category</td>
                              <td class='results-percent'>Percentage</td>
                            </tr>";
                      for($i = 0; $i < count($categories); $i++) {
                        echo "<tr>";
                          echo "<td>$categoriesSpecific[$i]</td>
                            <td>" .
                              "<progress value=" . $numCategory[$i] .
                              " max=" . $totalCategory . "></progress> " . 
                              number_format($numCategory[$i] / $totalCategory * 100, 2) . "% " .
                            "</td>";
                        echo "<tr/>";
                      }
                    echo "</table>";

                    // Display percentage of participants who think PHP is fun
                    $fileName = "person-info.txt";
                    $studentStr = file_get_contents($fileName);
                    $studentList = explode("\n", $studentStr);
                    $categories = array(
                      "A",
                      "B",
                      "C",
                      "D",
                      "E"
                    );
                    $categoriesSpecific = array(
                      "Strongly agree",
                      "Agree",
                      "Neutral",
                      "Disagree",
                      "Strongly disagree"
                    );
                    $numCategory = array(0, 0, 0, 0, 0);
                    $totalCategory = count($studentList);
                    foreach($studentList as $student) {
                      $studentInfo = explode("\t", $student);
                      for($i = 0; $i < count($categories); $i++) {
                        if($categories[$i] == $studentInfo[6])
                          $numCategory[$i]++;
                      }
                    }
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Percentage of participants who think PHP is fun (" . $totalCategory . ")
                            </caption>";
                      echo "<tr class='results-row'>
                              <td class='results-gender'>Category</td>
                              <td class='results-percent'>Percentage</td>
                            </tr>";
                      for($i = 0; $i < count($categories); $i++) {
                        echo "<tr>";
                          echo "<td>$categoriesSpecific[$i]</td>
                            <td>" .
                              "<progress value=" . $numCategory[$i] .
                              " max=" . $totalCategory . "></progress> " . 
                              number_format($numCategory[$i] / $totalCategory * 100, 2) . "% " .
                            "</td>";
                        echo "<tr/>";
                      }
                    echo "</table>";

                    // Display results of participants who strongly agree that PHP programming is fun and challenging
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Results of participants who strongly agree that PHP programming is fun and challenging
                            </caption>";
                      echo "<tr class='results-row'>
                                <td class='results-name'>Name</td>
                                <td class='results-email'>Email</td>
                                <td class='results-age'>Age</td>
                                <td class='results-hours'>Hours</td>
                                <td class='results-answers' colspan='3'>Answers</td>
                                <td class='results-date'>Date</td>
                                <td class='results-time'>Time</td>
                                <td class='results-ip'>IP Address</td>
                            </tr>";

                      $fileName = "person-info.txt";
                      $studentStr = file_get_contents($fileName);
                      $studentList = explode("\n", $studentStr);

                      foreach($studentList as $student) {
                        $studentInfo = explode("\t", $student);

                        if($studentInfo[5] == "A" && $studentInfo[6] == "A") {
                          echo "<tr>";
                            foreach($studentInfo as $info) {
                              echo "<td>" . $info . "</td>";
                            }
                          echo "</tr>";
                        }
                      }
                    echo "</table>";

                    // Display results of participants who are 30+ years old and spend 4+ hours on the computer
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Results of participants who are 30+ years old and spend 4+ hours on the computer
                            </caption>";
                      echo "<tr class='results-row'>
                                <td class='results-name'>Name</td>
                                <td class='results-email'>Email</td>
                                <td class='results-age'>Age</td>
                                <td class='results-hours'>Hours</td>
                                <td class='results-answers' colspan='3'>Answers</td>
                                <td class='results-date'>Date</td>
                                <td class='results-time'>Time</td>
                                <td class='results-ip'>IP Address</td>
                            </tr>";

                      $fileName = "person-info.txt";
                      $studentStr = file_get_contents($fileName);
                      $studentList = explode("\n", $studentStr);

                      foreach($studentList as $student) {
                        $studentInfo = explode("\t", $student);

                        if($studentInfo[2] >= "30" && $studentInfo[3] >= "4") {
                          echo "<tr>";
                            foreach($studentInfo as $info) {
                              echo "<td>" . $info . "</td>";
                            }
                          echo "</tr>";
                        }
                      }
                    echo "</table>";

                    // Display results of those who took the survey after 9/22/2016 at 11:59:59 PM
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              Results of participants who took the survey after 9/22/2016 at 11:59:59 PM
                           </caption>";
                      echo "<tr class='results-row'>
                                <td class='results-name'>Name</td>
                                <td class='results-email'>Email</td>
                                <td class='results-age'>Age</td>
                                <td class='results-hours'>Hours</td>
                                <td class='results-answers' colspan='3'>Answers</td>
                                <td class='results-date'>Date</td>
                                <td class='results-time'>Time</td>
                                <td class='results-ip'>IP Address</td>
                            </tr>";

                      $fileName = "person-info.txt";
                      $studentStr = file_get_contents($fileName);
                      $studentList = explode("\n", $studentStr);

                      foreach($studentList as $student) {
                        $studentInfo = explode("\t", $student);
                        $time = strtotime($studentInfo[7]);
                        $oldTime = strtotime("9/22/2016");

                        if($time > $oldTime) {
                          echo "<tr>";
                            foreach($studentInfo as $info) {
                              echo "<td>" . $info . "</td>";
                            }
                          echo "</tr>";
                        }
                      }
                    echo "</table>";

                    // Display all results
                    echo "<table class='results-table'>";
                      echo "<caption class='results-caption'>
                              All survey results
                            </caption>";
                      echo "<tr class='results-row'>
                                <td class='results-num'>No.</td>
                                <td class='results-name'>Name</td>
                                <td class='results-email'>Email</td>
                                <td class='results-age'>Age</td>
                                <td class='results-hours'>Hours</td>
                                <td class='results-answers' colspan='3'>Answers</td>
                                <td class='results-date'>Date</td>
                                <td class='results-time'>Time</td>
                                <td class='results-ip'>IP Address</td>
                            </tr>";

                      $fileName = "person-info.txt";
                      $studentStr = file_get_contents($fileName);
                      $studentList = explode("\n", $studentStr);
                      $nResult = 0;

                      foreach($studentList as $student) {
                        $studentInfo = explode("\t", $student);

                        echo "<tr class='results-row-none'>";
                          echo "<td>" . $nResult++ . "</td>";
                          foreach($studentInfo as $info) {
                            echo "<td>" . $info . "</td>";
                          }
                        echo "</tr>";
                      }
                    echo "</table>";
                  echo "</div>";
                echo "</div>";
              }
            ?>
        
        </div>
    </div>
    
  </body>
</html>
