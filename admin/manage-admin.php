
   <!-- using php repeating part // dry pattern // not repeating  same code-->
     <?php include('partials/menu.php')?>

   
    <!-- main content starts -->

    <div class="main">
        <div class="wrapper">
           <h1>Manage Admin</h1>
           

           <!-- when succesfully add admin this will work -->
           <?php
                if(isset($_SESSION['add']))
                   {
                    echo $_SESSION['add'];  //Displaying Session Message
                    unset($_SESSION['add']);  //Removing session Message
                   }
           ?>
            <br>
            <br>
            
           <!-- Button to Add Admin -->
           <a href="add-admin.php" class="btn-primary">Add Admin</a>

           <br> 
           <br>
           <table class="tbl-full">
                 <tr>
                    
                         <th>S.N</th>
                         <th>Full Name</th>
                         <th>Username</th>
                         <th>Action</th>
                </tr>
                  
                   <?php
                     //Query to get all admin
                       $sql = "SELECT * FROM tbl_admin";

                      //  Execute the query
                      $res = mysqli_query($conn, $sql);

                      // check weather the query is Exected or not
                      if($res==TRUE)
                      {

                        // count row to check weather the data is in database or not
                        $count = mysqli_num_rows($res);   //function to get all the row in database

                        $sn=1; //create a variable and Assign the value

                        // check the number of rows
                        if($count>0)
                        {
                          // we have data in database
                          while($rows=mysqli_fetch_assoc($res))
                          {
                                  // using while loop to get data from database
                                  // and while loop will run as we have data in database

                                  // Get individual data
                                  $id =$rows['id'];
                                  $full_name =$rows['full_name'];
                                  $username =$rows['username'];

                                  // display the value in table
                                  ?>
                                  
                                                         
                                  <tr>
                                      
                                            <td><?php echo $sn++; ?></td>
                                            <td><?php echo $full_name ?></td>
                                            <td><?php echo $username ?></td>
                                            <td>
                                            <a href="#" class ="btn-secondary">Update Admin</a>
                                            <a href="#" class ="btn-danger">Delete Admin</a>
                                            </td>
                                  </tr>    

                                 <?php 

                          }
                        }
                        else
                        {
                          // dont have data in database
                        }

                      }
                   ?>

           </table>
           
        </div>
    </div>
    <!-- main content ends-->



    <!-- using php repeating part // dry pattern // not repeating  same code-->
    <?php include('partials/footer.php');?>





 