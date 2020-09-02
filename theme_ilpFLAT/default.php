<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

        <div>
          <?php
          $a = new Area('Main');
          $a->display($c);
          ?>
          <div style="clear: both;">&nbsp;</div>
        </div> <!-- /c5 Main Area-->
      </div> <!-- /container -->

<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/footer.php');
?>