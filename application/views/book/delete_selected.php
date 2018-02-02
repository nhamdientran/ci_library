<h2>Delete a book</h2>
<p>Do you want to delete this book:</p>
<table class="table table-bordered table-condensed">
  <tr><td width="200">Name</td><td width="200"> <?php echo $chosen_book[0]['book_name']; ?> </td></tr>
  <tr><td>Author</td><td> <?php echo $chosen_book[0]['author']; ?> </td></tr>
  <tr><td>ISBN</td><td> <?php echo $chosen_book[0]['isbn']; ?> </td></tr>
</table>
<a href="<?php echo site_url('book/delete_book/').$book_id; ?>"> <button class="btn btn-danger" >Delete</button></a>
<a href="<?php echo site_url('book/show_books'); ?>"> <button class="btn btn-primary">Cancel</button></a>
