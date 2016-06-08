<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add person to queue</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<h1>Add new customer to queue</h1>
<h4> Fill in form to add customer to queue</h4>
	<form action="" method="POST">
    	<input type="radio" name="service" value="Housing" checked> Housing<br>
  		<input type="radio" name="service" value="Benefits"> Benefits<br>
  		<input type="radio" name="service" value="Council Tax">Council Tax<br />
        <input type="radio" name="service" value="Fly-Tipping"> Fly-Tipping<br>
        <input type="radio" name="service" value="Missed Bin"> Missed Bin<br>
        <br />
        <br/>
        <select name="type">
  			<option value="Citizen">Citizen</option>
  			<option value="Organisation">Organisation</option>
  			<option value="Anonymous">Anonymous</option>
		</select>
        <br />
        <br />
        Title
        <select name="title">
  			<option value=" "></option>
  			<option value="Mr.">Mr.</option>
  			<option value="Mrs.">Mrs.</option>
		</select>
        <br />
        <br />
        First name:<br>
  		<input type="text" name="firstname"><br>
  		Last name:<br>
  		<input type="text" name="lastname">
        
        <input type="submit" value="Submit" name="submit" />
    </form>
    
    <?php

		session_start();
		
		$conn = new mysqli("mysql.mcscw3.le.ac.uk", "pjb58", "otympera", "pjb58");
		
		if(isset($_POST['submit'])){
			
		$sql = "INSERT INTO Firmstep(service,type,title,firstname,lastname) VALUES('$_POST[service]','$_POST[type]','$_POST[title]','$_POST[firstname]','$_POST[lastname]')";
		mysql_query($sql,$conn);			
		
		$conn->close();
		}
	?>
    <br />
   <a href="index.html"> <button type="button" class="btn btn-primary">Home</button></a>
</body>
</html>
