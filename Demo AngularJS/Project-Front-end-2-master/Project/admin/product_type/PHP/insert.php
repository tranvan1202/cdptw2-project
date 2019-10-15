<?php  
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "tkw2");  
$data = json_decode(file_get_contents("php://input")); 
var_dump($data); 
if(count($data) > 0)  
{  
    $p_name = mysqli_real_escape_string($connect, $data->p_name);       
   
    $NameNut = $data->NameNut;  
    if($NameNut == "ADD")  
    {  
         $query = "INSERT INTO producttypes(name) VALUES ('$name')";  
         if(mysqli_query($connect, $query))  
         {  
              echo "Data Inserted...";  
         }  
         else  
         {  
              echo 'Error';  
         }  
    }  
    if($NameNut == 'Update')  
    {  
         $p_id = $data->p_id;  
         $query = "UPDATE producttypes SET name = '$name' WHERE id = '$id'";  
         if(mysqli_query($connect, $query))  
         {  
              echo 'Data Updated...';  
         }  
         else  
         {  
              echo 'Error';  
         }  
    }  
}  
?> 