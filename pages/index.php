{% extends "base.html" %}
{% block extraScripts %}
	<link rel="stylesheet" href="static/js/FlexSlider/flexslider.css">
	<script src="static/js/FlexSlider/jquery.flexslider.js"></script>
	<script type="text/javascript">
	  $(window).load(function() {
	    $('.flexslider').flexslider({
	    	manualControls: ".sliderImageSelect li",
	    	animation: "slide",
	    });
	  });
	</script>
{% endblock %}
{% block pageContent %}
	<section class="homeSlider">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="static/img/home_slider_1.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_2.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_3.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_1.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_2.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_3.png" alt="slider image"/>
		    </li>
		    <li>
		      <img src="static/img/home_slider_3.png" alt="slider image"/>
		    </li>

		  </ul>
		</div>
		<div class="container">
			 <ol class="sliderImageSelect">
				<li>1 |</li>
				<li>2 |</li>
				<li>3 |</li>
				<li>4 |</li>
				<li>5 |</li>
				<li>6 |</li>
				<li>7</li>
			</ol>
			<div class="sliderCaption">
				<blockquote>
					<p>&#8220;Donec auctor volutpat lorem, nec cursus augue congue ac. Curabitur malesuada lacinia lorem...&#8221;</p>
				</blockquote>
				<cite>Warren Moore</cite>
			</div>
		</div>

	</section>
	<section class="introduction">
		<div class="container">
			<h2>Introduction</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed facilisis neque, a pulvinar justo. Vivamus vehicula ligula diam, sit amet dictum mi aliquet in. Mauris sed lectus a sem interdum convallis. Duis dictum luctus purus, non porta neque aliquam in. Integer lobortis vestibulum vehicula. Morbi ut faucibus felis. Quisque nec ultrices quam. Vivamus erat leo, placerat et sem a, consequat euismod erat.</p>
			<div class="clear"></div>
		</div>
	</section>
	<section class="twitterFeed">
		<div class="container">
			<h2><span class="socialMedia">&#62993;</span> Latest Tweets</h2>
			<p class="openQuote">&#8220;</p>
			<blockquote>
				<?php 
					require 'twitter.php';
					echo getLatestTweet();
				 ?>
			</blockquote>
			<p class="closeQuote">&#8221;</p>
		</div>
	</section>
{% endblock %}
