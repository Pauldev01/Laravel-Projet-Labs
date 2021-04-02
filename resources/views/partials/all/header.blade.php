<!-- Header section -->
<header class="header-section">
		<div class="logo ">
			<img class="" style="width: 25%" src = "{{--{{$datalogo -> src}}--}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="{{ Request::is('/') ? 'active' : '' }}">
					<a href="/">Home</a>
				</li>
				<li class="{{ Request::is('Service') ? 'active' : '' }}">
					<a href="/Service">Services</a>
				</li>
				<li class="{{ Request::is('Blog') ? 'active' : '' }}">
					<a href="/Blog">Blog</a>
				</li>
				<li class="{{ Request::is('Contact') ? 'active' : '' }}">
					<a href="/Contact">Contact</a>
				</li>
			</ul>
		</nav>
</header>
<!-- Header section end -->