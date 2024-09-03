<?php

namespace App\Livewire;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        $contactpageQuery = \App\Models\ContactPage::query()->where('is_active',1)->get();
        $titlePageQuery =\App\Models\TitlePages::first();
        return view('livewire.contact-page',[
            'contact' => $contactpageQuery,
            'title_page' => $titlePageQuery,
        ]);
    }
}
