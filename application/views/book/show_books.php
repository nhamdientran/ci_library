<h2>Books</h2>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>id</th><th>Name</th><th>Author</th><th>isbn</th><th>Delete</th><th>Edit</th>
<?php
//print_r($books);
foreach ($books as $row) {
  echo '<tr>';
  echo '<td>'.$row['book_id'].'</td>';
  echo '<td>'.$row['book_name'].'</td>';
  echo '<td>'.$row['author'].'</td>';
  echo '<td>'.$row['isbn'].'</td>';
  echo '<td> <a href="'.site_url('book/delete_selected/')
  .$row['book_id'].'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
  echo '<td> <a href="'.site_url('book/edit_selected/')
  .$row['book_id'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></button></a></td>';
  echo '</tr>';
}
 ?>
</tr>
</table>
