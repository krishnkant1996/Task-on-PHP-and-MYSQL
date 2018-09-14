<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
	</head>
	<style>

	#left{
	float:left;
	}
	#right{
	float:right;
	}
	</style>
<body style="background-color:#99CC66">
	<div id="container">
		<div id="right"><br/><br/>
		<form method="post" action="form.html">
		
		<input type="submit" value="Register" style="background-color:#999900; font:'Times New Roman', Times, serif; font-size:36px"; />
		</form>
		</div>
			<div id="left">
				<?php
				
				   require_once('connection.php');        
					$query="select name,email,gender, url from t1;";
					$resultSet=mysqli_query($conn, $query);
					if(mysqli_num_rows($resultSet)>0){  
						while($row = mysqli_fetch_assoc($resultSet)){
							echo'<font size="+3" color="#000000">';
							echo " <br><br> Name : ".$row["name"]."<br> Email : ".$row["email"]."<br> Gender : ".$row["gender"]."<br><img src=".'"'."uploads"."/".$row["url"].'"'.">";           }
							echo"</font>";
						
						
					}
					else{  
						echo'<font size="+1" color="#000000" >';
						echo "<br/><center>Empty</center>";
						echo"</font>";
			
					}
					echo"<br/><br/>";
				
					
				
					?>
			</div>
		</div>
	</body>
</html>
