<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Project 1</title>
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
        
    	.project-1-wrapper {
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
    </style>
  </head>
  
  <body>
  
  	<div id="project-1">
    	<div class="project-1-wrapper">
        	
            <!-- Title -->
        	<div class="quiz-title-wrapper">
            	<h1 class="quiz-title">A Simple Web-Based Quiz in PHP</h1>
            </div>
            
            <!-- Form -->
            <div class="form-wrapper">
            	
                <!-- Action -->
            	<div class="form-group-wrapper">
                	<form action="action-project-1.php" method="post">
                    	
                        <!-- Input -->
                        <div class="form-info card">
                          <div class="form-info-title">
                          	Information:
                          </div>
                          
                          <div class="form-group">
                              <input class="form-control" type="name" name="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="email" name="email" placeholder="Email address">
                          </div>

                          <!-- Selection -->
                          <div class="form-major">
                              <div class="form-major-title">
                                  Area of study:
                              </div>

                              <select name="major">
                              	<option value="Enterprise Systems">Enterprise Systems</option>
                              	<option value="Software Development">Software Development</option>
                                <option value="Systems & Security">Systems & Security</option>
                                <option value="Digital Media">Digital Media</option>
                                <option value="Other">Other</option>
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
                                  <p>Which of the following is a framework?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" name="Q1">jQuery</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" name="Q1">Vue</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" name="Q1">React</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" name="Q1">Ember</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q2</h5>
                                </div>
                                <div class="question-info">
                                  <p>What do Sass, Less, and Stylus have in common?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" name="Q2">They're postprocessors</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" name="Q2">They're preprocessors</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" name="Q2">They're CSS frameworks</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" name="Q2">They're CSS libraries</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q3</h5>
                                </div>
                                <div class="question-info">
                                  <p>What was the original name of the HTML preprocessor, Pug?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" name="Q3">Haml</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" name="Q3">Jade</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" name="Q3">Slim</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" name="Q3">Markdown</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="question card">
                                <div class="question-number">
                                  <h5>Q4</h5>
                                </div>
                                <div class="question-info">
                                  <p>What is the most popular CSS framework today?</p>
                                  <div class="question-choice">
                                    <div class="radio">
                                      <label><input type="radio" value="A" name="Q4">Foundation</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="B" name="Q4">Pure</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="C" name="Q4">Bootstrap</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" value="D" name="Q4">Skeleton</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>

                        <hr class="form-line">

                        <!-- Submission -->
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                            <input class="btn btn-default" type="reset" value="Reset">
                        </div>
                      
      				</form>
              	</div>
        
        </div>
    </div>
    
  </body>
</html>
