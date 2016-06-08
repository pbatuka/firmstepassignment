<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View queue</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<h1> Current queue </h1>
	<?php
        session_start();
  
        $conn = new mysqli("mysql.mcscw3.le.ac.uk", "pjb58", "otympera", "pjb58");
        mysql_select_db("pjb58",$conn) or die ("Couldn't find database");
        
        $sql = "SELECT * FROM Firmstep";
		$mydata = mysql_query($sql,$conn);
        $result = $conn->query($sql);
		
		echo "<table-border=1>
				<tr>
				<th>#</th>
				<th>Type</th>
				<th>Name</th>
				<th>Service</th>
				</tr>";
		while($record = mysq1_fetch_array($mydata)){
			
			echo "<tr>";
			echo "<td>" .$record['id']. "</td>";
			echo "<td>" .$record['type']. "</td>";
			echo "<td>" .$record['title']." ".$record['firstname']." ".$record['lastname']."</td>";
			echo "<td>" .$record['service']."</td>";
			echo "</tr>";
		}
		echo "</table>";
				
        /*
        if ($result->num_rows > 0) {
            echo"<td>";
            while($row = $result->fetch_assoc()) {
                echo "<li><b>#:</b> ".$row["id"]."</li>\n<br />";
                echo "<li><b>type:</b> ".$row["type"]."</li>\n<br />";
                echo "<li><b>name:</b> ".$row["title"].' '.$row["firstname"].' '. $row["lastname"]."</li>\n<br />";
                echo "<li><b>service:</b> ".$row["service"]."</li>\n<br />";
                
            }
            echo "</ul>";
        } else {
            echo "Sorry No matches were found";
        }
        */
        $conn->close();
    ?> 
    <br />
    <br />
<a href="index.html"> <button type="button" class="btn btn-primary">Home</button></a>

</body>
</html>