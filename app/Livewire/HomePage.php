<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomePage extends Component
{
    public $sponsors;
    public $blogs;

    public function mount()
    {
        $this->sponsors = Sponsor::latest()->take(5)->get();
        $this->blogs = Blog::latest()->take(3)->get();
    }

    public function render()
    {
        return view("pages.home");
    }
}
