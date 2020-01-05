<table class = "table table-bordered table-hover">
  <thead>
    <tr>
      <th>Book Id</th>
      <th>Category Id</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
<tbody>
<?php

    $query = "SELECT * FROM book_cat";
    $select_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_query)){
        $book_id = $row['book_id'];
        $cat_id = $row['cat_id'];
        
        echo "<tr>";
        echo "<td> $book_id</td>";
        echo "<td> $cat_id</td>";
        echo "<td><a href = 'book_cat.php?source=edit_book_cat&bc_id=$book_id'>Edit</a></td>";
        echo "<td><a href = 'book_cat.php?delete=$book_id'>Delete</a></td>";
        echo "</tr>";
    }

?>

</tbody>
</table>