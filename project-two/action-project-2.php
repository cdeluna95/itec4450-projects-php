<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Action Project 2</title>
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
        
        @keyframes fadeOut {
        	from {
            	opacity: 0;
                transform: translateY(-20px);
            }
            
            to {
            	opacity: 1;
                transform: translateY(0);
            }
        }
        
        body {
        	color: #575454;
        	font-family: 'Montserrat', sans-serif;
            text-align: center;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        	background: #ed4545;
        }
        
        tr:nth-child(odd) {
        	background: #f0ebeb;
        }
        
        tr:last-child {
        	display: none;
        }
        
        td {
        	padding: 20px;
        }
        
        .results-wrapper {
            max-width: 80%;
            height: auto;
            margin: 0 auto;
        }
        
        .results-table {
        	background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
            margin: 10px auto;
        }
        
        .results-num,
        .results-name,
        .results-email,
        .results-major,
        .results-grade,
        .results-ip {
        	color: #fff;
            font-size: 18px;
        	background: #c9b124;
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
        }
        
        .jump {
        	animation: jumpDown 800ms cubic-bezier(1, -0.79, 0.17, 1.67) 100ms forwards;
        }
        
        .fade:nth-child(1) {
        	animation: fadeOut 400ms ease forwards;
        }
        
        .fade:nth-child(2) {
        	animation: fadeOut 800ms ease forwards;
        }
    </style>
  </head>
  
  <body>
  
  	<div id="action-project-2">
    	<div class="action-wrapper">
        
          <?php
            $postUsername = $_POST["username"];
            $postPassword = $_POST["password"];
            
            // Echo results
            if($postUsername == "drlai" && $postPassword == "ITEC4450") {
              echo "<div class='results-wrapper'>";
                echo "<div class='results'>";
                	echo "<div class='results-info card fade'>";
                    	echo "<h3 class='results-info'>
                        	The grade for each student is shown as follows.
                        </h3>";
                    echo "</div>";
                	echo "<table class='results-table fade'>";
                      echo "<tr class='results-row'>
                      		  <td class='results-num'>No.</td>
                              <td class='results-name'>Name</td>
                              <td class='results-email'>Email</td>
                              <td class='results-major'>Major</td>
                              <td class='results-grade'>Grade</td>
                              <td class='results-ip'>IP Address</td>
                            </tr>";
                            
                            $fileName = "student-info.txt";
                            $studentStr = file_get_contents($fileName);
                            $studentList = explode("\n", $studentStr);
                            $nResult = 0;
                            
                            foreach($studentList as $student) {
                              $studentInfo = explode("\t", $student);

                              echo "<tr>";
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

			// Echo error
            else {
              echo "<div class='error-wrapper'>";
                echo "<div class='error card jump'>";
                  echo "<h3 class='error-info'>Not authorized to see grades.</h3>";
                echo "</div>";
              echo "</div>";
            }
          ?>
          
        </div>
	</div>
    
  </body>
</html>
