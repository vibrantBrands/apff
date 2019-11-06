<?php require('elements/header.php'); ?>
<div class="page-content">
	<section class="hero">
		<div class="hero-text">
			<p>Bridging the Gap</p>
			<p><span>Supporting our Albany Heroes</span></p>
		</div>
		<a class="btn" href="/">Learn More<i class="fa fa-chevron-right"></i></a>
		<div class="support-text"><span>YOU CAN BE A HERO TO OUR HEROES</span> SUPPORT THE FOUNDATION<a class="btn" href="/">SUPPORT ALBANY<i class="fa fa-chevron-right"></i></a></div>
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
				<h1>APFF MISSION</h1>
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
		<h1><i class="fa fa-calendar-alt"></i>UPCOMING APFF EVENTS</h1>
		<?php
			$a = new Area("Upcoming Events");
			$a->display();
		?>
	</section>

</div>

<?php require('elements/footer.php'); ?>
