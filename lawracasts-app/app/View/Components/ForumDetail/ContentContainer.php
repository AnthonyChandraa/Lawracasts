<?php

namespace App\View\Components\ForumDetail;

use Illuminate\View\Component;

class ContentContainer extends Component
{
    public $forum;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($forum)
    {
        $this->forum = $forum;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum-detail.content-container');
    }
}
