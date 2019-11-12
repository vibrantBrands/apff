<?php require('elements/header.php'); ?>

<div class="page-content">

	<?php
       $page = Page::getCurrentPage();

           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
        
        <section class="hero" style="background:url('<?php echo $image_src; ?>');background-size:cover;">
           
       <?php else: ?>
           <section class="hero">  
       <?php endif; ?>

		<div class="hero-text">
			<p>Bridging the Gap</p>
			<p><span>Supporting our Albany Heroes</span></p>
		</div>
		<a class="btn" href="/">Learn More<i class="fa fa-chevron-right"></i></a>
		<div class="support-text"><span>YOU CAN BE A HERO TO OUR HEROES</span> SUPPORT THE FOUNDATION<a class="btn" href="/">SUPPORT ALBANY<i class="fa fa-chevron-right"></i></a></div>
	</section>

	<?php
		$a = new Area("Sponsor Logos");
		$a->display();
	?>

</div>

<?php require('elements/footer.php'); ?>
