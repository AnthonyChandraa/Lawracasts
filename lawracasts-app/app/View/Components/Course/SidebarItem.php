<?php

namespace App\View\Components\Course;

use Illuminate\View\Component;

class SidebarItem extends Component
{
    public $detail;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($detail, $selected)
    {
        $this->detail = $detail;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course.sidebar-item');
    }
}
