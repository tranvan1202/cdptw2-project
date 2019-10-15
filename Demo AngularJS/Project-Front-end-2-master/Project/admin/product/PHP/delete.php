 <?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "tkw2");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $id = $data->id;  
      $query = "DELETE FROM products WHERE id ='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo $query;  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?> 