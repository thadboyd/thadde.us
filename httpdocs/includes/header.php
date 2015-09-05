<?php
/* header.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common header for all pages
 */
 
require_once('includes/data.php');
require_once('includes/functions.php');

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
  <link rel="stylesheet" type="text/css" href="css/app.css" />
</head>

<body id="page-<?php echo($pageShortName); ?>" class="antialiased">

<header id="mainHeader" class="fixed">
  <nav class="top-bar collapsed" role="navigation" data-topbar="">
    <ul class="title-area">
      <li class="name">
        <h1 id="siteTitle"><a href="//thadde.us/">thadde.us</a></h1>
      </li>
      <li class="toggle-topbar menu-icon">
        <a href=""><span>Menu</span></a>
      </li>
    </ul>

    <?php require_once('includes/topnav.php'); ?>
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
    <div class="columns small-12">
      <h1><?php echo($pageTitle); ?></h1>
    </div>
  </header>
<?php
} ?>