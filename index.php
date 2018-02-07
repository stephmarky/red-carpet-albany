<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/all.css">

	<title>Home | Red Carpet Inn Albany</title>

</head>

<body id="index">

	<?php include("includes/nav.php"); ?>

	<div class="main-content-hidden">
		<div id="slideshow">
			<div class="banner">
				<img src="images/front.JPG" alt="front">
			</div>
		</div>


		<div id="message">
			<div class="section-text">
				<h1>The Best Value in the Capital Region</h1>
				<p>
					With reasonable rates, Wi-Fi access in all rooms, and an easy drive 2
					mile drive from Times Union Arena, Palace Theater, Armory and other
					downtown attractions, we are the best value motel option in the Albany region.
				</p>
				<p id="slogan">
					Enjoy all the advantages of being close to downtown, without the noise
					and the clutter!
				</p>
			</div>

		</div>



		<div id="reviews">
			<div class="half">
				<img src="images/lobby.jpg">
			</div>

			<div class="half" id="quote">
				<h2>
					"Very convenient and close to everything. The property was clean and
					the staff was nice. Great price"
				</h2>
				<p class="quote-cite">– Natasha, Booking.com</p>

				<h2>
					"Convenient to expressways, good size room, lots of easy to access free parking."
				</h2>
				<p class="quote-cite">– dgl624, Booking.com</p>

			</div>
		</div>

		<div id="booking">
			<h1>Book now through one of our trusted partners:</h1>

			<div id="logos">
				<div class="bookingsite">
					<img src="images/booking-logo.png" alt="booking.com">
					<a href="https://www.booking.com/hotel/us/red-carpet-inn-albany.html" target="_blank">
						<p class="book-button">Book with Booking.com</p>
					</a>

				</div>

				<div class="bookingsite">
					<img src="images/expedia.png" alt="expedia.com">
					<a href="https://www.expedia.com/Albany-Hotels-Red-Carpet-Inn.h7858750.Hotel-Information" target="_blank">
						<p class="book-button">Book with Expedia</p>
					</a>

				</div>

			</div>

			<div id="inquiry">
				<h1>Call our front desk for any questions:</h1>
				<h2 id="phonenum">518-462-5562</h2>
			</div>

		</div>

		<div id="enjoy">
			<div class="banner">
				<img src="images/downtown-albany.jpg">
			</div>
		</div>


		<?php include("includes/footer.php"); ?>

		</div>


</body>

</html>
