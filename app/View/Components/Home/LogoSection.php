<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LogoSection extends Component
{
    public $logos;
    /**
     * Create a new component instance.
     */
    public function __construct($logos)
    {
        $this->logos = $logos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.logo-section');
    }
}
