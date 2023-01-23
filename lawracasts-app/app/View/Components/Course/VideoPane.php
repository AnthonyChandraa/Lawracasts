<?php

namespace App\View\Components\Course;

use Illuminate\View\Component;

class VideoPane extends Component
{
    public $selected;
    public $ismyown;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected, $ismyown)
    {
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
        return view('components.course.video-pane');
    }
}
