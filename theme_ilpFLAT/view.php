<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

        <div>
          <?php
          print $innerContent;
          ?> 
        </div> <!-- /c5 Main Area-->
      </div> <!-- /container -->

<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/footer.php');
?>