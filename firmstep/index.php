
	<?php
    
        session_start();
        $conn = new mysqli("mysql.mcscw3.le.ac.uk", "pjb58", "otympera", "pjb58") or die("Couldn't connect to the server");
        
        mysql_select_db("pjb58",$conn) or die ("Couldn't find database");
		
		$table = "Firmstep";
		$query = "SELECT id FROM " .$table;
		$result = mysql_query($query, $conn);
		
		if(empty($result)) {
			$sql = "CREATE TABLE Firmstep (
					id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					service VARCHAR(30) NOT NULL,
					type VARCHAR (30) NOT NULL,
					title VARCHAR (30) NOT NULL,
					firstname VARCHAR(30) NOT NULL,
					lastname VARCHAR(30) NOT NULL,
					time TIMESTAMP
					)";
					
			mysql_query($sql,$conn);
		}
		
		if(isset($_POST['submit'])){
			header("location:add.php");
		}
		
		if(isset($_POST['view'])){
			header("location:view.php");
		}
		
		$conn->close();
    ?>
