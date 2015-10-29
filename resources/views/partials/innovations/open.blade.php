<div class="open-projects">	
	<header>
		<h2 class="section__title">Open Projects</h2>
	</header>

    @if($innovations->count())



	<section class="innoList innoGrid">

        @foreach($innovations as $innovation)
			<article class="inno {{$innovation->category->categoryName}}" data-category="{{ $innovation->category->id }}">
				<header>
					<h3 class="inno-title">

						@if(\Auth::user()->userCategory == 2)
                            <a  href="/innovation/{{ $innovation->id }}">

                                {{ $innovation->innovationTitle }}
                            </a>

                        @else

                        <a  href="">
                            {{ $innovation->innovationTitle }}
                        </a>

                        @endif


                            </a>
					</h3>
                    @if(\Auth::user()->id == $innovation->user_id)
                    <p class="inno-innovator">By you</p>
                    @else
                    <p class="inno-innovator">{{ $innovation->user->name }}</p>
                    @endif
				</header>
				<p class="inno-summary">
					{{ $innovation->innovationDescription }}
				</p>
				<footer class="inno-meta">

                    <div class="inno-category">{{ $innovation->category->categoryName }}</div>

					<div class="inno-likes">756</div>
				</footer>
			</article>

        @endforeach
	</section> <!-- end innoList -->

    @else

    <p class="alert-info"><h3>No listed innovations</h></h3><p>

    @endif
</div> <!-- end innovations-pane -->
