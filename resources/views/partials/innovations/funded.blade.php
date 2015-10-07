<div class="funded-projects">
	<header>
		<h2 class="section__title">Funded Projects</h2>
	</header>
	
	<section class="innoList">

        @foreach($innovations as $funded)

		<article class="inno education" data-category="education">
			<header>
				<h3 class="inno-title">
					<a href="">{{ $funded->innovationTitle }}</a>
				</h3>
			</header>
			<footer class="inno-meta">
				<div class="inno-category">{{ $funded->category->categoryName}}</div>
				<div class="inno-innovator"></div>
			</footer>
		</article>

        @endforeach
	</section>
</div>