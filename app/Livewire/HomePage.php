<?php

namespace App\Livewire;

use App\Models\AnimationText;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {   
        $homepageQuery = \App\Models\HomePage::query()->where('is_active',1)->first();
        $animation_text =  AnimationText::query()->where('is_active',1)->first();

        return view('livewire.home-page',[
            'home_pages' => $homepageQuery,
            'animation_texts' => $animation_text,
        ]);
    }
}
