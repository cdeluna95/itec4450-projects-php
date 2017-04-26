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
    <title>Christan de Luna - Project 5</title>
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
        
        .form-line {
        	border: 2px solid #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        
        .form-info-title {
        	margin: 5px 0;
        }
        
        .form-control {
        	border: 0;
            border-bottom: 2px solid #ed7979;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
        }
        
        textarea:focus,
        input[type="name"]:focus,
        input[type="password"]:focus,
        .uneditable-input:focus {
       		border: 0;
          	border-bottom: 2px solid #e0c528;
            border-radius: 0;
          	outline: 0;
            box-shadow: none;
            transition: all 300ms ease-in-out;
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
        	color: #fff;
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            border: 0;
            border-radius: 10px 5px 10px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            width: 100px;
            margin: 15px 2.5px 0;
            padding: 5px 0;
            transition: background 300ms ease-in-out;
        }
        
        .btn-primary {
        	background: #c9b124;
        }
        
        .btn-primary:hover {
        	background: #b8a11a;
        }
        
        .btn-secondary {
        	background: #ed4545;
        }
        
        .btn-secondary:hover {
       		color: #fff;
        	background: #db3737;
        }
    </style>
  </head>
  
  <body>
  
  	<!-- Embedded functions -->
  	<?php
    	$username = $password = "";
        $postUsername = $_POST["username"];
        $submit = $_POST["submit"];
        
        function testInput($input) {
          $input = trim($input);
          $input = htmlspecialchars($input);
          return $input;
    	}
        
        if(isset($submit)) {
            $username = testInput($postUsername);
        }
    ?>
  
  	<div id="project-5">
    	<div class="project-5-wrapper">
        	
            <!-- Title -->
        	<div class="system-title-wrapper">
            	<h1 class="system-title">ITEC 4450 Grade Search System</h1>
            </div>
            
            <!-- Form -->
            <div class="form-wrapper">
            	
                <!-- Action -->
            	<div class="form-group-wrapper">
                	<form action="action-project-5-1.php" method="post">
                    	
                        <!-- Input -->
                        <div class="form-info card">
                          <div class="form-info-title">
                          	Information:
                          </div>
                          
                          <div class="form-group">
                              <input class="form-control" type="name" name="username" value="<?php echo $username; ?>" placeholder="Username">
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="password" name="password" placeholder="Password">
                          </div>
                          
                          <!-- Submission -->
                          <div class="form-group btn-container">
                              <input class="btn btn-primary" type="submit" name="submit" value="Log In">
                              <a class="btn btn-secondary" href="project-5-signup.php">Sign Up</a>
                          </div>
                        </div>
                    
                    </form>
              	</div>
                
            </div>
        
        </div>
    </div>
    
  </body>
</html>
