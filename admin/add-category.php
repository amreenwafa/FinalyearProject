
<?php include('partials/menu.php')?>


<div class="main-content">
     
          <div class="wrapper">
            <h1>Add Category</h1>

            <br><br>
            <!-- Add category form start-->
                   <form action=""method="POST">

                         <table class="tbl-30">
                               <tr>
                                     <td>Title:</td>
                                      <td>
                                         <input type="text" name="title" placeholder="Category Title">
                                      </td>
                               </tr>

                               <tr>
                                      <td>Featured: </td>
                                        <td>
                                            <input type="radio" name="featured" value="Yes">Yes
                                            <input type="radio" name="featured" value="No">No
                                        </td>
                               </tr>

                               <tr>
                                       <td>Active</td>
                                       <td>
                                              <input type="radio" name="active" value="Yes">Yes
                                              <input type="radio" name="active" value="No">No
                                       </td>
                               </tr>  

                               <tr>
                                        <td colspan="2">
                                                <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                                        </td>
                                        
                               </tr>
                         </table>
                   </form>
            <!-- Add category form ends -->

            <?php
               //check wheather the submit button is clicked or not
               if(isset($_POST['submit']))
               {
                //echo"clicked";

                //1.Get Value from form
                   $title =$_POST['title'];

                //For radio input, we need to check wheather the button is selected or not
                if(isset($_POST['featured']))
                {
                    //Get the value from form
                    $featured = $_POST['featured'];
                }

                else
                {
                    //Set the default value 
                    $featured ="No";
                }

                 
               }
            ?>

          </div>
</div>

<?php include('partials/footer.php')?>