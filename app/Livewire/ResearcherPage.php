<?php

namespace App\Livewire;

use App\Models\Associate;
use App\Models\Fellow;
use App\Models\Postdoctoral;
use App\Models\Postgraduate;
use Livewire\Component;
use Livewire\WithPagination;

class ResearcherPage extends Component
{
    use WithPagination;

    public $role;

    public function mount($role = "fellows")
    {
        $this->role = $role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this->redirect(
            route("researchers", $role),
            navigate: true,
        );
    }

    public function render()
    {
        switch ($this->role) {
            case "fellows":
                $researchers = Fellow::query()
                    ->orderBy("updated_at", "DESC")
                    ->paginate(15);
                break;
            case "associates":
                $researchers = Associate::query()
                    ->orderBy("updated_at", "DESC")
                    ->paginate(15);
                break;
            case "postdoctorals":
                $researchers = Postdoctoral::query()
                    ->orderBy("updated_at", "DESC")
                    ->paginate(15);
                break;
            case "postgraduates":
                $researchers = Postgraduate::query()
                    ->orderBy("updated_at", "DESC")
                    ->paginate(15);
                break;
            default:
                $researchers = Fellow::query()
                    ->orderBy("updated_at", "DESC")
                    ->paginate(15);
                break;
        }

        return view("pages.researcher", [
            "researchers" => $researchers,
        ]);
    }
}
