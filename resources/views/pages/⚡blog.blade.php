<?php

use App\Services\ApiService;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::public')] class extends Component
{
	public $posts = [];

	public function mount()
	{
		$this->posts = ApiService::getAllPosts();
	}
};
?>

<div>
	<h1>My Posts</h1>
	<ul>
		@foreach ($posts as $p)
		<li>
			<h2><a href="{{ route('blog.post', $p['slug']) }}" wire:navigate>{{ $p['title']['rendered'] }}</a></h2>
			<p>{!! $p['excerpt']['rendered'] !!}</p>
		</li>
		@endforeach

	</ul>
</div>