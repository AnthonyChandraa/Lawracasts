<?php

namespace App\View\Components\Course;

use Illuminate\View\Component;

class Sidebar extends Component
{

    public $details;
    public $selected;
    public $ismyown;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($details, $selected, $ismyown)
    {
        $this->details = $details;
        $this->selected = $selected;
        $this->ismyown = $ismyown;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course.sidebar');
    }
}
