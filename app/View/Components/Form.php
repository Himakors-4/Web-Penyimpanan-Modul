<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;
    public $enctype;
    public $buttonText;

    public function __construct($action, $buttonText = 'Submit', $method = 'POST', $enctype = 'multipart/form-data')
    {
        $this->action = $action;
        $this->buttonText = $buttonText;
        $this->method = $method;
        $this->enctype = $enctype;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.form');
    }
}
