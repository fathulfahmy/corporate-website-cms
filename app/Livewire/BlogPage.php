<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    public $category;

    public function mount($category = "")
    {
        $this->category = $category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this->redirect(
            route("blog", ["category" => $category]),
            navigate: true,
        );
    }

    public function render()
    {
        $query = Blog::query()->orderBy("updated_at", "DESC");

        return view("pages.blog", [
            "blogs" =>
                $this->category != ""
                    ? $query->where("category", $this->category)->paginate(15)
                    : $query->paginate(15),
        ]);
    }
}
