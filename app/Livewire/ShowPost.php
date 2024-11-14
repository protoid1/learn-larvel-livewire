<?php

namespace App\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public string $name = 'randi';
    public function render()
    {
        return view('livewire.show-post');
    }
}
