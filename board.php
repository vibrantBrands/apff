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
			<p>Our Board of Directors</p>
		</div> -->
		<div class="support-text">SUPPORT APFF<a class="btn" href="/donate">DONATE<i class="fa fa-chevron-right"></i></a></div>
	</section>

	<?php
		$a = new Area("Main Page Content");
		$a->display();
	?>
	
	<section class="our-team">
		<div class="container">
			<h2>Board & Staff</h2>
			<?php
				$a = new Area("Staff Photos");
				$a->display();
			?>
		</div>
	</section>
</div>

<?php require('elements/footer.php'); ?>
