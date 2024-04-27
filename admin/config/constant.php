<?php

        //   create constant to store non repeating values   // constant are written in capital letter and variables are written on small letter
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'food-order');



      //  3. Execute Query and save data in database
      //  mysqli_connect try to connect our credential localhost is our host root is our bydefault user name and password is blank
      $conn= mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

        $db_select = mysqli_select_db($conn,'DBNAME') or die(mysqli_error());  //selecting database
    //    $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());

?>