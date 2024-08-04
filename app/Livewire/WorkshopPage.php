<?php

namespace App\Livewire;

use App\Models\Workshop;
use Livewire\Component;

class WorkshopPage extends Component
{
    public function render()
    {
        $workshops = Workshop::all();

        return view("pages.workshop", [
            "workshops" => $workshops,
        ]);
    }
}
