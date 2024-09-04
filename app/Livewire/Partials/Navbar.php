<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $navbars = \App\Models\Navbar::first();
        return view('livewire.partials.navbar',[
            'navbar' => $navbars
        ]);
    }
}
