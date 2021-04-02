<!-- Services section -->
<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$datatitre[2]->titre}}</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach ($dataservice->random(9) as $item)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$item->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->description, 180)}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
</div>
<!-- services section end -->