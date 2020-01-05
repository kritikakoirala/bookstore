<?php
include '../includes/db.php';
if(isset($_GET['delete'])){
    $the_book_id = $_GET['delete'];

    $query = "DELETE FROM book  WHERE book_id = {$the_book_id} ";
    $delete_query = mysqli_query($connection, $query);

    if(!$delete_query){
      die("QUERY FAILED! ". mysqli_error($connection));
    }
    else{
        echo "Book succesfully deleted";
    }

    header('Location: books.php');
  }