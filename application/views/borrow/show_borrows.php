<h2>Borrows</h2>
<table class="table table-bordered table-hover">
  <tr class="info">
    <th>Borrower</th><th>Book</th><th>Return date</th>
  </tr>
  <?php
  foreach ($borrows as $row) {
    echo '<tr>';
    echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
    echo '<td>'.$row['book_name'].'</td>';
    echo '<td>'.$row['return_date'].'</td>';
    echo '</tr>';
  }
   ?>
</table>
