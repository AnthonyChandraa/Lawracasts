<?php

namespace App\View\Components\Podcast;

use Illuminate\View\Component;

class PodcastsContainer extends Component
{
    public $podcasts;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($podcasts, $selected)
    {
        $this->podcasts = $podcasts;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.podcast.podcasts-container');
    }
}
