<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::public', ['title' => 'Home page'])] class extends Component {};
?>

<div>
	<h1>This is HOME</h1>
	<p>No surplus words or unnecessary actions. - Marcus Aurelius</p>
</div>