<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Project 2</title>
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
        
    	.project-2-wrapper {
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
        input[type="password"]:focus,
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
        	display: inline-block;
        	text-align: left;
        }
        
        .results-email {
        	font-style: italic;
        }
        
        .results-score {
        	border: 3px solid #575454;
            padding: 10px 0;
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
        
        .btn {
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            border: 0;
            border-radius: 10px 5px 10px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 20px 5px 0;
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
        
        .btn-reset {
        	color: #fff;
        	background: #ed4545;
        }
        
        .btn-reset:hover {
        	color: #fff;
        	background: #db3737;
        }
        
        .btn-margin {
        	margin: 20px 5px;
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
    	// Declare global variables
        $name = $email = $major = $username = $password = $questionOne = $questionTwo = $questionThree = $questionFour = "";
        $nameError = $emailError = "";
        $submit = $_POST["submit"];
        $submitTwo = $_POST["submitTwo"];
        $postName = $_POST["name"];
        $postEmail = $_POST["email"];
        $postMajor = $_POST["major"];
        $postUsername = $_POST["username"];
        $postPassword = $_POST["password"];
        $questionOne = $_POST["Q1"];
        $questionTwo = $_POST["Q2"];
        $questionThree = $_POST["Q3"];
        $questionFour = $_POST["Q4"];
        $quizResult = calcQuiz();
        $jsonResult = json_encode($quizResult);
        $trimResult = trim($jsonResult, '"');
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        
    	// Trim HTML characters
        function testInput($input) {
          $input = trim($input);
          $input = htmlspecialchars($input);
          return $input;
    	}
        
        function calcQuiz() {
          $questionOne = $_POST["Q1"];
          $questionTwo = $_POST["Q2"];
          $questionThree = $_POST["Q3"];
          $questionFour = $_POST["Q4"];
          $correctAnswer = 0;

          if($questionOne == "D") {
            $correctAnswer++;
          }

          if($questionTwo == "B") {
            $correctAnswer++;
          }

          if($questionThree == "B") {
            $correctAnswer++;
          }

          if($questionFour == "C") {
            $correctAnswer++;
          }

          return ($correctAnswer / 4) * 100 . "%";
        }
        
        // Check if submitted
        if(isset($submit)) {
        	// If name is empty
        	if(empty($postName)) {
            	$nameError = "* Name is required!";
            }
            
            else {
            	$name = testInput($postName);
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
            
            $major = testInput($postMajor);
            $choiceOne = testInput($questionOne);
            $choiceTwo = testInput($questionTwo);
            $choiceThree = testInput($questionThree);
            $choiceFour = testInput($questionFour);
        }
    ?>
  
  	<div id="project-2">
    	<div class="project-2-wrapper">
        	
            <!-- Title -->
        	<div class="quiz-title-wrapper">
            	<h1 class="quiz-title">A Simple Web-Based Quiz in PHP</h1>
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

                          <!-- Selection -->
                          <div class="form-major">
                              <div class="form-major-title">
                                  Area of study:
                              </div>

                              <select name="major">
                              	<option value="Enterprise Systems" 
                                	<?php if($major == "Enterprise Systems") echo "selected"; ?>>
                                    	Enterprise Systems
                                </option>
                              	<option value="Software Development"
                                	<?php if($major == "Software Development") echo "selected"; ?>>
                                    	Software Development
                                </option>
                                <option value="Systems and Security"
                                	<?php if($major == "Systems and Security") echo "selected"; ?>>
                                    	Systems and Security
                                </option>
                                <option value="Digital Media"
                                	<?php if($major == "Digital Media") echo "selected"; ?>>
                                    	Digital Media
                                </option>
                                <option value="Other"
                                	<?php if($major == "Other") echo "selected"; ?>>
                                    	Other
                                </option>
                              </select>
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
                                  <p>Which of the following is not a PHP framework?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceOne == "A") echo "checked"; ?>
                                                name="Q1">CodeIgniter</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceOne == "B") echo "checked"; ?>
                                      			name="Q1">CakePHP</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceOne == "C") echo "checked"; ?>
                                      			name="Q1">Laravel</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceOne == "D") echo "checked"; ?>
                                                name="Q1">Node.js</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q2</h5>
                                </div>
                                <div class="question-info">
                                  <p>How do you declare a variable in PHP?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceTwo == "A") echo "checked"; ?>
                                      			name="Q2">var</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceTwo == "B") echo "checked"; ?>
                                                name="Q2">$</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceTwo == "C") echo "checked"; ?>
                                                name="Q2">#</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceTwo == "D") echo "checked"; ?>
                                                name="Q2">.</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q3</h5>
                                </div>
                                <div class="question-info">
                                  <p>What kind of language is PHP?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceThree == "A") echo "checked"; ?>
                                                name="Q3">Back-end database language</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceThree == "B") echo "checked"; ?>
                                                name="Q3">Back-end scripting language</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceThree == "C") echo "checked"; ?>
                                                name="Q3">Front-end markup language</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceThree == "D") echo "checked"; ?>
                                                name="Q3">Front-end server language</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q4</h5>
                                </div>
                                <div class="question-info">
                                  <p>What was PHP originally called?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" 
                                      			<?php if($choiceFour == "A") echo "checked"; ?>
                                                name="Q4">Hypertext Processor</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" 
                                      			<?php if($choiceFour == "B") echo "checked"; ?>
                                                name="Q4">HyperText Markup Language</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" 
                                      			<?php if($choiceFour == "C") echo "checked"; ?>
                                                name="Q4">Personal Home Page</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" 
                                      			<?php if($choiceFour == "D") echo "checked"; ?>
                                      			name="Q4">Programming Hash Package</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>

                        <hr class="form-line">

                        <!-- Submission -->
                        <div class="form-group">
                            <input class="btn btn-primary btn-margin" type="submit" name="submit" value="Submit">
                            <input class="btn btn-default btn-margin" type="reset" name="reset" value="Reset">
                        </div>
      				</form>
                    
                    <hr class="form-line">
                    
                    <!-- Embedded functions -->
                    <?php
                    	// Check if submitted
                        if($postName && $postEmail != NULL) {
                        	if(isset($submit)) {
                            	
                            	echo "<div class='form-wrapper'>";
                                  echo "<div class='question card'>";
                                  	echo "<div class='results-title'>
                                    		Results: 
                                          </div>";
                                        
                                    echo "<h1 class='results-name'>" . $postName . "</h1>";
                                    echo "<h5 class='results-email'>" . $postEmail . "</h5>";
                                    echo "<h4 class='results-major'>" . $postMajor . "</h4>";
                                    echo "<h2 class='results-score'>"; echo calcQuiz(); echo "</h2>";
                                  echo "</div>";
                                echo "</div>";
                                
                                echo "<hr class='form-line'>";
                            }
                        }
                        
                        // Organize contents
                        if($submit) {
                          $studentInfo = "";
                          $studentInfo .= $postName;
                          $studentInfo .= "\t";
                          $studentInfo .= $postEmail;
                          $studentInfo .= "\t";
                          $studentInfo .= $postMajor;
                          $studentInfo .= "\t";
                          $studentInfo .= $trimResult;
                          $studentInfo .= "\t";
                          $studentInfo .= $ipAddress;
                          $studentInfo .= "\n";

                          // Store in student-info.txt
                          file_put_contents("student-info.txt", $studentInfo, FILE_APPEND | LOCK_EX);
                      }
                    ?>
                    
                    <!-- Admin Authentication -->
                    <form action="action-project-2.php" method="post">
                    	<div class="form-info card">
                          <div class="form-info-title">
                          	Grades:
                          </div>
                          
                          <div class="form-group">
                        	<input class="form-control" type="name" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                       	  	<input class="form-control" type="password" name="password" placeholder="Password">
                          </div>
                          
                          <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submitTwo" value="Submit">
                            <input class="btn btn-reset" type="reset" name="reset" value="Reset">
                          </div>
                        </div>
                    </form>
              	</div>
        
        </div>
    </div>
    
  </body>
</html>
