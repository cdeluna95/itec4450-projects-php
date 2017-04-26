<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Action Project 5</title>
    <!-- Favicon and Core CSS files -->
    <link type="image/png" rel="shortcut icon" href="../images/favicon.png" />
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Embedded styles -->
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Raleway:900|Montserrat');
        
        @keyframes bounce {
            0%, 20%, 60%, 100% {
                transform: translateY(0);
            } 

            40% {
                transform: translateY(-15px);
            }

            80% {
                transform: translateY(-10px);
            }
        }
        
        @keyframes zoom {
        	from {
            	transform: scale(0);
            }
            
            too {
            	transform: scale(1.0);
            }
        }
        
        @keyframes shake {
        	0%, 100% {
                transform: translateY(0);
            }
            
            15%, 35%, 55%, 75% {
            	color: #e0c528;
                transform: translateY(-5px) rotate(10deg);
            }
            
            25%, 45%, 65%, 85% {
            	color: #ccb52d;
            	transform: translateY(-5px) rotate(-10deg);
            }
        }
        
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
            text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        	background: #ed4545;
        }
        
        h4 {
        	font-weight: 900;
            display: inline;
        }
        
        ul {
        	margin: 0;
            padding: 0;
        	list-style: none;
        }
        
        li {
        	display: inline-block;
            margin: 10px;
        }
        
    	.project-5-wrapper {
        	text-align: center;
            display: block;
            margin: 0 auto;
        }
        
    	.system-title-wrapper {
            margin: 50px 0;
        }
        
        .system-title {
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
            border-radius: 20px 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 60px 0;
            padding: 20px;
        }
        
        .card-header {
        	background: #e0c528;
            width: 100%;
            height: 40%;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .card-photo-wrapper {
        	margin: 47.5px 0 20px 0;
            display: inline-block;
            position: relative;
        }
        
        .card-photo {
        	border: 4px solid #fff;
        	border-radius: 50%;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        
        .card-grade-wrapper {
        	background: #fff;
            border-radius: 50%;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
            width: 50px;
            height: 50px;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .card-grade {
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        	position: relative;
    		top: -16.5%;
            left: 1.5%;
        }
        
        .card-info-wrapper {
        	margin: 0;
        }
        
        .card-info-title {
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }
        
        .card-button-wrapper {
            display: inline-block;
            position: relative;
        }
        
        .table-wrapper {
        	text-align: center;
            display: inline-block;
        	margin: 0 auto 60px;
        }
        
        .table-info {
        	border-radius: 20px 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2),
              			0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .table-tr:nth-child(even) .table-td:last-child {
        	background: #f0ebeb;
        }
        
        .table-tr:first-child .table-td:first-child {
        	border-radius: 20px 0 0 0;
        }
        
        .table-tr:first-child .table-td:last-child {
        	border-radius: 0 5px 0 0;
        }
        
        .table-tr:last-child .table-td:first-child {
        	border-radius: 0 0 0 5px;
        }
        
        .table-tr:last-child .table-td:last-child {
        	border-radius: 0 0 20px 0;
        }
        
        .table-td {
            padding: 20px;
        }
        
        .table-td:nth-child(1) {
        	color: #fff;
        	background: #e0c528;
        }
        
        .table-td:nth-child(2) {
        	background: #fff;
        }
        
        .glyphicon {
        	color: #ed4545;
            font-size: 24px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            transition: 0.2s ease-in-out;
        }
        
        .glyphicon:hover {
        	color: #e0c528;
        	text-decoration: none;
        	animation: bounce 0.6s ease-in-out;
        }
        
        .glyphicon-shake {
        	animation: shake 1000ms ease-in-out 100ms infinite;
        }
        
        .zoom {
        	animation: zoom 1200ms ease forwards;
        }
        
        .jump {
        	animation: jumpDown 800ms cubic-bezier(1, -0.79, 0.17, 1.67) 100ms forwards;
        }
        
        .fade-first {
        	animation: fadeOut 400ms ease forwards;
        }
        
        .fade-second {
        	animation: fadeOut 800ms ease forwards;
        }
        
        .fade-third {
        	animation: fadeOut 1200ms ease forwards;
        }
    </style>
  </head>
  
  <body>
  
  	<!-- Embedded functions -->
  	<?php
    	$username = $password = "";
        $postUsername = $_POST["username"];
        $postPassword = $_POST["password"];
        $submit = $_POST["submit"];
        
        function testInput($input) {
          $input = trim($input);
          $input = htmlspecialchars($input);
          return $input;
    	}
        
        function My_Connect_DB() {
          $servername = "localhost";
          $username = "cdeluna";
          $password = "";
          $dbname = "my_cdeluna";
          $conn = mysqli_connect($servername, $username, $password, $dbname);

          if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          return $conn;
        }

        function My_SQL_Query($conn, $sql) {
          if($result = mysqli_query($conn, $sql)) {
            // echo "SQL is done successfully!<br/>";
          } else {
            echo "Error in running SQL: " . mysqli_error($conn);
          }
          return $result;
        }
        
        if(isset($submit)) {
            $username = testInput($postUsername);
        }
    ?>
  
  	<div id="project-5">
    	<div class="project-5-wrapper">
        
          <?php
            if(isset($submit)) {
              $conn = My_Connect_DB();
              $sql = "SELECT * FROM Grades WHERE username='" . $postUsername . "' AND password='" . md5($postPassword) ."';";
              $result = My_SQL_Query($conn, $sql);

              // If login fails
              if(mysqli_num_rows($result) <= 0) {
                echo "<div class='form-wrapper'>";
                  echo "<div class='form-group-wrapper'>";
                    echo "<div class='error-wrapper'>";
                      echo "<div class='error card jump'>";
                        echo "<h3 class='error-info'>
                                  Username or password does not exist.
                                  <a href='http://cdeluna.altervista.org/php/projects/project-5.php'>Try again.</a>
                              </h3>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";  
                echo "</div>"; 
                // If login successful
                } else {
                  $row = mysqli_fetch_row($result);
                  $_SESSION["username"] = $row[0];
                  $_SESSION["password"] = $row[1];
                  $_SESSION["name"] = $row[2];
                  $_SESSION["email"] = $row[3];
                  $_SESSION["picture"] = $row[4];
                  $_SESSION["grade"] = $row[5];
                  $_SESSION["date"] = $row[6];
                  $_SESSION["time"] = $row[7];
                  
                  echo "<div class='system-title-wrapper fade-first'>
                  			<h2 class='system-title'>Welcome, " . $row[0] . "!</h2>
                        </div>";

                  echo "<div class='form-wrapper'>
                          <div class='form-group-wrapper'>

                              <div class='form-info card fade-second'>
                                  <div class='card-header'></div>

                                  <div class='card-photo-wrapper'>
                                      <img class='card-photo' src='" . $row[4] . "'>
                                  </div>

                                  <div class='card-info-wrapper'>
                                      <h4 class='card-info-title'> " . $row[2] . " </h4>
                                      <p class='text-muted'>Student</p>
                                  </div>

                                  <div class='card-button-wrapper'>
                                      <ul class='card-button-ul'>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=1'
                                                  <span class='glyphicon glyphicon-font'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=2'
                                                  <span class='glyphicon glyphicon-info-sign'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=3'
                                                  <span class='glyphicon glyphicon-envelope'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=4'
                                                  <span class='glyphicon glyphicon-log-out'></span>
                                               </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                          </div>
                        </div>";
                }
              }
          ?>
          
          <?php
          	if(isset($_SESSION["username"])) {
            	// Choice 1
            	if($_GET["choice"] == 1) {
                	echo "<div class='system-title-wrapper fade-first'>
                  			<h2 class='system-title'>Student Grade</h2>
                        </div>";
                        
                	echo "<div class='form-wrapper'>
                          <div class='form-group-wrapper'>

                              <div class='form-info card fade-second'>
                                  <div class='card-header'></div>

                                  <div class='card-photo-wrapper'>
                                      <img class='card-photo' src='" . $_SESSION['picture'] . "'>
                                      <div class='card-grade-wrapper zoom'>
                                  	  	<h3 class='card-grade'>" . $_SESSION['grade'] . "</h3>
                                  	  </div>
                                  </div>

                                  <div class='card-info-wrapper'>
                                      <h4 class='card-info-title'> " . $_SESSION['name'] . " </h4>
                                      <p class='text-muted'>Student</p>
                                  </div>

                                  <div class='card-button-wrapper'>
                                      <ul class='card-button-ul'>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=1'
                                                  <span class='glyphicon glyphicon-font'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=2'
                                                  <span class='glyphicon glyphicon-info-sign'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=3'
                                                  <span class='glyphicon glyphicon-envelope'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=4'
                                                  <span class='glyphicon glyphicon-log-out'></span>
                                               </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                          </div>
                        </div>";
                }
                
                // Choice 2
                if($_GET["choice"] == 2) {
                	echo "<div class='system-title-wrapper fade-first'>
                  			<h2 class='system-title'>User Information</h2>
                        </div>";
                        
                	echo "<div class='form-wrapper'>
                          <div class='form-group-wrapper'>

                              <div class='form-info card fade-second'>
                                  <div class='card-header'></div>

                                  <div class='card-photo-wrapper'>
                                      <img class='card-photo' src='" . $_SESSION['picture'] . "'>
                                  </div>

                                  <div class='card-info-wrapper'>
                                      <h4 class='card-info-title'> " . $_SESSION['name'] . " </h4>
                                      <p class='text-muted'>Student</p>
                                  </div>

                                  <div class='card-button-wrapper'>
                                      <ul class='card-button-ul'>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=1'
                                                  <span class='glyphicon glyphicon-font'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=2'
                                                  <span class='glyphicon glyphicon-info-sign'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=3'
                                                  <span class='glyphicon glyphicon-envelope'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=4'
                                                  <span class='glyphicon glyphicon-log-out'></span>
                                               </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              
                              <div class='table-wrapper fade-third'>
                              	<table class='table-info'>
                                	<tr class='table-tr'>
                                    	<td class='table-td'>Username</td>
                                        <td class='table-td'>" . $_SESSION['username'] . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Password</td>
                                        <td class='table-td'>" .  str_repeat("*", strlen($_SESSION['password']))  . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Name</td>
                                        <td class='table-td'>" . $_SESSION['name'] . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Email</td>
                                        <td class='table-td'>" . $_SESSION['email'] . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Grade</td>
                                        <td class='table-td'>" . $_SESSION['grade'] . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Date</td>
                                        <td class='table-td'>" . $_SESSION['date'] . "</td>
                                    </tr>
                                    <tr class='table-tr'>
                                    	<td class='table-td'>Time</td>
                                        <td class='table-td'>" . $_SESSION['time'] . "</td>
                                    </tr>
                                </table>
                              </div>

                          </div>
                        </div>";
                }
                
                // Choice 3
                if($_GET["choice"] == 3) {
                  $to = $_SESSION['email'];
                  $subject = "Verify your email for Project 5";
                  $message = "Hello, " . $_SESSION['name'] . "! \r\n\r\n" .
                    "If this is you, then click the following link and log in: http://cdeluna.altervista.org/php/projects/project-5.php";
                  $headers = "From: project5user@itec4450.com" . "\r\n" .
                    "CC: project5usertwo@itec4450.com";

                  mail($to, $subject, $message, $headers);
                  
                  echo "<script>window.onload = alert('Sent to " . $_SESSION['email'] . "!');</script>";

                  echo "<div class='system-title-wrapper fade-first'>
                  			<h2 class='system-title'>Email Verification</h2>
                        </div>";

                  echo "<div class='form-wrapper'>
                          <div class='form-group-wrapper'>

                              <div class='form-info card fade-second'>
                                  <div class='card-header'></div>

                                  <div class='card-photo-wrapper'>
                                      <img class='card-photo' src='" . $_SESSION['picture'] . "'>
                                  </div>

                                  <div class='card-info-wrapper'>
                                      <h4 class='card-info-title'> " . $_SESSION['name'] . " </h4>
                                      <p class='text-muted'>Student</p>
                                  </div>

                                  <div class='card-button-wrapper'>
                                      <ul class='card-button-ul'>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=1'
                                                  <span class='glyphicon glyphicon-font'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=2'
                                                  <span class='glyphicon glyphicon-info-sign'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=3'
                                                  <span class='glyphicon glyphicon-envelope glyphicon-shake'></span>
                                               </a>
                                          </li>
                                          <li class='card-button-li'>
                                              <a href='http://cdeluna.altervista.org/php/projects/action-project-5-1.php?choice=4'
                                                  <span class='glyphicon glyphicon-log-out'></span>
                                               </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                          </div>
                        </div>";
                }
                
                // Choice 4
                if($_GET["choice"] == 4) {
                	session_unset();
                    session_destroy();
                    echo "<div class='form-wrapper'>";
                      echo "<div class='form-group-wrapper'>";
                        echo "<div class='error-wrapper'>";
                          echo "<div class='error card jump'>";
                            echo "<h3 class='error-info'>
                                      You have logged off.
                                      <a href='http://cdeluna.altervista.org/php/projects/project-5.php'>Sign in again.</a>
                                  </h3>";
                          echo "</div>";
                        echo "</div>";
                      echo "</div>";  
                    echo "</div>"; 
                }
            }
          ?>
          
        </div>
    </div>
    
  </body>
</html>
