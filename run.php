<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Run | PHP</title>
</head>

<body style="text-align: center;">

<?php

	$uploaddir = 'C:\xampp\htdocs\UpDownLoader\uploads\\';
	$uploadfile = $uploaddir . $_FILES['Filedata']['name'];


	print "<pre>";
	if (move_uploaded_file($_FILES['Filedata']['tmp_name'], $uploadfile)) {
	    echo "The file ". basename( $_FILES['Filedata']['name']). " has been uploaded";
	} else{
	    echo "There was an error uploading the file, please try again!";
	}

?> 
<a href="upload.php">Upload</a> <a href="./Uploads">View</a>
</body>
</html>
