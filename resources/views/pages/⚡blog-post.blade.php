<?php

use App\Services\ApiService;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::public')] class extends Component
{
	public $post = [];

	public function mount(string $slug)
	{
		$this->post = ApiService::getPostBySlug($slug);
	}
};
?>

<div>
	<h1>{{ $post['title']['rendered'] }}</h1>
	<div>{!! $post['content']['rendered'] !!}</div>
</div>