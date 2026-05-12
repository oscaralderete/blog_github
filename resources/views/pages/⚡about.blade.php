<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::public', ['title' => 'About Us'])] class extends Component
{
	//
};
?>

<div>
	<h1>This is ABOUT</h1>
	<p>Simplicity is the essence of happiness. - Cedric Bledsoe</p>
</div>