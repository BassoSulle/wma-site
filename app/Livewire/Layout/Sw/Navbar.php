<?php

namespace App\Livewire\Layout\Sw;

use Livewire\Component;
use App\Models\FormCategory;
use App\Models\PublicationCategory;

class Navbar extends Component
{
    public $current_language;

    public $form_categories = [];

    public $publication_categories = [];

    public function mount($current_language)
    {
        $this->current_language = $current_language;
    }

    public function render()
    {
        $this->form_categories = FormCategory::Select($this->current_language . '_title as title', 'slug')->get();
        $this->publication_categories = PublicationCategory::Select($this->current_language . '_title as title', 'slug')->get();

        return view('livewire.layout.sw.navbar');
    }
}
