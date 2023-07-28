 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PHP News</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                $sql = "SELECT * FROM `categories`";
                $all_categories =mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($all_categories) ):
                    $cat_id =$row['cat_id'];
                    $cat_title=$row['cat_title'];
                    ?>
                    <ul class="nav navbar-nav">
                    <li>

                        <a href="categories.php?cid=<?=$cat_id?>"><?=$cat_title?></a>

                    </li>
                    </ul>

                 <?php 
                endwhile;
                 ?>

                
                    
                    
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
