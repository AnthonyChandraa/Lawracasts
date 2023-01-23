<?php

namespace App\View\Components\Podcast;

use Illuminate\View\Component;

class AudioPlayer extends Component
{
    public $podcast;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($podcast)
    {
        $this->podcast = $podcast;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.podcast.audio-player');
    }
}
