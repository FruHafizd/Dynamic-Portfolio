<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectPage extends Component
{
    public function render()
    {

        $projectPageQuery = \App\Models\ProjectPage::all();
        // $projectPageQuery = \App\Models\ProjectPage::query()->where('is_active',1)->first();
        $titlePageQuery =\App\Models\TitlePages::first();

        return view('livewire.project-page',[
            'project_page'=> $projectPageQuery,
            'title_page'=> $titlePageQuery,
        ]);
    }
}
