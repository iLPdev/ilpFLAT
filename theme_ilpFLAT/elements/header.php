<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,700italic,900,400italic,300" />
    <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('bootstrap/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('css/flat-ui.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php print $this->getStyleSheet('css/ilpdev.css'); ?>" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php print $this->getThemePath(); ?>/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="c5wrapper"> <!--c5 wrapper -->

      <nav class="navbar navbar-inverse nav-justified" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="navbar-brand">[ <a href="<?php
              echo DIR_REL?>/"><?php
              $block = Block::getByName('My_Site_Name');
              if($block && $block->bID) $block->display();
              else echo SITE;?></a> ]
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <?php
                      $a = new GlobalArea('Header Menu');
                      $a->setBlockLimit(1);
                      $a->display($c);
                      ?>
        </div><!-- /.navbar-collapse -->
      </nav> 

      <div class="container"><!-- /container -->

        <div class="demo-headline"> <!-- /demo-headline -->
          <h1 class="demo-logo">
            <?php
            $a = new Area('Header');
            if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
                $a->setBlockLimit(1);
                $a->display($c);
            } else { ?>
                <div class="logo"></div>
                ilpFLAT
                <small>Flexible, Liquid, And Trendy</small>
            <?php } ?>
          </h1>
        </div> <!-- /demo-headline -->