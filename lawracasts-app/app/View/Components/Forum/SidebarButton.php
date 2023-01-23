<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class SidebarButton extends Component
{

    public $name;
    public $path;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $path)
    {
        $this->name = $name;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum.sidebar-button');
    }
}
