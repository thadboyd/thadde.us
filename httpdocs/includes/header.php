<?php
/* header.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common header for all pages
 */
 
require('includes/data.php');
require('includes/functions.php');

$hasHero = function_exists(hero);
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
  <link rel="stylesheet" type="text/css" href="/css/app.css" />
</head>

<body id="page-<?php echo($pageShortName); ?>" class="antialiased">

<?php require('includes/google-analytics.php'); ?>

<header id="mainHeader">
  <nav class="top-bar collapsed" role="navigation" data-topbar="">
    <ul class="title-area">
      <li class="name">
        <h1 id="siteTitle"><a href="//thadde.us/">thadde.us</a></h1>
      </li>
      <li class="toggle-topbar menu-icon">
        <a href=""><span>Menu</span></a>
      </li>
    </ul>

    <?php require('includes/topnav.php'); ?>
  </nav>
</header>

<?php if($hasHero) { ?>
<header class="panel hero">
  <?php hero(); ?>
</header><!-- hero -->
<?php
} ?>

<section id="main-content">

<?php if(!$hasHero) { ?>
  <header class="row">
    <h1><?php echo($pageTitle); ?></h1>
  </header>
<?php
} ?>