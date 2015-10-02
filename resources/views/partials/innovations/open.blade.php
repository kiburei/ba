<div class="open-projects">	
	<header>
		<h2 class="section__title">Open Projects</h2>
	</header>

	<section class="innoList innoGrid">
		@for($i=1; $i<=6; $i++)
			<article class="inno education" data-category="education">
				<header>
					<h3 class="inno-title">
						<a href="{{ url('/innovation/'.$i) }}">Creative name for the Innovation</a>
					</h3>
					<p class="inno-innovator">Andrew Mwangi</p>
				</header>
				<p class="inno-summary">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<footer class="inno-meta">
					<div class="inno-category">Education</div>
					<div class="inno-likes">756</div>
				</footer>
			</article>
			<article class="inno " data-category="Technology">
				<header>
					<h3 class="inno-title">
						<a href="{{ url('/innovation/'.$i) }}">Creative name for the Innovation</a>
					</h3>
					<p class="inno-innovator">Andrew Mwangi</p>
				</header>
				<p class="inno-summary">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>
				<footer class="inno-meta">
					<div class="inno-category">Category</div>
					<div class="inno-likes">756</div>
				</footer>
			</article>
		@endfor
	</section> <!-- end innoList -->
</div> <!-- end innovations-pane -->  