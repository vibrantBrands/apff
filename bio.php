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
			<p>Board Member Biography</p>
		</div>  -->
		<div class="support-text">SUPPORT APFF<a class="btn" href="/donate">DONATE<i class="fa fa-chevron-right"></i></a></div>
	</section>
<section class="board-bio">
	<div class="container">
		<?php
			$a = new Area("Board Bio");
			$a->display();
		?>
	</div>
</section>
</div>

<?php require('elements/footer.php'); ?>
