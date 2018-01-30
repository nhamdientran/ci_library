<h2>Books</h2>
<table border="1">
  <tr>
    <th>id</th><th>Name</th><th>Author</th><th>isbn</th>
<?php
//print_r($books);
foreach ($books as $row) {
  echo '<tr>';
  echo '<td>'.$row['book_id'].'</td>';
  echo '<td>'.$row['book_name'].'</td>';
  echo '<td>'.$row['author'].'</td>';
  echo '<td>'.$row['isbn'].'</td>';
  echo '</tr>';
}
 ?>
</tr>
</table>
