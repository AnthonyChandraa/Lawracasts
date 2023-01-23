<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class NewThreadForm extends Component
{
    public $topics;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($topics)
    {
        $this->topics = $topics;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum.new-thread-form');
    }
}
