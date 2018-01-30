<h2>Borrowers</h2>
<table class="table table-hover table-bordered">
  <tr class="table-info">
    <th>ID</th><th>Firstname</th><th>Lastname</th><th>Phone</th>
    <th>Streetaddress</th><th>PostalCode</th>
  </tr>

<?php
foreach ($borrowers as $row) {
  echo '<tr>';
  echo '<td>'.$row['borrower_id'].'</td>';
  echo '<td>'.$row['firstname'].'</td>';
  echo '<td>'.$row['lastname'].'</td>';
  echo '<td>'.$row['phone'].'</td>';
  echo '<td>'.$row['streetAddress'].'</td>';
  echo '<td>'.$row['postalCode'].'</td>';
  echo '</tr>';
}

 ?>
</table>
