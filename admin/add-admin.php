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


            // Get data from form
              $full_name = $_POST['full_name'];    /* by adding eho we can make clear thatdata is adding or not   */

              $username = $_POST['username'];

              echo $password = $_POST['password'];

        }

    ?>