<?php require('includes/functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title ?> &mdash; thadde.us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($desc)) { ?>
  <meta name="description" content="<?php echo($desc); ?>" />
<?php } ?>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <script src="js/jquery.min.js"></script>
</head>

<body>

<header id="mainHeader">
  <h1>
    <div id="siteTitle">thadde.us</div>
    <div id="pageTitle"><?php echo($title); ?></div>
  </h1>

  <?php require('includes/topnav.php'); ?>
</header>

<section id="mainContent">