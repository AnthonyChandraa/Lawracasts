<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopicButton extends Component
{

    public $image_url;

    public $id;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $imageUrl, $id)
    {
        $this->name = $name;
        $this->image_url = $imageUrl;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topic-button');
    }
}
