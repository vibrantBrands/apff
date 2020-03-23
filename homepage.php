<?php require('elements/header.php'); ?>

<div class="page-content">
	<section class="hero">
		<div class="hero-text">
			<p>Bridging the Gap</p>
			<p><span>Supporting Albany City's Police and Fire</span></p>
		</div>
		<a class="btn" href="/about">Learn More<i class="fa fa-chevron-right"></i></a>
		<div class="support-text">
			<div>SUPPORT APFF</div>
			<div><a class="btn" href="/donate">DONATE<i class="fa fa-chevron-right"></i></a></div>
		</div>
	</section>

	
	<section class="sponsors">
		<div class="container">
			<div class="title">OUR SPONSORS</div>
			<div class="logos">
				<?php
              $fs = FileSet::getByName('sponsors');
              $fl = new FileList();
              $fl->filterBySet($fs);
              $fl->sortBy('fsDisplayOrder', 'asc');
              $files = $fl->get();
             
              foreach($files as $f) {
                $imagepath = $f->getRelativePath();
                $alt = $f->getTitle();
                 ?>
                 <div>
                	<img src='<?php echo $imagepath; ?>' alt='<?php echo $alt; ?>' />
            	</div>
              
              <?php }
            ?>
			</div>
		</div>
	</section>

	<section class="mission-statement">
		<div class="container">
			<div>
				<h2>APFF MISSION</h2>
				<?php
					$a = new Area("Mission Statement");
					$a->display();
			    ?>
			</div>
			<div>
				<?php
					$a = new Area("First Picture");
					$a->display();
			    ?>
			</div>
		</div>
	</section>

	<section class="board-of-directors">
		<div class="container">
			<div>
				<?php
					$a = new Area("2nd Picture");
					$a->display();
			    ?>
			</div>
			<div>
				<?php
					$a = new Area("Board Header");
					$a->display();
			    ?>
				<?php
					$a = new Area("Board of Directors");
					$a->display();
			    ?>
			</div>
		</div>
	</section>

	<section class="upcoming-events">
		<div class="container">
			<h2><i class="fa fa-calendar-alt"></i>NEWS & EVENTS</h2>
			<?php
				$a = new Area("Upcoming Events");
				$a->display();
			?>
			<div class="link-wrapper">
				<a href="/events">See more events...</a>
			</div>
		</div>
	</section>

	<section class="social">
		<div class="container">
			<div>
				<h2><i class="fa fa-comments"></i>LET'S GET SOCIAL</h2>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falbanynypoliceandfirefoundation%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="310" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>
			<div>
				<?php
					$a = new Area("Image");
					$a->display();
				?>
			</div>
		</div>
			
	</section>

</div>

<?php require('elements/footer.php'); ?>
