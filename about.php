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

		<!-- <div class="hero-text">
			<p>Bridging the Gap</p>
			<p><span>Supporting our Albany Police Officers and Firefighters</span></p>
		</div>  
		<a class="btn" href="/">Learn More<i class="fa fa-chevron-right"></i></a> -->
		<div class="support-text">SUPPORT APFF<a class="btn" href="/donate">DONATE<i class="fa fa-chevron-right"></i></a></div>
	</section>

	<?php
		$a = new Area("Main Page Content");
		$a->display();
	?>
</div>

<?php require('elements/footer.php'); ?>
