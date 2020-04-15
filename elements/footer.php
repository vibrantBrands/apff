<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
      <div class="container">
                <div>
                    <?php
                        $a = new GlobalArea('Footer Area 1');
                        $a->display();
                    ?>
                </div>
                <div>
                    <?php
                        $a = new GlobalArea('Footer Area 2');
                        $a->display();
                    ?>
                </div>
                <div>
                   <h2>Join Our Mailing List</h2>

                <p>
                    <!-- Begin Constant Contact Inline Form Code -->
                    <div class="ctct-inline-form" data-form-id="dbc3e16a-301c-40aa-bcf8-52531716df5e"></div>
                    <!-- End Constant Contact Inline Form Code -->
                </p>
                </div>
            </div>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
