<?php
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/navigation.php';

$selected = array();
if(isset($_GET['orderby'])){
    $orderby = $_GET['orderby'];
}

if(!$orderby){
    $orderby = '';
}

if($orderby == 'asc'){
    $orderby_query = "order by price asc";
}

else if($orderby == 'desc'){
    $orderby_query = "order by price DESC";
}

else if($orderby = 'date'){
    $orderby_query = "order by publication_year DESC";
}

else if($orderby = 'popularity'){
    $orderby_query = "WHERE book_rating>4.0";
}

else{
    unset($orderby);
}

// limit the query

$totalq= "SELECT count(*) \"total\" FROM book";
$totalresult = mysqli_query($connection, $totalq);
$totalrow = mysqli_fetch_assoc($totalresult);

$results_per_page = 10;

$page_total_rec=$totalrow['total'];

$page_total_page=ceil($page_total_rec/$results_per_page);

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;
}

$start_from = ($page-1)*$results_per_page;

$query = "Select * from book $orderby_query LIMIT $start_from, ".$results_per_page;
$sort_query = mysqli_query($connection, $query);?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="sort-products">			
                <!-- search box -->
                
                <form action="sort.php" method = "get" name = "orderby_form">
                    <label for="sort_dropdown">Sort By:</label>
                    <select name="orderby" onChange="orderby_form.submit();" id="sort_dropdown">
                    
                        <option value='asc'>Ascending</option>
                        <option value='desc'>Descending</option>
                        <option value='date'>Date</option>
                        <option value='popularity'>Popularity</option>
                        
                    </select>
                </form>
            </div>	<!--.form-search-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">

        <div class="col-lg-3 order-lg-1 col-md-3 order-md-1 col-sm-6 col-12
                        order-2 order-sm-2">
            <div class="category-list">
                <h4 class = "cat_header">All Categories</h4>
                <ul class="nav categories flex-column">

                <?php 
                
                    $query = "SELECT * FROM categories";
                    $cat_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($cat_query)){
                    ?>
                        <li class="nav-items">
                            <a href="categories.php?id='<?php echo $row['cat_id'];?>'" class="nav-link"><?php echo $row['cat_name']; ?></a>
                        </li><!--nav-items-->
                    <?php							
                }
                ?>
                </ul><!--nav-->
            </div>	<!--category_list-->				
            
        </div><!--col-->

        <div class="col-lg-9  order-lg-2 col-md-9 order-md-2 col-sm-12 
            col-12 order-1 order-sm-1">
            <div class="book-items">
                <div class="row items">
                    <?php
                        while($row = mysqli_fetch_assoc($sort_query)){?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="card">					
                                    <div class="card-img-top">
                                        <img src="<?php echo $row['image_url'];?>" class = "img-fluid" alt="Slider 1">
                                        <div class="hover-contents">
                                            <div class="hover-btns">
                                            <a href="single.php?id=<?php echo $row['book_id'];?>" class = "view-btn"><i class="fas fa-eye"></i></a><br>
                                                <a href="" class = "fav-btn"> + </a>
                                            </div>	<!--hover-btns-->
                                        </div><!--hover-contents-->
                                    </div><!--card-img-top-->	
                                    <div class="card-body book-info">
                                        <span class="card-title"><a href = "single.php?id=<?php echo $row['book_id'];?>"><?php echo $row['book_title'];?></a></span><!--.card-title-->
                                        <span class="card-text">by:<a href = "#"> <?php echo $row['book_authors']?></a></span>
                                        <span class="card-price"><?php echo $row['price'];?></span>
                                        
                                        <span class="card-date"><?php echo $row['publication_year'];?></span>

                                        
                                    </div><!--card-body-->	
                                </div><!--card-->
                            </div><!--col-->
    
                        <?php
                        }  
        
                    ?>
                </div><!--row items-->
            </div><!--book-items-->
        </div><!--col-->
    </div><!--row-->

    <ul class="pagination justify-content-center">

        <?php

        if($page>1)
        {	
            echo '<li class="page-item"><a class="page-link" href="sort.php?id='.$orderby.'&page='.($page-1).'">Previous</a></li>';
        }
        for($i=1;$i<=$page_total_page;$i++)
        {
            echo '<li class="page-item">';

            echo '<a class = "page-link" href="sort.php?id='.$orderby.'&page='.$i.'"';
            if($i==$page) echo 'class = "active"';
            echo '>'.$i.'</a></li>';
            
        }

        if($page_total_page>$page)
        {
            echo '<li class="page-item"><a class="page-link" href="sort.php?id='.$orderby.'&page='.($page+1).'">Next</a></li>';
        }

    ?>

</ul>
</div><!--container-fluid-->
<?php include 'includes/footer.php';?>