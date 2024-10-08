<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $aboutQuery = \App\Models\AboutPage::query()->where('is_active',1)->first();
        $skillQuery = \App\Models\Skill::query()->where('is_active',1)->get();
        $titlePageQuery =\App\Models\TitlePages::first();


        return view('livewire.about',[
            'about_pages' => $aboutQuery,
            'skill' => $skillQuery,
            'title_page' => $titlePageQuery,
        ]);
    }
}
