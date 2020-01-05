<table class = "table table-bordered table-hover">
  <thead>
    <tr>
      <th>Book Id</th>
      <th>Book Title</th>
      <th>Book Author</th>
      <th>Book Price</th>
      <th>Book Image</th>
      <th>Book Description</th>
      <th>Book Pages</th>
      <th>Book Isbn</th>
      <th>Publication Year</th>
      <th>Book Rating</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
<tbody>
<?php

    $query = "SELECT * FROM book";
    $select_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_query)){
        $book_id = $row['book_id'];
        $book_title = $row['book_title'];
        $book_authors = $row['book_authors'];
        $book_price = $row['price'];
        $book_image = $row['image_url'];
        $book_desc = $row['book_desc'];
        $string = strip_tags($book_desc);
            if (strlen($string) > 100) {

                // truncate string
                $stringCut = substr($string, 0, 100);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                $string .= '...';
            }
            
        $book_pages = $row['book_pages'];
        $book_isbn = $row['book_isbn'];
        $book_year = $row['publication_year'];
        $book_rating = $row['book_rating'];
        
        echo "<tr>";
        echo "<td>$book_id</td>";
        echo "<td>$book_title</td>";
        echo "<td> $book_authors</td>";
        echo "<td>$book_price</td>";
        echo "<td><img width = '50px' src = '$book_image' alt = 'book thumbnail'></td>";
        echo "<td>$string</td>";
        echo "<td>$book_pages</td>";
        echo "<td>$book_isbn</td>";
        echo "<td>$book_year</td>";
        echo "<td>$book_rating</td>";
        echo "<td><a href = 'books.php?source=edit_book&b_id=$book_id'>Edit</a></td>";
        echo "<td><a href = 'delete_book.php?delete=$book_id'>Delete</a></td>";
        echo "</tr>";
    }

?>

</tbody>
</table>