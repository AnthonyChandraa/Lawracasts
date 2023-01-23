<?php

namespace App\View\Components\ForumDetail;

use Illuminate\View\Component;

class CommentsContainer extends Component
{
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum-detail.comments-container');
    }
}
