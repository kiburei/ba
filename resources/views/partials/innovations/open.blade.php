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

                            <a  href="{{url('innovation/'.$innovation->id)}}">

                                {{ $innovation->innovationTitle }}
                            </a>

					</h3>
                    @if(\Auth::user()->id == $innovation->user_id)
                    @else
                    <p class="inno-innovator">{{ $innovation->user->name }}</p>
                    @endif
				</header>
				<p class="inno-summary">
					{!! $innovation->innovationDescription !!}
				</p>
				<footer class="inno-meta">

                    <div class="inno-category">Category:{{ $innovation->category->categoryName }}</div>

                    <br>
                    <div class="inno-category">
                        Amount Needed : {{ $innovation->innovationFund }}<br>

                        Amount for:{{ $innovation->justifyFund }}<br>
                    </div>

					<div class="inno-likes">756</div>
				</footer>
			</article>

        @endforeach
	</section> <!-- end innoList -->

    @else

    <p class="alert-info"><h3>No open innovations</h></h3><p>

    @endif
</div> <!-- end innovations-pane -->
