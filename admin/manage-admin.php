
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

                   if(isset($_SESSION['delete']))
                   {
                       echo $_SESSION['delete'];     //Displaying Deletion Message
                       unset($_SESSION['delete']);  
                   }

                   if(isset($_SESSION['update']))
                   {
                       echo $_SESSION['update'];     //Displaying Update Message
                       unset($_SESSION['update']);  
                   }

                   if(isset($_SESSION['user-not-found']))
                   {
                       echo $_SESSION['user-not-found'];     //Displaying user-not-found Message
                       unset($_SESSION['user-not-found']);  
                   }


                   if(isset($_SESSION['pwd-not-match']))
                   {
                       echo $_SESSION['pwd-not-match'];     //Displaying user-not-found Message
                       unset($_SESSION['pwd-not-match']);  
                   }

                  
                   if(isset($_SESSION['change-pwd']))
                   {
                       echo $_SESSION['change-pwd'];     //Displaying Changed password or not message
                       unset($_SESSION['change-pwd']);  
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
                                            <a class="btns" href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>">Change  Password</a>
                                            <a class="btn-primary" href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>">Update Admin</a>
                                            <a class="btn-secondary" href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>">Delete Admin</a>
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





 