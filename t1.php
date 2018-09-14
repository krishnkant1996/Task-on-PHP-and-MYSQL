<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
      
	   require_once('connection.php');
	   if($_POST) {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $url=$_FILES["url"]['name'];
        $query="Insert into t1 values('$name','$email','$gender','$url');";
        
        if(mysqli_query($conn, $query)){  
            
            echo "<script>alert('successfully ');</script>";  
        }
  		 else{  
            
            echo "<script>alert('not entered');</script>". mysqli_error($conn);  
        } 
		
		}
		if (move_uploaded_file($_FILES['url']['tmp_name'], __DIR__.'/uploads/'. $_FILES["url"]['name'])) {
  		  echo "Uploaded";
		} else {
 		  echo "File was not uploaded";
		}

            require 'home.php';
 

      ?>

</body>
</html>
