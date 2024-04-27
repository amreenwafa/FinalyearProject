   <!-- using php repeating part // dry pattern // not repeating  same code-->
   <?php include('partials/menu.php');?>

   <div class="main-content">
        <div class="wrapper">
              <h1>Add Admin</h1>
               <br>
               
                      <!-- we use POST METHOD to submit our value through FORM and the value of POST is passed hidden without displaying in browser-->
                      <form action="" method="POST">
        
                                   <table class="tbl-30">
                                         <tr>
                                                <td>Full Name</td>
                                                <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                                         </tr>


                                         <tr>
                                                 <td>Username</td>
                                                 <td><input type="text" name="username" placeholder="Your username"></td>
                                         </tr>


                                         <tr>
                                                 <td>Password</td>
                                                 <td><input type="password" name="password" placeholder="Your password"></td>
                                         </tr>


                                         <tr>
                                                  <td colspan="2">
                                                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                                                  </td>
                                         </tr>
     
                                                                              
                                   
                                   </table>
                      </form>
        </div>

   </div>



   <!-- using php repeating part // dry pattern // not repeating  same code-->
   <?php include('partials/footer.php');?>



   <?php
      //  process the value from form and save it to database

     //check wheather thesubmit button is cleacked or not   
     
     if(isset($_POST['submit']))   /* isset function is use to check certain property is set or not   .... in this condition we are checking weather the value from submit is passed through POST method or not*/
        {
            //    Button clicked 
            // echo"Button Clicked";


            // 1. Get data from form
              $full_name = $_POST['full_name'];    /* by adding eho we can make clear thatdata is adding or not   */

              $username = $_POST['username'];

             $password = md5($_POST['password']);     // mdn is the encryption function it is one way encryption that is dicript the encrypted password


            //  2. Sql query to save the data into database
            $sql = "INSERT INTO tbl_admin SET
                  full_name='$full_name',
                  username='$username',
                  password='$password'             /* we dont need to add coma on the last*/     
            ";

           // echo $sql;    /* to see sql query*/

      // //  3. Execute Query and save data in database
      // //  mysqli_connect try to connect our credential localhost is our host root is our bydefault user name and password is blank
      //  $conn= mysqli_connect('localhost', 'root', '') or die(mysqli_error());

      // //  $db_select = mysqli_select_db($conn,'DBNAME') or die(mysqli_error());  //selecting database
      //  $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());

      //  $res = mysqli_query($con and $sql) or die(mysqli_error());   //mysqli is improved version of my sql                                        //if $res means reserved it is used to hold true or false value if the query is executed successfully then the value will be true and if it is false it is failed to execute
      


        }

    ?>