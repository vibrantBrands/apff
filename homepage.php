<?php require('elements/header.php'); ?>

<div class="page-content">
	<section class="hero">
		<div class="hero-text">
			<p>Bridging the Gap</p>
			<p><span>Supporting our Albany Heroes</span></p>
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
					$a = new Area("Sponsor Logos");
					$a->display();
			    ?>
			</div>
		</div>
	</section>

	<section class="mission-statement">
		<div class="container">
			<div>
				<h2>APFF MISSION</h2>
				<p>The Albany Police and Fire Foundation is dedicated to strengthening the Albany Police and Fire Departments by promoting public safety throughout the city. The Foundation generates support for innovative and creative programs and equipment to continuously improve the technical effectiveness and professionalism of the departments and promote greater understanding between the community at large and Albany Police and Fire Departments.</p>

				<p>The Albany Police & Fire Foundation is a registered 501c3.<br /><a href="/">Learn more...</a></p>
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
					$a = new Area("Board of Directors");
					$a->display();
			    ?>
			</div>
		</div>
	</section>

	<section class="upcoming-events">
		<div class="container">
			<h2><i class="fa fa-calendar-alt"></i>EVENTS</h2>
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
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falbanynypoliceandfirefoundation%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="310" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
