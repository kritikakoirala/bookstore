<table class = "table table-bordered table-hover">
  <thead>
    <tr>
      <th>Category Id</th>
      <th>Category Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
<tbody>
<?php

    $query = "SELECT * FROM categories";
    $select_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_query)){
        $cat_id = $row['cat_id'];
        $cat_name = $row['cat_name'];
        
        echo "<tr>";
        echo "<td> $cat_id</td>";
        echo "<td>$cat_name</td>";
        echo "<td><a href = 'category.php?source=edit_categories&c_id=$cat_id'>Edit</a></td>";
        echo "<td><a href = 'category.php?delete=$cat_id'>Delete</a></td>";
        echo "</tr>";
    }

?>

</tbody>
</table>