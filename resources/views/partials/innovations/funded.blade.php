<div class="funded-projects">
	<header>
		<h2 class="section__title">Funded Projects</h2>
	</header>

    @if(\Auth::user()->userCategory == 1)
        @if($fundedProjects->count())
            <section class="innoList">

                @foreach($fundedProjects as $funded)

                <article class="inno {{$funded->category->categoryName}}" data-category="{{ $funded->category->id }}">
                    <header>
                        <h3 class="inno-title">
                            <a href="{{ url('innovation/'.$funded->id) }}">{{ $funded->innovationTitle }}</a>
                        </h3>
                            <p class="inno-innovator">Funded by:{{ $funded->fund->name }}</p>
                            <p class="inno-innovator">Amount:{{ $funded->innovationFund }}</p>
                    </header>
                    <footer class="inno-meta">
                        <div class="inno-category">{{ $funded->category->categoryName}}</div>
                        <div class="inno-innovator"></div>
                    </footer>
                </article>

                @endforeach
            </section>
        @else
            <h4>No funded projects</h4>
        @endif
    @else

        @if($fundedProjects->count())
        <section class="innoList">

            @foreach($fundedProjects as $funded)

            <article class="inno {{$funded->innovation->category->categoryName}}" data-category="{{ $funded->innovation->category->id }}">
                <header>
                    <h3 class="inno-title">
                        <a href="{{ url('innovation'.$funded->id)}}">{{ $funded->innovation->innovationTitle }}</a>
                    </h3>
                    <p class="inno-innovator">Posted by: {{ $funded->innovation->user->name }}</p>
                    <p class="inno-innovator">Amount Funded: {{ $funded->innovation->innovationFund }}</p>

                </header>
                <footer class="inno-meta">
                    <div class="inno-category">{{ $funded->innovation->category->categoryName}}</div>
                    <div class="inno-innovator"></div>
                </footer>
            </article>

            @endforeach
        </section>
        @else
        <h4>No funded projects</h4>
        @endif
    @endif
</div>
