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

                <p><div id="wufoo-k14becj613l9xym"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k14becj613l9xym">online form</a>. </div> <script type="text/javascript"> var k14becj613l9xym; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k14becj613l9xym', 'autoResize':true, 'height':'260', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k14becj613l9xym = new WufooForm(); k14becj613l9xym.initialize(options); k14becj613l9xym.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script></p>
                </div>
            </div>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
