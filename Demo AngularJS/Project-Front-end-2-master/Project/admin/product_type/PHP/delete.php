 <?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "tkw2");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $p_id = $data->p_id;  
      $query = "DELETE FROM producttypes WHERE id='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'Data Deleted';  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?> 