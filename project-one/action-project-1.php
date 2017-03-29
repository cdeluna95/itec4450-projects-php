<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Action Project 1</title>
    <!-- Favicon and Core CSS files -->
    <link type="image/png" rel="shortcut icon" href="../images/favicon.png" />
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  	<!-- Embedded styles -->
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Montserrat');
    	
        @keyframes jumpDown {
        	from {
            	transform: translate(0);
            }
            
    		to {
            	transform: translateY(100px) scale(1.2);
            }
        }
        
        body {
        	color: #575454;
        	font-family: 'Montserrat', sans-serif;
            text-align: center;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        	background: #ed4545;
        }
        
        .results-wrapper {
        	width: 350px;
            max-width: 80%;
            height: auto;
            margin: 0 auto;
        }
        
        .results-email {
        	font-style: italic;
        }
        
        .results-score {
        	border: 3px solid #575454;
            padding: 10px 0;
        }
        
        .error-wrapper {
        	width: 350px;
            max-width: 80%;
            height: auto;
            margin: 0 auto;
        }
        
        .error {
        	color: #ad1818;
        }
        
        .card {
        	background: #fff;
            border-radius: 20px 5px 20px 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            margin: 50px 0;
            padding: 20px;
            animation: jumpDown 800ms cubic-bezier(1, -0.79, 0.17, 1.67) 100ms forwards;
        }
    </style>
  </head>
  
  <body>
  
  	<div id="action-project-1">
    	<div class="action-wrapper">
        
          <?php
          	// Calculate correct answers
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

                echo ($correctAnswer / 4) * 100 . "%";
            }
			
            $name = $_POST["name"];
            $email = $_POST["email"];
            
            // Echo results
            if($name && $email != NULL) {
              echo "<div class='results-wrapper'>";
                echo "<div class='results card'>";
                  echo "<h1 class='results-name'>".$_POST["name"]."</h1>";
                  echo "<h5 class='results-email'>".$_POST["email"]."</h5>";
                  echo "<h4 class='results-major'>".$_POST["major"]."</h4>";
                  echo "<h2 class='results-score'>";
                  	echo calcQuiz();
                  echo "</h2>";
                echo "</div>";
              echo "</div>";
            }

			// Echo error
            else {
              echo "<div class='error-wrapper'>";
                echo "<div class='error card'>";
                  echo "<h3 class='error-info'>Your name and email are required!</h3>";
                echo "</div>";
              echo "</div>";
            }
          ?>
          
        </div>
	</div>
    
  </body>
</html>
