{{--@inject('viewHelper', 'App\ViewHelpers\AppHelper')--}}

<nav class="page navbar">
	<span class="navbar-head">
		<span class="material-symbols-outlined filled-icon">bubble_chart</span>
		@yield('navHead')
	</span>
	<span class="navbar-action">
		<a class="btn btn-profile" data-bs-toggle="offcanvas" href="#popup-profile" role="button" aria-controls="popup-profile">
			<span class="material-symbols-outlined">person</span>
		</a>
		@yield('navAction')
	</span>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="popup-profile" aria-labelledby="popup-profile">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">Profile</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="info">
			<span class="material-symbols-outlined filled-icon">assignment_ind</span>
			<div class="profile">
				<p>T222222</p>
				<p>李先生</p>
				<p>資訊部</p>
				<p>工讀生</p>
			</div>
		</div>
		<div class="dropdown mt-3">
			<button class="btn btn-secondary" type="button">
			Edit
			</button>
		</div>
	</div>
</div>