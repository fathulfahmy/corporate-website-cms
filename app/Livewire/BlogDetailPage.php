<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetailPage extends Component
{
    public $id;

    public function mount($id = null)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view("pages.blog.detail", [
            "blog" => Blog::find($this->id),
        ]);
    }
}
