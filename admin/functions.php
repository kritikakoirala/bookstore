<?php

function confirm($result){
    global $connection;
    if(!$result){
        die("Error! " .mysqli_error($connection) );
      }
    return $result;
}

function deleteBookCategories(){
  global $connection;
  if(isset($_GET['delete'])){
    $the_book_id = $_GET['delete'];

    $query = "DELETE FROM book_cat WHERE book_id = {$the_book_id} ";
    $delete_query = mysqli_query($connection, $query);

    if(!$delete_query){
      die("QUERY FAILED! ". mysqli_error($connection));
    }
  }
}

function deleteCategories(){
  global $connection;
  if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];

    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
    $delete_query = mysqli_query($connection, $query);

    if(!$delete_query){
      die("QUERY FAILED! ". mysqli_error($connection));
    }
  }
}