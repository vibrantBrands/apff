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
                    <?php
                        $a = new GlobalArea('Footer Area 3');
                        $a->display();
                    ?>
                </div>
                <div>
                   <h2>Connect With Us</h2>
                   <ul class="social">
                       <li>
                        <a href="https://www.facebook.com/albanynypoliceandfirefoundation/">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                       </li>
                       <li>
                        <a href="">
                           <i class="fab fa-twitter"></i>
                        </a>
                       </li>
                       <li>
                           <i class="fab fa-youtube"></i>
                       </li>
                       <li>
                           <i class="fab fa-instagram"></i>
                       </li>
                   </ul>
                </div>
            </div>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
