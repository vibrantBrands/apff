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
		$a = new Area("Main Page Content");
		$a->display();
	?>
	
	<section class="our-team">
		<div class="container">
		  <h2>Our Team</h2>
		  <p>
		  	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac consectetur metus, quis posuere elit. Aenean eu erat sit amet ante varius porttitor eu a enim. Sed vitae nulla lacus. Mauris ac consequat ante. Duis ipsum quam, pharetra non sem at, accumsan placerat nunc. Aenean elementum luctus mauris, quis luctus neque cursus quis.
		  </p>

		 	<div class="staff-photos">
		 		<?php
				  $fs = FileSet::getByName('Staff Photos');
				  $fl = new FileList();
				  $fl->filterBySet($fs);
				  $fl->sortBy('fsDisplayOrder', 'asc');
				  $files = $fl->get();
				 
				  foreach($files as $f) {
				    $downloadpath = $f->getDownloadURL();
				    $imagepath = $f->getRelativePath();
				    $title = $f->getTitle();
				    $description = $f->getDescription(); ?>
				    
				    <div class='staff-member'>
						<img src='<?php echo $imagepath; ?>' class="regular_image" />
				         <div class="info">
				            <h3><?php echo $title; ?></h3>
				            <p><a href="">Read bio...</a></p>
				          </div>
				      </div>

				  
				  <?php }
				?>
		 	</div>
		</div>
		<div class="blue-bar">
		 	<img src="<?php echo $this->getThemePath(); ?>/img/blue-band-bg.jpg" alt="Blue Bar"></a>
		</div>
		<div class="gray-bar">
		</div>
	</section>
</div>

<?php require('elements/footer.php'); ?>
