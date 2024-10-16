<?php

namespace App\Livewire;

use App\Models\Workshop;
use Livewire\Component;

class WorkshopPage extends Component
{
    public function render()
    {
        $workshops = Workshop::paginate(10);

        return view("pages.workshop", [
            "workshops" => $workshops,
        ]);
    }
}
