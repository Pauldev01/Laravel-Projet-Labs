<!-- About section -->
<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($dataservice->random(3) as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$item->icon}}"></i>
							</div>
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->description, 180)}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$datatitre[0]->titre}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$datahome -> paragrapheA}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$datahome -> paragrapheB}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src= {{$dataurl -> img}} alt="">
							<a href="{{$dataurl -> url}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- About section end -->