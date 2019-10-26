<?php  
$connect = mysqli_connect("localhost", "root", "", "tkw2");  
$name = $_POST['name']; 
if(!empty($_FILES))  
{  
  $path = '../Image/' . $_FILES['file']['name'];  
  if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
  {  
    $insertQuery = "INSERT INTO manufactures (name,image) VALUES ('".$name."','".$_FILES["file"]["name"]."')";
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