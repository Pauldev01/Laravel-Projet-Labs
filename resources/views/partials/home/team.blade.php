	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$datatitre[3]->titre}}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($datateam->where('fonction', '!=', 'CEO')->random(2) as $item)
					@if ($loop->iteration == 2)
					<div class="col-sm-4">
						<div class="member">
							{{-- ici on mets le patron --}}
							<img src={{$datateam[0] -> img}} alt="">
							<h2>{{$datateam[0] -> nom}} {{$datateam[0] -> prenom}}</h2>
							<h3>{{$datateam[0] -> fonction}}</h3>
						</div>
					</div>		
					@endif
					<div class="col-sm-4">
						<div class="member">
							<img src={{$item->img}} alt="">
							<h2>{{$item->nom}} {{$item->prenom}}</h2>
							<h3>{{$item->fonction}}</h3>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->