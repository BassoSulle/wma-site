<?php

namespace App\Livewire\Layout\En;

use App\Models\FormCategory;
use App\Models\PublicationCategory;
use App\Models\Publications;
use Livewire\Component;

class Navbar extends Component
{
    public $current_language;

    public $form_categories = [];

    public $publication_categories = [];

    public $audit_reports = [];

    public function mount($current_language)
    {
        $this->current_language = $current_language;
    }

    public function render()
    {
        $this->form_categories = FormCategory::Select($this->current_language . '_title as title', 'slug')->get();
        $this->publication_categories = PublicationCategory::Select($this->current_language . '_title as title', 'slug')->get();
        $audit_report_category = PublicationCategory::whereRaw('LOWER(en_title) like ?', ['%audit report%'])->first();
        $this->audit_reports = Publications::Select($this->current_language . '_title as title', 'slug')->where('pub_category_id', $audit_report_category->id)->latest()->get();

        return view('livewire.layout.en.navbar');
    }
}