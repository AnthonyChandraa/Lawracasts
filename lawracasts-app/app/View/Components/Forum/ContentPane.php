<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class ContentPane extends Component
{

    public $forums;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($forums)
    {
        $this->forums = $forums;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum.content-pane');
    }
}
