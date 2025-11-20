@inject('viewHelper', 'App\ViewHelpers\AppHelper')

<nav class="page navbar {{ $viewHelper->getNavbarStyle() }}">
	<span class="navbar-head">
		<span class="material-symbols-outlined filled-icon">bubble_chart</span>
		@yield('navHead')
	</span>
	<span class="navbar-action">
	@yield('navAction')
	</span>
</nav>