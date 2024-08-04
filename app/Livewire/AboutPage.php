<?php

namespace App\Livewire;

use App\Models\Collaborator;
use App\Models\Sponsor;
use Livewire\Component;

class AboutPage extends Component
{
    public $sponsors;
    public $collaborators;

    public function mount()
    {
        $this->sponsors = Sponsor::latest()->take(10)->get();
        $this->collaborators = Collaborator::latest()->take(10)->get();
    }

    public function render()
    {
        return view("pages.about");
    }
}
