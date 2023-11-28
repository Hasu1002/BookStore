<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','comic');

// get the post records
$filename = uniqid() . '_' . basename($_FILES['image']['name']);
$uploadPath = 'aphotos/' . $filename;

// Move the uploaded file to the specified path
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
  // File uploaded successfully
  echo 'File uploaded.';
} else {
  // Error occurred during file upload
  echo 'Error uploading file.';
  return;
}

$Aname = $_POST['Aname'];
$DOB = $_POST['DOB'];
$Age = $_POST['Age'];
$Gender = $_POST['gender'];
$Spec = $_POST['Spec'];
$Post = $_POST['Post'];
$Contact = $_POST['Contact'];
$City = $_POST['City'];



// database insert SQL code
$sql = "INSERT INTO author (AuthorName, DOB, Age, Gender, Specialized, Post, ContactNumber, City, ImagePath) VALUES ('$Aname','$DOB','$Age','$Gender','$Spec','$Post','$Contact','$City', '$uploadPath') ";

// insert in database 
if($rs = mysqli_query($con, $sql)) {
	echo "Contact Records Inserted";
} else {
	echo mysqli_error($con);
}
?>