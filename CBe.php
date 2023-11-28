<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','comic');

// get the post records
$filename = uniqid() . '_' . basename($_FILES['image']['name']);
$uploadPath = 'cphotos/' . $filename;

// Move the uploaded file to the specified path
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
  // File uploaded successfully
  echo 'File uploaded.';
} else {
  // Error occurred during file upload
  echo 'Error uploading file.';
  return;
}

$Cname = $_POST['Cname'];
$Aname = $_POST['Aname'];
$Ctype = $_POST['CType'];
$Pdate = $_POST['Pdate'];
$Price = $_POST['Price'];

$sql = "INSERT INTO comics (Comic_Name, Author_ID, Comic_Type, Published_Date, Price, Cover) VALUES ('$Cname','$Aname','$Ctype','$Pdate','$Price', '$uploadPath') ";

if($rs = mysqli_query($con, $sql)) {
	echo "Contact Records Inserted";
} else {
	echo mysqli_error($con);
}

?>