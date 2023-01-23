<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class ForumItem extends Component
{

    public $id;
    public $title;
    public $content;
    public $topicname;
    public $count;
    public $name;
    public $path;
    public $viewcount;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$title, $content, $topicname, $count, $name, $path, $viewcount)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->topicname = $topicname;
        $this->count = $count;
        $this->name = $name;
        $this->path = $path;
        $this->viewcount = $viewcount;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forum.forum-item');
    }
}
