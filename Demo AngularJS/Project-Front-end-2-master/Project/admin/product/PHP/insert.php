<?php  
$connect = mysqli_connect("localhost", "root", "", "tkw2");  
// $data = json_decode(file_get_contents("php://input")); 

$name = $_POST['name']; 
$manufactures = $_POST['manufactures'];
$type = $_POST['type'];
$description = $_POST['description'];
$feature = $_POST['feature'];
$installment = $_POST['installment'];
$donate = $_POST['donate'];
if(!empty($_FILES))  
{  
  $path = '../Image/' . $_FILES['file']['name'];  
  if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
  {  
    $insertQuery = "INSERT INTO products (name, manufactures, type, price, image, description, feature, installment, donate) 
    VALUES ('".$name."','".$manufactures."','".$type."','".$price."','".$_FILES["file"]["name"]."','".$description."','".$feature."','".$installment."','".$donate."',)";
    if(mysqli_query($connect, $insertQuery))  
    {  
      echo 'File Uploaded';  
    }  
    else  
    {  
      echo 'File Uploaded But not Saved';  
    }  
  } 
}  
else  
{  
  echo 'Some Error';  
}  
?>