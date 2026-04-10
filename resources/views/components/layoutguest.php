<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $pageTitle;
    
    public function __construct($pageTitle = null)
    {
        $this->pageTitle = $pageTitle;
    }
    
    public function render()
    {
        return view('components.guest-layout');
    }
}