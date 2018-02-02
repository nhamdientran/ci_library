<h2>Edit a book</h2>
<form class="" action="<?php echo site_url('book/save_edited'); ?>" method="post">
  <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
  <label for="">Name</label><br>
  <input type="text" name="book_name" value="<?php echo $chosen_book[0]['book_name'];?>"><br>

  <label for="">Author</label><br>
  <input type="text" name="author" value="<?php echo $chosen_book[0]['author'];?>"><br>

  <label for="">ISBN</label><br>
  <input type="text" name="isbn" value="<?php echo $chosen_book[0]['isbn'];?>"><br>
  <input class="btn btn-primary" type="submit" name="" value="Save">
</form>
  <a href="#"><button class="btn btn-primary">Cancel</button></a>
