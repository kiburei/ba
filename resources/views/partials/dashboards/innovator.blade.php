<div class="col-lg-12">   
	<div class="step__feedback msg__box">
		Project created successfully.
	</div>

	<form class="innoNew">
		<header class="innoDetails__header">
			<input type="text" placeholder=" A new way to send money home" class="inno-title">
			<button type="button" class="cta cta__btn cta__create">Create</button>

		</header>
		<div class="step__2">
			<section class="innoDetails__content">
				<textarea class="inno-summary" rows="5" placeholder="Tell us about your something about that idea..."></textarea>
			</section>
			<footer class="innoDetails__footer">
				<div class="pull-left">
					Filed under
					<select class="inno-category">
						<option value="" disabled selected>Uncategorized</option>
						<option value=".art">Art</option>
						<option value=".crafts">Crafts</option>
						<option value=".dance">Dance</option>
						<option value=".design">Design</option>
						<option value=".education">Education</option>
						<option value=".fashion">Fashion</option>
						<option value=".film">Film & Video</option>
						<option value=".food">Food</option>
						<option value=".games">Games</option>
						<option value=".journalism">Journalism</option>
						<option value=".music">Music</option>
						<option value=".photography">Photography</option>
						<option value=".technology">Technology</option>
					</select>
				</div>
				<div class="pull-right">
					<button type="button" class="cta cta__link cta__next">Step 3 of 3: Enter funding details</button>
				</div>
			</footer>
		</div>

		<div class="step__3">
			<footer class="innoDetails__footer">
				<div class="pull-left">
					<input type="name" placeholder="Ksh. 1,000,000">
				</div>
				<div class="pull-right">
					<button type="button" class="cta cta__btn cta__publish">Publish</button>
				</div>
			</footer>
		</div>
	</form>
</div> <!-- end col-lg-9 -->

<div class="row innovation-pane">
	<div class="col-lg-12">
		<nav class="innoFilters">
			<button class="filter current" data-filter="*">Show all</button>
			<button class="filter" data-filter=".art">Art</button>
			<button class="filter" data-filter=".crafts">Crafts</button>
			<button class="filter" data-filter=".dance">Dance</button>
			<button class="filter" data-filter=".design">Design</button>
			<button class="filter" data-filter=".education">Education</button>
			<button class="filter" data-filter=".fashion">Fashion</button>
			<button class="filter" data-filter=".film">Film & Video</button>
			<button class="filter" data-filter=".food">Food</button>
			<button class="filter" data-filter=".games">Games</button>
			<button class="filter" data-filter=".journalism">Journalism</button>
			<button class="filter" data-filter=".music">Music</button>
			<button class="filter" data-filter=".photography">Photography</button>
			<button class="filter" data-filter=".technology">Technology</button>
		</nav>
	</div>

	<div class="col-lg-9">
		@include('partials.innovations.open')
	</div>

	<aside class="col-lg-3">
		@include('partials.innovations.funded')
	</aside>
</div>
