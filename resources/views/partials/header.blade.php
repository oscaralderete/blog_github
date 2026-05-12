<header>
	<a href="{{ route('home') }}" wire:navigate>
		<h1>Home</h1>
	</a>

	<menu>
		<a href="{{ route('about') }}" wire:navigate>About</a>
		<a href="{{ route('contact') }}" wire:navigate>Contact</a>
		<a href="{{ route('blog') }}" wire:navigate>Blog</a>
	</menu>
</header>