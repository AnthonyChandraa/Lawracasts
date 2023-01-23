<?php

namespace App\View\Components\Podcast;

use Illuminate\View\Component;

class EditPodcastForm extends Component
{

    public $edit;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($edit)
    {
        $this->edit = $edit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.podcast.edit-podcast-form');
    }
}
