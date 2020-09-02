<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>  
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-7">
            <?php
            $a = new Area('Footer');
            $a->display($c);
            ?>
              <p class="pvl">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.ilpdev.com" data-text="iLP Development :: Internet Logistics &amp; Publishing" data-via="ilpdev" data-size="large">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </p>
              <p>
                <br />
                &copy; <?php  echo date('Y')?> <a href="<?php  echo DIR_REL?>/"><?php  echo SITE?></a>.
                <?php  echo t('All rights reserved.')?>
                <a href="http://www.concrete5.org/r/-/82852" title="<?php  echo t('concrete5 - open source content management system for PHP and MySQL')?>"><?php  echo t('concrete5 CMS')?></a>. ilpFLAT theme by <a href="http://www.concrete5.org/profile/-/view/82852/">iLP</a>.  
              </p>
            </div> <!-- /span7 -->

            <div class="col-md-5">
              <div class="footer-banner">
            <?php
            $a = new Area('Footer Banner');
            $a->display($c);
            ?>
              </div>
            </div>
          </div> 
        </div>
      </footer>
        
      <!-- Load JS here for greater good =============================-->
<!--        <script src="<?php print $this->getThemePath(); ?>/js/jquery-1.8.3.min.js"></script>-->
        <script src="<?php print $this->getThemePath(); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/bootstrap-select.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/bootstrap-switch.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/flatui-checkbox.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/flatui-radio.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/jquery.tagsinput.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/jquery.placeholder.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/jquery.stacktable.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
        <script src="<?php print $this->getThemePath(); ?>/js/application.js"></script>

      </div> <!-- /c5 wrapper--> 

    <?php Loader::element('footer_required'); ?> <!-- /c5 Footer Required-->

  </body>
</html>