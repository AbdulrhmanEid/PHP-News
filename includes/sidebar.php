<div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <form action="search.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="txtName">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                </form>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-12">
                    <?php
                $sql = "SELECT * FROM `categories` Limit 4";
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
                    <!-- /.col-lg-6 -->
                    <
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>
