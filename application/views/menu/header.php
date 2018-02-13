<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The library example</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/mystyle.css');?>">
  </head>
  <body>
    <div class="menu">
    <?php
    if(isset($_SESSION['logged_in']))
    {
      echo 'Welcome '.$_SESSION['user'];
    }
    else {
      echo 'Welcome Visitor';
    }
     ?>
    <ul>
      <li> <a href="<?php echo site_url('book/index'); ?>">Main page</a> </li>
      <li> <a href="<?php echo site_url('book/show_books'); ?>">Books</a> </li>
      <li> <a href="<?php echo site_url('book/add_book_form'); ?>">Add a book</a> </li>
      <li> <a href="<?php echo site_url('borrower/show_borrowers'); ?>">Borrowers</a> </li>
      <li> <a href="<?php echo site_url('borrow/borrow_a_book'); ?>">Borrow</a> </li>
      <li> <a href="<?php echo site_url('borrow/show_borrows'); ?>">Show Borrows</a> </li>
    </ul>

  </div>
  <div class="page">
    <?php
    if(isset($_SESSION['logged_in'])){
      echo '<a href="'.site_url('login/logout').'">Logout</a>';
    }
    else {
      echo '<a href="'.site_url('login/login_form').'">Login</a>';
    }
     ?>
    <div class="container">
