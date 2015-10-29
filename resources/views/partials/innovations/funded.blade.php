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
                        <a href="">{{ $funded->innovationTitle }}</a>
                    </h3>
                    @if(\Auth::user()->id == $funded->user_id)
                        <p class="inno-innovator">By you</p>
                    @else
                        <p class="inno-innovator">{{ $funded->user->name }}</p>
                    @endif
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
        <h4>No funded projects</h4>
    @endif
</div>