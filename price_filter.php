<?php
if(isset($_POST['submit_range'])){
$amount1 = 1;
$amount2 = 30;
if(!empty($_POST['min'])){
$amount1 = $_POST['min'];
}
if(!empty($_POST['max'])){
$amount2 = $_POST['max'];
}


$query = "SELECT * FROM book WHERE price BETWEEN '$amount1' AND '$amount2' LIMIT $start_from, ".$results_per_page;
$price_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($price_query)){?>



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
            
        </div><!--card-body-->	
    </div><!--card-->
</div><!--col-->

<?php
}
}

?>