<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The library example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <ul>
      <li> <a href="<?php echo site_url('book/show_books'); ?>">Books</a> </li>
      <li> <a href="<?php echo site_url('borrower/show_borrowers'); ?>">Borrowers</a> </li>
    </ul>
