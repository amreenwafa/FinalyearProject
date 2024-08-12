<?php include('partials-front/menu.php') ?>


        <!-- Food Search Section Starts Here -->
    <section class="food-search">
      <div class="container">
        <div class="search text-allign-center">
          <form action="food-search.html" method="post">
            <input
              class="search-box"
              type="search"
              name="search"
              placeholder="Search food item..."
            />
            <input
              class="btn btn-primary"
              type="submit"
              name="submit"
              value="search"
            />
          </form>
        </div>
      </div>
    </section>
    <!-- Food Search Section Ends Here -->


    <!-- Categories Section Starts Here -->
    <section class="Categories ">
        <div class="container overflow">
            <h2 class="text-allign-center">Categories</h2> 

            <a href="">
            <!-- Float container and float text classes are taken to allign text relatively in middle acc. to img -->
            <div class="box-3 float-container ">
                <!-- 'img-responsive' class is used for image taking width 100%, and 'image curve' for curving the image -->
                <!-- image class is used for hovering effect on image while hover -->
                <img class="img-responsive img-curve image" src="./image/pizza 2.jpg" alt="Pizza">
                <h3 class="text-allign-center float-text text-white " >Pizza</h3>
                <!-- middle class is for keeping text in middle while hovering -->
                <div class="text middle">Pizza</div>
            </div>
            </a>

            <a href="">
            <div class="box-3 float-container ">
                <!-- 'img-responsive' class is used for image taking width 100%, and 'image curve' for curving the image -->
                <!-- image class is used for hovering effect on image while hover -->
                <img class="img-responsive img-curve image" src="./image/burger2.jpg" alt="Burger">
                <h3 class="text-allign-center float-text text-white " >Burger</h3>
                <!-- middle class is for keeping text in middle while hovering -->
                <div class="text middle">Burger</div>
            </div>
            </a>

            <a href="">
            <div class="box-3 float-container ">
                <!-- 'img-responsive' class is used for image taking width 100%, and 'image curve' for curving the image -->
                <!-- image class is used for hovering effect on image while hover -->
                <img class="img-responsive img-curve image momos" src="./image/menu-momo.jpg" alt="Momo">
                <h3 class="text-allign-center float-text text-white " >Momo</h3>
                <!-- middle class is for keeping text in middle while hovering -->
                <div class="text middle">Momo</div>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
     </section class="Categories">
    <!-- Categories Section Ends Here -->



    <!-- Food Menu Section Starts Here -->
    <section class="food-menu">
        <div class="container overflow">

            <h2 style="color: yellow;" class="text-allign-center" >Explore Food</h2>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-pizza.jpg" alt="Veg Pizza">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>Italian Pizza</h4>
                    <p class="food-price">Rs250</p>
                    <p class="food-details">Italian Pizza made with italian sauce</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-burger.jpg" alt="Veg Burger">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>Indian Burger</h4>
                    <p class="food-price">Rs120</p>
                    <p class="food-details">Indian Burger made with special Indian Spices</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-burger.jpg" alt="South Indian Burger">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>South Indian Burger</h4>
                    <p class="food-price">Rs150</p>
                    <p class="food-details">South Indian Burger made with south indian spices</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-momo.jpg" alt="Momo">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>Momo</h4>
                    <p class="food-price">Rs150</p>
                    <p class="food-details">Momo made with napali's special techniques</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-momo.jpg" alt="Momo">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>Indian Momo</h4>
                    <p class="food-price">Rs180</p>
                    <p class="food-details">Chef's Special Momo</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            <!-- Food menu box html starts and overflow class included to control the overflow of div -->
            <div class="food-menu-box overflow">

                <!-- Adding image in food menu and including img-responsive class -->
                <div class="food-menu-img">
                    <img class="img-responsive img-curve" src="./image/menu-pizza.jpg" alt="Veg Pizza">
                </div>

                <!-- Adding food menu description including title, price, and small desc -->
               <div class="food-menu-desc">
                    <h4>Indian Pizza</h4>
                    <p class="food-price">Rs300</p>
                    <p class="food-details">Pizza made with special indian spices and with extra cheese</p>
                    <br>

                    <!-- Adding a button for buy now -->
                    <a class="btn btn-primary" href="order.html">Buy Now</a>
               </div>                          

            </div>

            

         
            
        </div>
    </section>
    <!-- Food Menu Section Ends Here -->

    <?php include('partials-front/footer.php') ?>