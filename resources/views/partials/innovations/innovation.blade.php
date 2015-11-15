<div class="col-lg-12">   
	<div class="ad ad_banner">
		Banner ad
	</div>
</div> <!-- end col-lg-9 -->

<div class="container innovation-pane">
	<div class="col-lg-9">
		<article class="inno innoDetails education" data-category="education">
			<header class="innoDetails__header">
				<hgroup>
					<h3 class="inno-title">{{ $innovation->innovationTitle }}</h3>

                    @if(\Auth::user()->id  == $innovation->user_id)
					<h4 class="inno-innovator">by <a href="#">you</a></h4>
                    @else
                    <h4 class="inno-innovator">by <a href="{{ url('innovator/profile/'.$innovation->user_id) }}">{{ $innovation->user->name }}</a></h4>
                    @endif
				</hgroup>
				<div class="inno-meta">
					Filed under <a href="#" class="inno-category">{{ $innovation->category->categoryName }}</a>
				</div>
			</header>
			<section class="innoDetails__content">
				<p class="inno-summary">
				    {{ $innovation->innovationDescription }}
				</p>
				<!--<h4>What is Robo Wunderkind?</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum. Vivamus sit amet libero turpis, non venenatis urna. In blandit, odio convallis suscipit venenatis, ante ipsum cursus augue.</p>
				<p>Et mollis nunc diam eget sapien. Nulla facilisi. Etiam feugiat imperdiet rhoncus. Sed suscipit bibendum enim, sed volutpat tortor malesuada non. Morbi fringilla dui non purus porttitor mattis. Suspendisse quis vulputate risus. Phasellus erat velit, sagittis sed varius volutpat, placerat nec urna. Nam eu metus vitae dolor fringilla feugiat. Nulla.</p>
				<h4>How does it work?</h4>
				<p>Facilisi. Etiam enim metus, luctus in adipiscing at, consectetur quis sapien. Duis imperdiet egestas ligula, quis hendrerit ipsum ullamcorper et. Phasellus id tristique orci. Proin consequat mi at felis scelerisque ullamcorper. Etiam tempus, felis vel eleifend porta, velit nunc mattis urna, at ullamcorper erat diam dignissim ante. Pellentesque justo risus.</p>
				-->
			</section>
			<hr>
			<footer class="innoDetails__footer">
				<!--<section class="row">
					<div class="col-md-3">
						<h4>About this Innovator</h4>
					</div>
					<div class="col-md-9">
						<div class="media">
							<div class="media-body">
								<p>Facilisi. Etiam enim metus, luctus in adipiscing at, consectetur quis sapien. Duis imperdiet egestas ligula, quis hendrerit ipsum ullamcorper et. Phasellus id tristique orci. Proin consequat mi at felis scelerisque ullamcorper. Etiam tempus, felis vel eleifend porta, velit nunc mattis urna, at ullamcorper erat diam dignissim ante. Pellentesque justo risus.</p>
							</div>
						</div>
					</div>
				</section>
				<hr>-->

				<section class="row">

                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="text-center">Conversation</h4>
                            <div id="itemsList">
                            </div>
                            <form id="addFrm" role="form">

                                <div class="form-group">
                                    <input type="hidden" name="innovation_id" value="{{$id}}">
                                    <input type="text" class="form-control" name="title"  id="title" required="required" placeholder="type your message">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-block btn-primary" name="submit" value="Send">
                                </div>
                            </form>
                            <hr>

                        </div>
                    </div>

				</section>
			</footer>
		</article>
	</div>

	<aside class="col-lg-3">
		<div class="innoData-list">
			<div class="innoData">
				<div class="innoData__title">Funding Needed</div>
				<div class="innoData__content">{{ $innovation->innovationFund }}</div>
			</div>
		</div>

        @if(\Auth::user()->userCategory == 2)
            @if($innovation->fundingStatus == 0 )

            <div class="innoData-list">
                <div class="innoData">
                    <div class="innoData__title">Potential Funding Available</div>
                    <div class="innoData__content">Ksh. 71,000,500</div>
                </div>
                <div class="innoData">
                    <div class="innoData__title">Your Balance after funding this</div>
                    <div class="innoData__content">Ksh. 70,000,500</div>
                </div>
            </div>
            <a href="{{url('innovation/fund/'.$innovation->id)}}"><button class="cta cta_btn">Fund this project</button></a>
            @else
            <button class="cta cta_btn">Funded</button>
            @endif
        @endif
	</aside>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/js/jquery.min.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
        }
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
<script>
    var pusher = new Pusher("{{ env('PUSHER_KEY')}}");
</script>
<script src="{{ asset('js/pusher.js') }}"></script>