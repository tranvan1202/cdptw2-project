<?php

//logout.php

session_start();

session_destroy();

header("location: http://localhost:8080/project/login/index.php");


?>