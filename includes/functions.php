<!-- function to select books for bestsellers, latest books and popular books -->
<?php

function limit_query(){
    global $connection;
    $id = $_GET['id'];
    if(isset($_GET['id'])){
	    $id = $_GET['id'];
    }
    $totalq= "SELECT count(*) \"total\" FROM book, book_cat WHERE book_cat.book_id=book.book_id AND $id=book_cat.cat_id";
    $totalresult = mysqli_query($connection, $totalq);
    $totalrow = mysqli_fetch_assoc($totalresult);

    $results_per_page = 5;

    $page_total_rec=$totalrow['total'];

    $page_total_page=ceil($page_total_rec/$results_per_page);

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page=1;
    }

    $start_from = ($page-1)*$results_per_page;
    $query = "SELECT * FROM book, book_cat WHERE book_cat.book_id=book.book_id AND $id=book_cat.cat_id LIMIT $start_from, ".$results_per_page;
    $cat_select_query = mysqli_query($connection, $query);

}