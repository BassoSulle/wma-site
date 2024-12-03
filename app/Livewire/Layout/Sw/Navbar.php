<?php

namespace App\Livewire\Layout\Sw;

use Livewire\Component;
use App\Models\FormCategory;
use App\Models\Publications;
use App\Models\PublicationCategory;

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
        $this->publication_categories = PublicationCategory::Select($this->current_language . '_title as title', 'slug')->whereRaw('LOWER(en_title) LIKE ?', ['%publication%'])->where('is_active', true)->get();
        $audit_report_category = PublicationCategory::whereRaw('LOWER(en_title) LIKE ?', ['%audit report%'])->first();
        if ($audit_report_category) {
            $this->audit_reports = Publications::Select($this->current_language . '_title as title', 'slug')
                ->where('pub_category_id', $audit_report_category->id)
                ->latest()
                ->get();
        } else {
            $this->audit_reports = collect(); // or = []; for an empty array
        }

        return view('livewire.layout.sw.navbar');
    }
}
