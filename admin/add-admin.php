   <!-- using php repeating part // dry pattern // not repeating  same code-->
   <?php include('partials/menu.php')?>

   <div class="main-content">
        <div class="wrapper">
              <h1>Add Admin</h1>
               <br>


               <!-- when we fail to add admin this will work -->
               <?php
                if(isset($_SESSION['add'])) //checking weather the session is set or not
                   {
                    echo $_SESSION['add'];  //Displaying Session Message
                    unset($_SESSION['add']);  //Removing session Message
                   }
                 ?>       
                 
                 

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

      //  3. Execute Query and save data in database this part is written on constant file


      // executing query and saving data into database
      $res = mysqli_query($conn, $sql) or die(mysqli_error());   //mysqli is improved version of my sql  //if $res means reserved it is used to hold true or false value if the query is executed successfully then the value will be true and if it is false it is failed to execute
      
      // 4. check weather the (query is executed) data is inserted or not and display appropriate message
      if($res==TRUE)
        {
            // data inserted
            // echo"Data Inserted";

            // create a session to insert data
            $_SESSION['add']= "Admin Added successfully";

            //Redirect page to manage-admin    //to concatinate in php we use . and location is our string value we are concatenating our constant SITEURL and SITEURL gives the value of home url(http://localhost/MyRestraun/) but we want to redirect trhis page to our manage-admin .php
            header("location:".SITEURL.'admin/manage-admin.php');
        }
      else{
              
            // failed to insert data
            // echo"Failed to Insert Data";

                        // create a session to insert data
                        $_SESSION['add']= "Failed To Add Admin";

                        header("location:".SITEURL.'admin/add-admin.php');
          }



      }

    ?>