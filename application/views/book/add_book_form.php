<h2>Add a book</h2>
<form class="" action="<?php echo site_url('book/add_book_to_db'); ?>" method="post">
  <label for="">Book_id</label> <br>
  <input type="number" name="book_id" value=""> <br>
  <label for="">Book name</label><br>
  <input type="text" name="book_name" value=""><br>
  <label for="">Author</label><br>
  <input type="text" name="author" value=""><br>
  <label for="">ISBN</label><br>
  <input type="text" name="isbn" value=""><br>
  <input type="submit" name="" value="Add">
</form>
