<?php

namespace App\View\Components\Podcast;

use Illuminate\View\Component;

class PodcastItem extends Component
{
    public $podcast;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($podcast,$selected)
    {
        $this->podcast = $podcast;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.podcast.podcast-item');
    }
}
