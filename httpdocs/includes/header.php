<?php
/* header.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common header for all pages
 */
 
require('includes/data.php');
require('includes/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $pageTitle ?> &mdash; thadde.us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($pageDesc)) { ?>
  <meta name="description" content="<?php echo($pageDesc); ?>" />
<?php } ?>
  <!-- link rel="stylesheet" type="text/css" href="/css/main.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive.css" / -->
  <link rel="stylesheet" type="text/css" href="/css/app.css" />
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-ui.min.js"></script>
</head>

<body id="page-<?php echo($pageShortName); ?>" class="antialiased">

<?php require('includes/google-analytics.php'); ?>

<header id="mainHeader">
  <h1>
    <span id="siteTitle"><a href="//thadde.us/">thadde.us</a></span>
    <span id="pageTitle"><?php echo($pageTitle); ?></span>
  </h1>

  <?php require('includes/topnav.php'); ?>
</header>

<div class="mainContent">