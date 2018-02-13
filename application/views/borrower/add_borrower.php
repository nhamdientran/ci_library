<h2>Add a new borrower</h2>
<form class="" action="<?php echo site_url('borrower/save_borrower'); ?>" method="post">
<input type="number" name="borrower_id" placeholder="borrower_id"><br>
<input type="text" name="firstname" placeholder="firstname"><br>
<input type="text" name="lastname" placeholder="lastname"><br>
<input type="text" name="phone" placeholder="phone"><br>
<input type="text" name="streetAddress" placeholder="streetAddress"><br>
<input type="text" name="postalCode" placeholder="postalCode"><br>
<input type="text" name="user" placeholder="username"><br>
<input type="password" name="password" placeholder="password"><br>
<br>
<input type="submit" name="" value="Save">
<a href="<?php echo site_url('borrower/show_borrowers'); ?>"> Cancel </a>
</form>
