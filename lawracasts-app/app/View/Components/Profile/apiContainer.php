<?php

namespace App\View\Components\Profile;

use Illuminate\View\Component;

class apiContainer extends Component
{
    public $accessToken;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.api-container');
    }
}
