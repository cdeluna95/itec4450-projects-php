<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Christan de Luna - Project 4</title>
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
        
        ul {
        	list-style-type: circle;
        }
        
        li {
        	margin: 5px 0 0 0;
        }
        
    	.project-4-wrapper {
        	text-align: center;
            display: block;
            margin: 0 auto;
        }
        
    	.field-title-wrapper {
            margin: 50px 0;
        }
        
        .field-title {
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
        .form-payment-title {
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
        .form-control:-ms-input-placeholder,
        .form-choice::-webkit-input-placeholder, 
        .form-choice::-moz-input-placeholder,
        .form-choice:-ms-input-placeholder {
        	color: rgba(0, 0, 0, 0.4);
        }
        
        .form-choice {
        	text-indent: 5px;
        	border: 0;
            border-bottom: 2px solid #ed7979;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
            padding: 2px;
        }
        
        textarea:focus,
        input[type="name"]:focus,
        input[type="number"]:focus,
        .uneditable-input:focus {
       		border: 0;
          	border-bottom: 2px solid #e0c528;
            border-radius: 0;
          	outline: 0;
            box-shadow: none;
            transition: all 300ms ease-in-out;
        }
        
        .sort-choice {
        	display: inline-block;
            text-align: left;
        }
        
        .results-wrapper {
        	max-width: 80%;
            height: auto;
            margin: 0 auto;
        }
        
        .results-caption {
        	color: #fff;
        	text-align: center;
            background: #b39d1e;
            padding: 5px;
            caption-side: bottom;
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
        
        .sm-padding {
        	margin: 40px 0;
        }
        
        .half-width {
        	width: 350px;
        }
        
        .btn {
        	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            border: 0;
            border-radius: 10px 5px 10px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 20px 0 0 0;
            padding: 5px 30px;
            transition: background 300ms ease-in-out;
        }
        
        .btn-primary {
        	background: #c9b124;
        }
        
        .btn-primary:hover {
        	background: #b8a11a;
        }
        
        .btn-display {
        	margin: 0;
        }
    </style>
  </head>
  
  <body>
  
  	<!-- Embedded functions -->
  	<?php
    	$name = $amount = $payment = $sort = "";
        $postName = $_POST["name"];
        $postAmount = $_POST["amount"];
        $postPayment = $_POST["payment"];
        $postSort = $_POST["sortType"];
        $submit = $_POST["submit"];
        $display = $_POST["display"];
        
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
        
        function My_Show_Table($result) {
          echo "<table class='results-table'>";
            echo "<tr class='results-row'>";
            while($fieldinfo = mysqli_fetch_field($result)) {
              echo "<td class='results-data'>";
                echo $fieldinfo -> name;
              echo "</td>";
            }
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
                foreach($row as $key => $val) {
                  echo "<td>";
                      echo $val;
                  echo "</td>";
                }
              echo "</tr>";
            }
            echo "<caption class='results-caption'>Total items: " . mysqli_num_rows($result) . "</caption>";
          echo "</table>";
        }
        
        function My_Show_Table_Direct($conn, $name) {
          $sql = "SELECT * from ". $name .";";
          $result = My_SQL_Query($conn, $sql);
          My_Show_Table($result);
        }
        
        function Run_SQL_Show_Table($conn, $sql, $name) {
          My_SQL_Query($conn, $sql);
          echo $sql;
          My_Show_Table_Direct($conn, $name);
        }
        
        function Run_Selection_Show_Table($conn, $sql) {
          echo "<div class='form-wrapper'>";
            echo "<div class='card sm-padding'>";
              $result = My_SQL_Query($conn, $sql);
              echo $sql;
            echo "</div>";
          echo "</div>";
          My_Show_Table($result);
        }
        
        if(isset($submit)) {
            $name = testInput($postName);
            $amount = testInput($postAmount);
            $payment = testInput($postPayment);
        }
        
        if(isset($display)) {
        	$sort = testInput($postSort);
            $sortName = testInput($postName);
            $sortPayment = testInput($postPayment);
        }
    ?>
  
  	<div id="project-4">
    	<div class="project-4-wrapper">
        	
            <!-- Title -->
        	<div class="field-title-wrapper">
            	<h1 class="field-title">Employee Payment System</h1>
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
                              <input class="form-control" type="name" name="name" value="<?php echo $name; ?>" placeholder="Employee name">
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Payment amount">
                          </div>
                          <div class="form-payment">
                          	<div class="form-payment-title">
                            	Payment type:
                            </div>
                              
                              <select name="payment">
                              	<option value="Salary" <?php if($payment == "Salary") echo "selected"; ?>>Salary</option>
                              	<option value="Bonus" <?php if($payment == "Bonus") echo "selected"; ?>>Bonus</option>
                                <option value="Other" <?php if($payment == "Other") echo "selected"; ?>>Other</option>
                              </select>
                          </div>
                          
                          <!-- Submission -->
                          <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                          </div>
                        </div>
                    
                    </form>

                    <hr class="form-line">
                        
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                        <!-- Input -->
                        <div class="form-info card">
                          <div class="form-info-title">
                          	Sort by:
                          </div>
                          
                          <div class="sort-choice">
                            <div class="radio">
                              <label>
                              	<input type="radio" value="A" 
                                	<?php if($sort == "A") echo "checked"; ?>
                                    name="sortType">Default
                                </label>
                            </div>
                            <div class="radio">
                              <label>
                              	<input type="radio" value="B" 
                                	<?php if($sort == "B") echo "checked"; ?>
                                    name="sortType">Name in ASC order
                                </label>
                            </div>
                            <div class="radio">
                              <label>
                              	<input type="radio" value="C" 
                                	<?php if($sort == "C") echo "checked"; ?>
                                    name="sortType">Total money in DESC order with name
                                </label>
                            </div>
                            <div class="radio">
                              <label>
                              	<input type="radio" value="D" 
                                	<?php if($sort == "D") echo "checked"; ?>
                                    name="sortType">Name with highest bonus
                                </label>
                            </div>
                            <div class="radio">
                              <label>
                              	<input type="radio" value="E" 
                                	<?php if($sort == "E") echo "checked"; ?>
                                    name="sortType">Name and their pay
                                    <ul>
                                    	<li>
                                        	<div class="form-group">
                                              <input class="form-choice" type="name" name="name" value="<?php echo $sortName; ?>" placeholder="Employee name">
                                          	</div>
                                        </li>
                                    </ul>
                                </label>
                            </div>
                            <div class="radio">
                              <label>
                              	<input type="radio" value="F" 
                                	<?php if($sort == "F") echo "checked"; ?>
                                    name="sortType">Payment type
                                    <ul>
                                    	<li>
                                        	<div class="form-payment">
                                              <select name="payment">
                                                <option value="Salary" <?php if($sortPayment == "Salary") echo "selected"; ?>>Salary</option>
                                                <option value="Bonus" <?php if($sortPayment == "Bonus") echo "selected"; ?>>Bonus</option>
                                                <option value="Other" <?php if($sortPayment == "Other") echo "selected"; ?>>Other</option>
                                              </select>
                                          	</div>
                                        </li>
                                    </ul>
                                </label>
                            </div>
                          </div>
                          
                          <!-- Display -->
                          <div class="form-group">
                            <input class="btn btn-primary btn-display" type="submit" name="display" value="Display">
                          </div>
                        </div>
                        
      				</form>
              	</div>
                
            </div>
                        
            <?php            
              // Connect to database
              $conn = My_Connect_DB();
              
              // Insert values
              if(isset($submit)) {
                $sql = "
                    INSERT INTO Employees (name, type, amount)
                    VALUES ('". $postName ."', '". $postPayment ."', '". $postAmount ."');
                ";
                My_SQL_Query($conn, $sql);
                $sql = "SELECT * from Employees;";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by default
              if($postSort == "A") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT * FROM Employees;";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by name in ascending order
              if($postSort == "B") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT * FROM Employees ORDER BY name ASC;";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by total money with name in descending order
              if($postSort == "C") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT name, SUM(amount) AS 'total' FROM Employees GROUP BY name ORDER BY total DESC;";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by name with highest bonus
              if($postSort == "D") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT name, MAX(amount) AS 'highest bonus' FROM Employees;";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by name and amount
              if($postSort == "E") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT * FROM Employees WHERE name='" . $postName . "';";
                Run_Selection_Show_Table($conn, $sql);
              }
              
              // Sort by payment type
              if($postSort == "F") {
              	echo "<hr class='form-line half-width'>";
                $sql = "SELECT * FROM Employees WHERE type='" . $postPayment . "';";
                Run_Selection_Show_Table($conn, $sql);
              }
            ?>
        
        </div>
    </div>
    
  </body>
</html>
