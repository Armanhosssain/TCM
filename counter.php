<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<!-- for responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- font awesome css -->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<!-- animation css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<style>
		.important_main{
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
				background-color: red;
		}
			.important_right{
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				display: flex;
				justify-content: space-between;
			
			}
		</style>
	</head>
	<body>
		<!-- start important facts section -->
		<section class="important">
			<div class="container">		<!-- start container -->
			<div class="important_main">
				<div class="important_left">
					<h2 class="impo_top_txt">
					Important Facts
					</h2>
					<p class="impo_bottom_txt">
						Nam liber tempor cum soluta nobis eleifend option
						doming id quod mazim facer possim assum.
					</p>
					<button class="impor_btn">CONTACT US</button>
				</div>
				<div class="important_right">
					<div class="impo_right_items" id="shiva">
						<h1 class="inside_items count">40</h1>
						<p class="inside_bottom">teachers</p>
					</div>
					<div class="impo_right_items" id="shiva">
						<h1 class="inside_items count">50</h1>
						<p class="inside_bottom">students</p>
					</div>
					<div class="impo_right_items" id="shiva">
						<h1 class="inside_items count">20</h1>
						<p class="inside_bottom">courses</p>
					</div>
					<div class="impo_right_items" id="shiva">
						<h1 class="inside_items count">34</h1>
						<p class="inside_bottom">award winning</p>
					</div>
				</div>
			</div>
			</div>		<!-- end container -->
		</section>
		<!-- end important facts section -->
		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
		<!-- jquery link -->
		<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
		<!-- main customize js link -->
		<script type="text/javascript" src="js/main.js"></script>
		<!-- font awesome js link-->
		<script type="text/javascript" src="js/all.min.js"></script>
		<script>
			// counter js start
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 6000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
// counter js end
		</script>
	</body>
</html>