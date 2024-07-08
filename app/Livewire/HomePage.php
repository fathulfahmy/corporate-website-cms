<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomePage extends Component
{
    public $logos;
    public $blogs;

    public function mount()
    {
        $this->logos = Sponsor::latest()->take(5)->pluck('logo')->toArray();
        $this->blogs = Blog::latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
