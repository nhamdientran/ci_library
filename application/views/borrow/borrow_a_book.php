<h2>Borrow</h2>
<?php $return_date = strtotime("21 day");?>
<form class="" action="<?php echo site_url('borrow/add_borrow'); ?>" method="post">
  <label for="">Book ID</label><br>
  <select class="" name="book_id">
    <?php
    foreach ($free_book_id_list as $row) {
      echo '<option value="'.$row['book_id'].'">'.$row['book_id'].'</option>';
    }
    ?>
  </select>
  <br>
  <label for="">Borrower ID</label><br>
  <select class="" name="borrower_id">
    <?php
    foreach ($borrower_id_list as $row) {
      echo '<option value="'.$row['borrower_id'].'">'.$row['borrower_id'].'</option>';
    }
    ?>
</select>
<br>
<label for="">Borrow date</label><br>
<input type="date" name="borrow_date" value="<?php echo date("Y-m-d"); ?>">
<br>
<label for="">Return date</label><br>
<input type="date" name="return_date" value="<?php echo date('Y-m-d', $return_date); ?>">
<br><br>
<input class="btn btn-primary" type="submit" name="" value="Borrow">
</form>
